<?php namespace App\Http\Controllers;

use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */


	/*public function pageContent()
	{
		$result=DB::table('gallery_contents')->where('id', DB::raw("(select max(`id`) from gallery_contents)"))->get();
		$result= DB::table('gallery_contents')->where('contentType','=','image')->get();
		return $result;
	}*/

	public function index()
	{
		/*$result = $this->pageContent();*/
		return view('client.index');/*->with('result',$result);*/
	}

}
