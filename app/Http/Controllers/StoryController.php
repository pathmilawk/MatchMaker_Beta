<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Story;
use Carbon\Carbon;
use App\Http\Requests\StoryRequest;
use App\Http\Requests\CommentRequest;
use DB;
use Illuminate\Http\Request;
use Image;
use Session;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller {

    /**
     * get a view to view user stories
     * @param $id
     * @return $this
     */
    public function viewStory($id){
        $story = Story::find($id);
        $comments = DB::table('comments')->where('storyid',$id)->get();

        if(Auth::check()) {
            return view('client.view_story1')
                ->with('comments', $comments)->with('story', $story);
        }
        else{
            return view('client.view_story')
                ->with('comments', $comments)->with('story', $story);
        }
    }

    /**
     * save comment to database
     * @param CommentRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function commentFormSubmit(CommentRequest $request,$id){

        $input=$request->all();
        $input['storyid']=$id;
        Comment::create($input);

        $comments = DB::table('comments')->where('storyid',$id)->get();
        return redirect('view_story/'.$id)
            ->with('comments',$comments);
    }

    /**
     * get submit story view
     * @return \Illuminate\View\View
     */
    public function submitStory(){
        return view('client.submit_story');
    }

    /**
     * save success story to database
     * @param StoryRequest $request
     * @return $this
     */
    public function storyFormSubmit(StoryRequest $request){
        $success='false';
        $data=$request->all();
        try {
            Image::make($request->file('photo'))->resize(600, 400)->save(public_path('internal_css\images\photos') . '/' . $request->file('photo')->getClientOriginalName(), 60);
            $input = $request->except(['photo']);
            $input['image'] = pathinfo(public_path('internal_css\images\photos') . '/' . $request->file('photo')->getClientOriginalName(), PATHINFO_BASENAME);
            /*$request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());*/
            $input['firstname']=Auth::user()->name;
            $input['lastname']=Auth::user()->lastname;
            $input['email']=Auth::user()->email;
            Story::create($input);
            $success='true';
        }
        catch(\Exception $e){

        }

        return view('client.submit_story')->with('success',$success);
    }

    /**
     * set the story fo story 1 in home
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function setStory1($id){
        DB::table('storys')->where('published',1)->update(['published' => 0]);
        DB::table('storys')->where('id',$id)->update(['published' => 1]);
        return redirect('successStoryPanel');
    }

    /**
     * set the story for story 2 in home
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function setStory2($id){
        DB::table('storys')->where('published',2)->update(['published' => 0]);
        DB::table('storys')->where('id',$id)->update(['published' => 2]);
        return redirect('successStoryPanel');
    }

    /**
     * remove a story from the database.
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteStory($id){
        DB::table('storys')->where('id',$id)->delete();
        return redirect('successStoryPanel');
    }


    /**
     * insert comments to the database
     * with related success story
     * @param CommentRequest $request
     */
    public  function  commentAjax(CommentRequest $request){

        $input=$request->all();
        Comment::create($input);

        //return view('errors.form_error');
        /*$comments = DB::table('comments')->where('storyid',$input["storyid"])->get();
        return redirect('view_story/'.$input["storyid"])
            ->with('comments',$comments);*/
    }

    /**
     * reload comments div of  view story
     * @param Request $request
     * @return $this
     */
    public function showCommentAjax(Request $request)
    {
        //$storyid = $request->Input('storyid');
        $comments = DB::table('comments')->where('storyid', 3)->get();
        $commentCount = DB::table('comments')->where('storyid', 3)->count();
        return view('ajax.comments')->with('comments', $comments)->with('commentCount', $commentCount);
        //return json_encode("hbhbh");

    }

    /**
     * reload comments div in view story
     * @param $id
     * @return $this
     */
    public function showCommentAjax1($id)
    {
        $storyid = $id;
        $comments = DB::table('comments')->where('storyid', $storyid)->get();
        $commentCount = DB::table('comments')->where('storyid', $storyid)->count();
        return view('ajax.comments')->with('comments', $comments)->with('commentCount', $commentCount);

    }

    public function loadForgot(){
        //return view('auth.password');
        return json_encode('fsfsfsf');
    }
}
