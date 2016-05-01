<?php namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Session;

class NotificationController extends Controller {

    public function refreshNotifications(Request $request)
    {

        $receiver_username = $request->Input('receiver_username');
        $notificationCount = DB::table('notifications')->where('receiver_username', '=', Auth::user()->username)->count();
        $results = DB::table('notifications')->where('receiver_username', '=', Auth::user()->username)->get();
        return view('ajax.notification')->with('notificationCount',$notificationCount)->with('results',$results);

    }
}
