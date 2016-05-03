<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use DB;
use Input;
use Mail;

class AccountsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function DeactivateUser()
	{
		$id = Auth::user()->id;



		DB::table('users')
			->where('id', $id)
			->update(['user_activate_state' => 'deactivate']);

	//Start of the email function
		$res=DB::table('users')->where('id',$id)->first();
		$name=$res->name;

		Mail::raw("Hi ".$name.", You have Deactivated Your Matchmaker Accout..", function($message)
		{

			$id = Auth::user()->id;
			$res2=DB::table('users')->where('id',$id)->first();
			$email=$res2->email;

			$message->from('prageethkalhara17@gmail.com', 'Laravel');

			$message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
		});

	//End of the email function
		return redirect('auth/logout');

	}

	public function Delete()
	{
		$id=Auth::user()->id;
		$result=DB::table('users')->where('id',$id)->first();
		$name=$result->name;
		$email=$result->email;
		return view('AcountDeleteFeedback')->with('name',$name)
						                   ->with('email',$email);
	}

	public function submitFeedBack(){

		$name=Input::get('name');
		$email=Input::get('email');
		$comment=Input::get('comment');

		DB::table('deletedacountsfeedback')->insert(
			['name' => $name, 'email' => $email , 'comment' => $comment]
		);

		//send the email-------
		Mail::raw("Hi ".$name.", You have Removed Your Account.Thank You For Staying with Matchmaker.", function($message)
		{


			$email=Input::get('email');

			$message->from('prageethkalhara17@gmail.com', 'Laravel');

			$message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
		});
		//end of the email function

		//Delete the user
		$id=Auth::user()->id;
		DB::table('users')->where('id', '=', $id)->delete();



		return redirect('auth/logout');

	}

}
