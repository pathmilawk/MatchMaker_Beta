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


    public function temp(){


        set_time_limit(4000);

        // Connect to gmail
        $imapPath = '{imap.gmail.com:993/imap/ssl}INBOX';
        $username = 'prageethkalhara17@gmail.com';
        $password = 'prageethkalhara33';

        $imap = imap_open($imapPath, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());

        $numMessages = imap_num_msg($imap);


        for ($i = $numMessages; $i > ($numMessages - 1); $i--) {
            $header = imap_header($imap, $i);

            $fromInfo = $header->from[0];
            $replyInfo = $header->reply_to[0];

            $details = array(
                "fromAddr" => (isset($fromInfo->mailbox) && isset($fromInfo->host))
                    ? $fromInfo->mailbox . "@" . $fromInfo->host : "",
                "fromName" => (isset($fromInfo->personal))
                    ? $fromInfo->personal : "",
                "replyAddr" => (isset($replyInfo->mailbox) && isset($replyInfo->host))
                    ? $replyInfo->mailbox . "@" . $replyInfo->host : "",
                "subject" => (isset($header->subject))
                    ? $header->subject : "",
                "udate" => (isset($header->udate))
                    ? $header->udate : ""
            );

            $uid = imap_uid($imap, $i);
        }
        


        $body = get_part($imap, $uid, "TEXT/HTML");
        // if HTML body is empty, try getting text body
      /*  if ($body == "") {
            $body = get_part($imap, $uid, "TEXT/PLAIN");
        }
        return $body;*/

       // return view('messages.che')->with('body',$body);
    }

}
