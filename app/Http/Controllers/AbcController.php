<?php namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;
use Image;
use Session;

class AbcController extends Controller {

	public function index(){
        return view('client.abc');
    }

    public function sendDateRequest(Request $request){

        $sender=$request->Input('username');
        DB::table('notifications')->insert(
            ['sender_username' => $sender, 'receiver_username' => 'Pathmila','type'=>'Date','message'=>'Sent you a date request']
        );
        return json_encode("Request sent successfully");
    }

    public function resetPw()
    {
        return view('auth.reset');
    }

}
