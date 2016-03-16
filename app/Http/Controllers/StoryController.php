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

class StoryController extends Controller {

    public function viewStory($id){
        $story = Story::find($id);
        $comments = DB::table('comments')->where('storyid',$id)->get();

        return view('client.view_story')
            ->with('comments',$comments)->with('story',$story);
    }

    public function commentFormSubmit(CommentRequest $request,$id){

        $input=$request->all();
        $input['storyid']=$id;
        Comment::create($input);

        $comments = DB::table('comments')->where('storyid',$id)->get();
        return redirect('view_story/'.$id)
            ->with('comments',$comments);
    }

    public function submitStory(){
        return view('client.submit_story');
    }

    public function storyFormSubmit(StoryRequest $request){
        Image::make ($request->file('photo'))->resize(600,400)->save(public_path('internal_css\images\photos').'/'.$request->file('photo')->getClientOriginalName(),60);
        $input = $request->except(['photo']);
        $input['image']=pathinfo(public_path('internal_css\images\photos') . '/' .$request->file('photo')->getClientOriginalName(),PATHINFO_BASENAME);
        /*$request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());*/

        Story::create($input);
        $success='true';
        return view('client.submit_story')->with('success',$success);
    }

    public function setStory1($id){
        DB::table('storys')->where('published',1)->update(['published' => 0]);
        DB::table('storys')->where('id',$id)->update(['published' => 1]);
        return redirect('admin_panel');
    }

    public function setStory2($id){
        DB::table('storys')->where('published',2)->update(['published' => 0]);
        DB::table('storys')->where('id',$id)->update(['published' => 2]);
        return redirect('admin_panel');
    }

    public function deleteStory($id){
        DB::table('storys')->where('id',$id)->delete();
        return redirect('admin_panel');
    }


    public  function  commentAjax(CommentRequest $request){

        $input=$request->all();
        Comment::create($input);

        /*$comments = DB::table('comments')->where('storyid',$input["storyid"])->get();
        return redirect('view_story/'.$input["storyid"])
            ->with('comments',$comments);*/

    }
}
