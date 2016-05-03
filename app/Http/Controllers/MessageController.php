<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Input;
use Carbon\Carbon;


class MessageController extends Controller {

	//


    public function viewAll()
    {

        $user=Auth::user()->id;
        $result=DB::table('messages')->where('to',$user)->get();



        return view('messages.viewAllmessages')->with('result',$result);


    }


    //This mehod will return the corespoding values to show messages
    public function view($id)
    {
        $ans=DB::table('messages')->where('id','=',$id)->first();
        $nam=$ans->name;
        $messag=$ans->message;
        $tim=$ans->time;



        //to update the message status to read
        DB::table('messages')
            ->where('id', $id)
            ->update(['status' => 1]);

        return view('messages.viewSelected_message')->with('nam',$nam)
                                                    ->with('messag',$messag)
                                                    ->with('tim',$tim)
                                                    ->with('id',$id);


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


    public function viewAllSentMessages(){




        $use=Auth::user()->id;

        $result=DB::table('sentmessages')->where('from',$use)->get();




       // var_dump($result);
     return view('messages.viewAllSentMessages')->with('result',$result);


    }


 /*   public function sendMails(){


        Mail::raw('Second', function($message)
        {
            $s=DB::table('users')->where('id',1)->first();

            $x=$s->email;
            $message->from('prageethkalhara17@gmail.com', 'Laravel');

            $message->to($x)->cc('pathmila17@gmail.com');
        });
    }*/


    public function messageSendForm(){

        return view('messages.message');

    }
    public function emailSendForm(){

        $result=DB::table('users')->get();

        return view('messages.email')->with('result',$result);
    }

    public function sendemail(){





        $messag=Input::get('message');
        $time=Carbon::now();
        $id = Auth::user()->id;
        $res=DB::table('users')->where('id',$id)->first();
        $fromname=$res->name;

        $reciver_name=Input::get('name');
        $re=DB::table('users')->where('name',$reciver_name)->first();
        $rec_id=$re->id;

       //to insert to message tabel
        DB::table('messages')->insertGetId(
            ['name' => $fromname , 'message' => $messag, 'time' => $time ,'to' => $rec_id]
        );

        //to insert to sent message table

        DB::table('sentmessages')->insertGetId(
            ['name' => $reciver_name , 'message' => $messag, 'time' => $time ,'from' => $id]
        );



        /*Mail::raw($messag, function($message)
        {

            $id = Auth::user()->id;
            $res=DB::table('users')->where('id',$id)->first();
            $fromemail=$res->email;
            $fromname=$res->name;
            //$toemail=Input::get('email');

            $name=Input::get('name');
            $re=DB::table('users')->where('name',$name)->first();
            $toemail=$re->email;


            $subject=$re->id;

            $message->from($fromemail, $fromname);

            $message->to($toemail)->cc('pathmila17@gmail.com')->subject($subject);
        });*/

        return redirect()->back();

    }

    public function sendmessage(){

    }

    public function ReplyforMessages($id){

        $message=Input::get('message');

        $user= Auth::user()->id;
        $sender=DB::table('users')->where('id',$user)->first();

        $res=DB::table('messages')->where('id',$id)->first();
        $name=$res->name;

        $result=DB::table('users')->where('name',$name)->first();
        $reciver=$result->id;

        $time=Carbon::now();



        DB::table('messages')->insertGetId(
            ['name' => $sender->name , 'message' => $message, 'time' => $time ,'to' => $reciver]
        );


        return redirect()->back();

    }


    public function mingleMessageView(){

        $result=DB::table('mingle_table')->get();

        return view('messages.mingleEmails')->with('result',$result);
    }

    public function mingleSenMessage(){

        $name=Input::get('name');
        $message=Input::get('message');

        DB::table('sentmsg_mingle_table')->insertGetId(

            ['name' => $name , 'message' => $message]
        );


        $result=DB::table('mingle_table')->get();
        return view('messages.mingleEmails')->with('minglesentsucess','Message Sent Successfully..')
                                            ->with('result',$result);



    }

    public function eleteMessagesB($id){

        DB::table('messages')->where('id','=',$id)->delete();

        return redirect()->back();


    }

    public function _BeletemessagesB($id){

        return $id;

    }


}
