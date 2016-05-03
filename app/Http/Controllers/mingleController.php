<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Session;
use imap;
use Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;

class mingleController extends Controller {


    public function getView()
    {
       $result= DB::table('mingle_table')->where('id', DB::raw("(select min(`id`) from mingle_table)"))->get();

       return view('Mingle.mingleView')->with('result',$result);
        return $result->id;
    }

    public function getnext($id)
    {
        $result= DB::table('mingle_table')->where('id','=',$id)->get();
        return view('Mingle.mingleView')->with('result',$result);


    }

    public function test()
    {
        return view('messages.test');
    }

    public function get_nex_fav($id)
    {
       $result=DB::table('mingle_table')->where('id',$id)->first();

        $path=$result->image_path;
        $name=$result->name;
        $user=Auth::user()->id;

         DB::table('mingle_faviourite')->insertGetId(
            array('path' => $path, 'name' => $name , 'User_id' => $user)
        );

        return redirect('viewMingle');
       /* return redirect('get'.$id);*/

    }

    public function viewMingle()
    {
        $id=Auth::user()->id;


            /*$result=DB::table('users')->where('id',$id)->get();*/

        $result=DB::table('mingle_faviourite')->where('User_id',$id)->groupBy('path')->distinct()->get();

        return view('Mingle.mingle_fav_view')->with('result',$result);



    }

    public function savemsg($id)
    {
        //$name=Input::get('name');
        //$email=Input::get('email');

        $mesg=Input::get('msg');
        $user=Auth::user()->id;
        $mingle_table_id=$id;
        $time=Carbon::now();


        //to get the name to whome i am going to message
        $to=DB::table('mingle_faviourite')->where('id',$id)->first();
        $toWhome=$to->name;



        DB::table('sentmsg_mingle_table')->insert(
            array('user_id' => $user,'min_table_id' => $mingle_table_id, 'message' =>$mesg,'to' =>$toWhome ,'time' => $time)
        );



        unset($id);


        Session::flash('messagesucessmingl','Successfully Sent..!!');
        return redirect('viewMingle_table');



    }

 /*   public function returnpage($id)
{
    return redirect('getnext'.$id);
}*/

    public function start()
    {
        return view('Mingle.mingle_start');
    }

    public  function t()
{
    return view('t');
}
    public function x()
    {
        $co=imap_open('{ imap.gmail.com}', 'prageethkalhara17@gmail.com', 'prageethkalhara33')
        ;
    }





}
