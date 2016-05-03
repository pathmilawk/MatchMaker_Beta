<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SearchRequest;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Request;
use Session;


class searchController extends Controller {

    public function searchMain2()
    {
        return view('client.search_main2');
    }

    public  function beforeRegister(SearchRequest $request)
    {

        //$details = $request->all();

        //Session::put('details',$details);

        //Getting values from the form
        $gender = \Input::get('Gender');
        $ageStart = \Input::get('AgeStart');
        $ageEnd = \Input::get('AgeEnd');
        $district = \Input::get('From');
        $religion = \Input::get('Religion');
        $motherTongue = \Input::get('MotherTongue');


        //puting them in session variables
        Session::put('Gender',$gender);
        Session::put('AgeStart',$ageStart);
        Session::put('AgeEnd',$ageEnd);
        Session::put('Religion',$religion);
        Session::put('MotherTongue',$motherTongue);
        Session::put('District',$district);

        return redirect('/auth/register');
    }


    /*
     * function for generate search results
     * parameters will be taken from a form
        $gender -> looking gender
        $ageStart->
        $ageEnd  -> Age range
        $district-> from which district
        $religion->looking religion
        $motherTongue-> language
     * return
        The results page will be return with the result set of the query run
     * */
    public function searchResult()
    {
        //Getting values from the form
        $gender = \Input::get('Gender');
        $ageStart = \Input::get('AgeStart');
        $ageEnd = \Input::get('AgeEnd');
        $district = \Input::get('From');
        $religion = \Input::get('Religion');
        $motherTongue = \Input::get('MotherTongue');

        //query run
        $final=DB::table('profiles')
            ->join('users', 'users.id', '=', 'profiles.user_id')
            ->where('profiles.location','=',$district)
            ->where('profiles.user_id','!=', Auth::user()->id)
            ->where('profiles.religion','=',$religion)
            ->where('profiles.motherTongue','=',$motherTongue)
            ->where('profiles.gender','=',$gender)
            ->whereBetween('profiles.age', array($ageStart, $ageEnd))
            ->where('users.is_admin','=',0)
            ->where('users.user_activate_state','=','activate')
            ->get();

        //check if has any results from the query
        if(count($final)<1)
        {
            $final = "No Result";

            //if query does not have any result return this
            return view('client.search_result')->with('final',$final);
        }

        //if query has values return this
       return view('client.search_result')->with('final',$final);


    }

    public  function ResultSession(){
        $gender = Session::get('Gender');
        $ageStart = Session::get('AgeStart');
        $ageEnd = Session::get('AgeEnd');
        $district = Session::get('District');
        $religion = Session::get('Religion');
        $motherTongue = Session::get('MotherTongue');

        Session::forget('Gender');
        Session::forget('AgeStart');
        Session::forget('AgeEnd');
        Session::forget('From');
        Session::forget('Religion');
        Session::forget('MotherTongue');


        //query run
        $final=DB::table('profiles')
            ->join('users', 'users.id', '=', 'profiles.user_id')
            ->where('profiles.location','=',$district)
            ->where('profiles.user_id','!=', Auth::user()->id)
            ->where('profiles.religion','=',$religion)
            ->where('profiles.motherTongue','=',$motherTongue)
            ->where('profiles.gender','=',$gender)
            ->whereBetween('profiles.age', array($ageStart, $ageEnd))
            ->where('users.is_admin','=',0)
            ->where('users.user_activate_state','=','activate')
            ->get();

        //check if has any results from the query
        if(count($final)<1)
        {
            $final = "No Result";

            //if query does not have any result return this
            return view('client.search_result')->with('final',$final);
        }

        //if query has values return this
        return view('client.search_result')->with('final',$final);
    }

    public function searchSocial()
    {
        //Getting values from the form
        $occupation = \Input::get('occupation');
        $drinking = \Input::get('drinking');
        $smoking = \Input::get('smoking');

        //query run
        $final=DB::table('profiles')
            ->select('first_name','last_name','location','user_id','birthday')
            ->where('user_id','!=',Auth::user()->id)
            ->where('occupation','=',$occupation)
            ->where('drinking','=',$drinking)
            ->where('smoking','=',$smoking)
            ->get();

        //check if has any results from the query
        if(count($final)<1)
        {
            $final = "No Result";

            //if query does not have any result return this
            return view('client.search_result')->with('final',$final);
        }

        //if query has values return this
        return view('client.search_result')->with('final',$final);
    }

    /*
     * function for filter results by appearance
     * parameters
     * return
    */
    public function searchAppearance()
    {
        //Getting values from the form
        $height = \Input::get('height');
        $hair = \Input::get('hair');
        $complexion = \Input::get('complexion');

        //query run
        $final=DB::table('profiles')
            ->select('first_name','last_name','location','user_id')
            ->where('user_id','!=',Auth::user()->id)
            ->where('height','=',$height)
            ->where('hair','=',$hair)
            ->where('complexion','=',$complexion)
            ->get();

        //check if has any results from the query
        if(count($final)<1)
        {
            $final = "No Result";

            //if query does not have any result return this
            return view('client.search_result')->with('final',$final);
        }

        //if query has values return this
        return view('client.search_result')->with('final',$final);

    }//End of the searchAppearance function


    /*
     * function for sending request
     * parameters
        $uid => user id of the person who sending the request
        $id => user id of the person who receives the request
     *return
        A success massage is passed to the view by using ajax
    */
    public function SendRequest($id)
    {
        $x = Carbon::now();

        //USER ID OF THE SENDER IS TAKEN FROM THE LOGGING DETAILS
        $uid =  Auth::user()->id ;

        $check=DB::table('requests')
            ->where('userID','=',$id)
            ->where('friendID',"=",$uid)
            ->get();

        if(count($check)>0){
            //DISPLAY A PROPER ERROR MESSAGE
            return json_encode("You have already sent a request to this person.");
        }
        else{
            //A NEW RAW WILL BE ADDED TO THE TABLE
            DB::table('requests')->insert([
                [
                    'userID' => $id,
                    'friendID' => $uid,
                    'created_at' => $x,
                    'updated_at' => $x
                ]
            ]);

            $friendName=DB::table('users')
                ->select('name')
                ->where('id','=',$id)
                ->get();

            foreach ($friendName as $name) {
                 $username=$name->name;
            }

            DB::table('notifications')->insert([
                [
                    'sender_username' => Auth::user()->name,
                    'receiver_username' => $username,
                    'type' => 'friend',
                    'message' => 'Would you like to be my friend?',
                    'linktogo' => $uid,
                    'created_at' => $x,
                    'updated_at' => $x
                ]
            ]);

            return json_encode("Request Sent!");

        }
        //return json_encode("Hi");
    }//End of the SendRequest Function


    /*
     * Function for load user profiles for underprivileged user(users who aren't friends)
     * parameters
          $id => the user id of the profiles owner
     * return
          profile.blade.php page will be loaded with relevant attributes
    */
    public function ProfileLoad($id)
    {
        $user = DB::table('profiles')
                    ->where('user_id','=',$id)
                    ->get();

       return view('client.profile')->with('user',$user);

        //return $user;

    }//End of the ProfileLoad Function


    /*
    * function for sending request
    * parameters
       $uid => user id of the person who sending the request
       $id => user id of the person who receives the request
    *return
       A success massage is passed to the view by using ajax
   */
    public function showInterest($id)
    {
        $x = Carbon::now();

        //USER ID OF THE SENDER IS TAKEN FROM THE LOGGING DETAILS
        $uid =  Auth::user()->id ;

        $check=DB::table('show_interested')
            ->where('user_id','=',$id)
            ->where('interest_person',"=",$uid)
            ->get();

        if(count($check)>0){
            //DISPLAY A PROPER ERROR MESSAGE
            return json_encode("You have already added this person to interested list.");
        }
        else{
            //A NEW RAW WILL BE ADDED TO THE TABLE
            $query = DB::table('show_interested')->insert([
                [
                    'user_id' => $id,
                    'interest_person' => $uid,
                    'created_at' => $x,
                    'updated_at' => $x
                ]
            ]);

            //CHECK IF THE QUERY EXECUTED SUCCESSFULLY
            if(!$query)
                App::abort(500, 'Oopz..Something went wrong with the database!');
            else
                return json_encode("Added to interested list!");

        }
        //return json_encode("Hi");
    }//End of the SendRequest Function


    /*
    *function for load the editProfile blade
    *
   */
    public function EditProfile($userID)
    {
        $user = DB::table('profiles')
            ->where('user_id','=',$userID)
            ->get();

        return view('ajax.editProfile')->with('user',$user);

    }//End of the EditProfile function




}