<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;
use Carbon\Carbon;
use App\Http\Requests\StoryRequest;
use Request;
use DB;


class StoryController extends Controller {

    public function viewStory(){

        $notes = DB::table('notes')->get();

        return view('client.view_story')
            ->with('notes',$notes);

    }

    public function commentFormSubmit(Request $request){

        $name = \Input::get('name');
        $email = \Input::get('email');
        $note = \Input::get('note');
        $now = Carbon::now();


        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'note' => 'required',
        ]);




        //Story::create($name,$email,$note);
        DB::table('notes')->insert(
            ['name' => $name, 'email' => $email,'note'=>$note,'created_at'=>$now ]
        );

        $notes = DB::table('notes')->get();
        return view('client.view_story')
            ->with('notes',$notes);

    }

    public function submitStory(){
        return view('client.submit_story');
    }

    public function storyFormSubmit(StoryRequest $request){
        $input = Request::all();
        /*$request->file('photo')->move(public_path('images'), $request->file('photo')->getClientOriginalName());*/

        Story::create($input);
        return redirect('submit_story');
    }
}
