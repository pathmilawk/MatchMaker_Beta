<?php namespace App\Http\Controllers;

use App\Story;
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
		return view('home')->/*with('result1',$result1)
			->with('result2',$result2)
			->with('result3',$result3)
			->with('result4',$result4)->*/with('stories',$stories)/*->with('result',$result)*/;


//		return view('client.index')->with('result',$result);
	}

}
