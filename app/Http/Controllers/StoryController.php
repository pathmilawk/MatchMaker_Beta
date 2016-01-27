<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class StoryController extends Controller {

    public function viewStory(){

        $notes = DB::table('notes')->get();

        return view('client.view_story')
            ->with('notes',$notes);


    }

    public function commentFormSubmit(){

        $name = \Input::get('name');
        $email = \Input::get('email');
        $note = \Input::get('note');
        $now = Carbon::now();


        DB::table('notes')->insert(
            ['name' => $name, 'email' => $email,'note'=>$note,'created_at'=>$now ]
        );

        $notes = DB::table('notes')->get();
        return view('client.view_story')
            ->with('notes',$notes);

    }
}
