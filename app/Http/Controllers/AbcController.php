<?php namespace App\Http\Controllers;

use App\Http\Requests;
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
use App\Notification;
use App\Http\Requests\NotificationRequest;
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

}
