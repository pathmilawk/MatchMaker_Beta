<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;


class AdminPannelController extends Controller {

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

		return view('Adminhome');
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
       DB::table('users')->where('id', '=', $id)->delete();

        $result=DB::table('users')->get();
		$result2=DB::table('deletedacountsfeedback')->get();
        return view('userAdminPanel')->with('result',$result)
									->with('result2',$result2);


    }

    public function SearchUsers(){

        $name=Input::get("name");
        $result=DB::table('users')->select('id','name','email')->where('name','LIKE',"%$name%")->get();
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

}
