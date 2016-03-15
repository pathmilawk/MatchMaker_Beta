<?php namespace App\Http\Controllers;

use DB;
use App\Story;

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

	public function storyContent(){
		$story1=DB::table('storys')->where('published',1)->get();
		$story2=DB::table('storys')->where('published',2)->get();
		$stories = array();
		$stories['story1']=$story1;
		$stories['story2']=$story2;

		return $stories;
	}

	public function index()
	{
		/*$result = $this->pageContent();*/
		/*$stories=$this->storyContent();*/

		/*$result= DB::table('gallery_contents')->where('contentType','=','image')->get();*/
		/*$result1=DB::table('gallery_contents')->where('publishStatus',1)->get();
		$result2=DB::table('gallery_contents')->where('publishStatus',2)->get();
		$result3=DB::table('gallery_contents')->where('publishStatus',3)->get();
		$result4=DB::table('gallery_contents')->where('publishStatus',4)->get();*/
		/*$result1 = $this->pageContent();
		$result2 = $this->pageContent();
		$result3 = $this->pageContent();
		$result4 = $this->pageContent();*/


		$stories=Story::getStories();
		return view('client.index')->/*with('result1',$result1)
			->with('result2',$result2)
			->with('result3',$result3)
			->with('result4',$result4)->*/with('stories',$stories)/*->with('result',$result)*/;
	}

}
