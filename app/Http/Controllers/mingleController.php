<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Session;
use imap;

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

         DB::table('mingle_faviourite')->insertGetId(
            array('path' => $path, 'name' => $name)
        );

        return redirect('viewMingle');
       /* return redirect('get'.$id);*/

    }

    public function viewMingle()
    {
           $id=1; //Auth::user('id');
            /*$result=DB::table('users')->where('id',$id)->get();*/

            $result=DB::table('mingle_faviourite')->where('User_id',$id)->get();

                return view('Mingle.mingle_fav_view')->with('result',$result);



    }

    public function savemsg()
    {
        $name=Input::get('name');
        $email=Input::get('email');
        $mesg=Input::get('msg');




        DB::table('sentmsg_mingle_table')->insert(
            array('name' => $name, 'email' => $email,'message' =>$mesg)
        );


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
