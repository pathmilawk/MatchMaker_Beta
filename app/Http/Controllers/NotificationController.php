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

class NotificationController extends Controller {

    public function refreshNotifications(Request $request){

        $receiver_username = $request->Input('receiver_username');
        $notificationCount = DB::table('notifications')->where('receiver_username', 'Savidya')->count();
        $results=DB::table('notifications')->where('receiver_username', 'Savidya')->get();
        return view('ajax.notification')->with('notificationCount',$notificationCount)->with('results',$results);
    }

}
