<?php namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;
use Image;
use Session;

class NotificationController extends Controller {

    public function refreshNotifications(Request $request){

        $receiver_username = Auth:: user()->name;
        $notificationCount = DB::table('notifications')->where('receiver_username', $receiver_username)->count();
        $results=DB::table('notifications')->where('receiver_username', $receiver_username)->get();
        return view('ajax.notification')->with('notificationCount',$notificationCount)->with('results',$results);
    }

}
