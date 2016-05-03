<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Mail;
use Session;

class AdminPannelController extends Controller {

	public function __construct()
	{
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $result=DB::table('users')->get();
		$result2=DB::table('deletedacountsfeedback')->get();

        return view('userAdminPanel')->with('result',$result)
									->with('result2',$result2);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function AdminDashBoard()
	{

		$result=DB::table('recentloggedusers')->orderBy('id', 'desc')->take(5)->get();
		return view('Adminhome')->with('result',$result);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

    public function DeleteUsers($id)
    {
		$res=DB::table('users')->where('id',$id)->first();
		$name=$res->name;
		$idd=Session::put('deletbyadmin',$res->id);

		Mail::raw("Hi ".$name.", Your Account Has been Removed by Match Maker...", function($message)
		{

			$id = Session::get('deletbyadmin');
			$res2=DB::table('users')->where('id',$id)->first();
			$email=$res2->email;

			$message->from('prageethkalhara17@gmail.com', 'Match Maker');

			$message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
		});

       DB::table('users')->where('id', '=', $id)->delete();

        $result=DB::table('users')->get();
		$result2=DB::table('deletedacountsfeedback')->get();

        return view('userAdminPanel')->with('result',$result)
									->with('result2',$result2);


    }

    public function SearchUsers(){

        $name=Input::get("name");
        $result=DB::table('users')->select('id','name','email','admin_activate_state')->where('name','LIKE',"%$name%")->get();
		$result2=DB::table('deletedacountsfeedback')->get();

        return view('userAdminPanel')->with('result',$result)
									->with('result2',$result2);



    }
	public function SearchDeletedUsers(){


		$name=Input::get("dname");
		$result=DB::table('users')->get();
		$result2=DB::table('deletedacountsfeedback')->select('id','name','email','comment')->where('name','LIKE',"%$name%")->get();

		return view('userAdminPanel')->with('result',$result)
									->with('result2',$result2);

	}

	public function DelteDelUsers($id){

		DB::table('deletedacountsfeedback')->where('id', '=', $id)->delete();

		$result=DB::table('users')->get();
		$result2=DB::table('deletedacountsfeedback')->get();
		return view('userAdminPanel')->with('result',$result)
			                         ->with('result2',$result2);



	}

	public function viewAlllogActivities(){


		$result=DB::table('recentloggedusers')->get();
		return view('viewAllLogActivities')->with('result',$result);
	}

	public function DeactivateUsers($id){

		DB::table('users')
			->where('id', $id)
			->update(['admin_activate_state' => 'deactivate']);


		//email function start
		$res=DB::table('users')->where('id',$id)->first();
		$name=$res->name;
		$email=$res->email;
		Session::put('keyemail', $email);

		Mail::raw("Hi ".$name.", Matchmaker Authority has Decided to Deactivate Your Account.", function($message)
		{


			$email=Session::get('keyemail');

			$message->from('prageethkalhara17@gmail.com', 'Match Maker');

			$message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
		});
		//end of the email function


		return redirect()->back();
	}

	public function ActivateUsersByAd($id){

		DB::table('users')
			->where('id', $id)
			->update(['admin_activate_state' => 'activate']);


		//email function start
		$res=DB::table('users')->where('id',$id)->first();
		$name=$res->name;
		$email=$res->email;
		Session::put('keyemailActive', $email);

		Mail::raw("Hi ".$name.", Matchmaker Authority has Decided to Activate Your Account Again.Congradulations..!!.", function($message)
		{


			$email=Session::get('keyemailActive');

			$message->from('prageethkalhara17@gmail.com', 'Match Maker');

			$message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
		});
		//end of the email function


		return redirect()->back();

	}

	public function adminRegistrationForm(){

		$result=DB::table('adminemailbox')->get();

       return view('adminTable')->with('result',$result);

	}

	public function replyForAdminEmails($id){


		$result=DB::table('adminemailbox')->where('id',$id)->first();
		$email=$result->from;

		return view('AdminMailReply')->with('email',$email);




	}

	public function composeForAdminEmails(){

		return view('Aminemailform');
	}


	public function sendAdminsEmail(){



		$message=Input::get('message');

		Mail::raw($message, function($message)
		{


			$name=Input::get('name');
			$email=Input::get('email');
			$message->from('pathmila17@gmail.com', 'Match Maker');

			$message->to($email)->cc('pathmila17@gmail.com')->subject($name);
		});
		//end of the email function


		return view('Aminemailform')->with('message',"Email Sent Successfully..!");
	}

	public function AdminSentEmail(){

		$message=Input::get('message');

		Mail::raw($message, function($message)
		{
			$email=Input::get('email');
			$subject=Input::get('subject');
			$message->from('pathmila17@gmail.com', 'Match Maker');

			$message->to($email)->cc('pathmila17@gmail.com')->subject($subject);
		});
		//end of the email function

		return redirect()->back();

	}

}
