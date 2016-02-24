<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */


	public function pageContent()
	{
		$result= DB::table('gallery_contents')->where('contentType','=','image')->get();
		return $result;
	}

	public function index()
	{
				return view('home');

		$result = $this->pageContent();
		return view('client.index')->with('result',$result);


//		return view('client.index')->with('result',$result);
	}

}
