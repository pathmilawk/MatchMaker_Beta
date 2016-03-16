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



	public function index()
	{

		$result1=DB::table('gallery_contents')->where('publishStatus',1)->get();
		/*$result= DB::table('gallery_contents')->where('contentType','=','image')->get();*/
		$result2=DB::table('gallery_contents')->where('publishStatus',2)->get();
		$result3=DB::table('gallery_contents')->where('publishStatus',3)->get();
		$result4=DB::table('gallery_contents')->where('publishStatus',4)->get();
		/*$result1 = $this->pageContent();
		$result2 = $this->pageContent();
		$result3 = $this->pageContent();
		$result4 = $this->pageContent();*/

		return view('client.index')->with('result1',$result1)
			                       ->with('result2',$result2)
						           ->with('result3',$result3)
		                           ->with('result4',$result4);
	}

}
