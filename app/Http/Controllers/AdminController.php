<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * get admin panel
     * @return $this
     */
    public  function adminPanel(){
        $stories=DB::table('storys')->get();
        return view('admin.admin_panel')->with('stories',$stories);
    }

    /**
     * get questions panel for admins
     * @return $this
     */
    public function contactPanel(){
        $contacts=DB::table('contacts')->get();
        $contactFirst=DB::table('contacts')->first();
        return view('admin.contact_panel')->with('contacts', $contacts)->with('contactFirst', $contactFirst);
    }

    /**
     * show questions to admin
     * @param Request $request
     * @return $this
     */
    public function showAnswer(Request $request){
        $id = $request->Input('id');
        $name = $request->Input('name');
        $question = $request->Input('question');
        $answer = $request->Input('answer');
        $published = $request->Input('published');

        return view('ajax.answer')->with('id', $id)->with('name', $name)->with('question', $question)
            ->with('answer', $answer)->with('published', $published);
    }

    /**
     * save answer of admin to questions
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAnswer(Request $request){
        $id=$request->Input('id');
        $answer=$request->Input('answer');
        DB::table('contacts')->where('id', $id)->update(['answer' => $answer ]);

        $answerSuccess=true;
        return redirect()->back()->with('answerSuccess', $answerSuccess);
    }
}
