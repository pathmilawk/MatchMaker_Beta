<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Http\Request;


class MessageController extends Controller {

	//


    public function viewAll()
    {
        $result=DB::table('messages')->get();

        return view('messages.viewAllmessages')->with('result',$result);
    }


    //This mehod will return the corespoding values to show messages
    public function view($id)
    {
        $ans=DB::table('messages')->where('id','=',$id)->first();
        $nam=$ans->name;
        $subjec=$ans->subject;
        $messag=$ans->message;
        $tim=$ans->time;


        return view('messages.viewSelected_message')->with('nam',$nam)
                                                    ->with('subjec',$subjec)
                                                    ->with('messag',$messag)
                                                    ->with('tim',$tim);


    }

    public function deleteMessage($id)
    {

        $res=DB::table('messages')->where('id','=',$id)->delete();
        $result=DB::table('messages')->get();
        return view('messages.viewAllmessages')->with('result',$result);
    }

}
