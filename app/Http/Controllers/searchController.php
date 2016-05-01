<?php namespace App\Http\Controllers;

use App\Http\Requests;
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

    /*public function connectSearch()
    {
        if(Session::has('gender'))
        {
            $uname = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $bdayM = $_POST['bdayM'];
            $bdayD = $_POST['bdayD'];
            $bdayY = $_POST['bdayY'];
            $checkbox = $_POST['checkbox'];

            DB::table('users')->insert(
                ['name' => $name, 'email' => $email,'password'=>$password,'bday'=>$bdayM.'.'.$bdayD.'.'.$bdayY, 'username'=>$uname ]
            );

            //retriving data from session variables
            $gender=Session::get('gender');
            $ageStart=Session::get('ageStart');
            $ageEnd=Session::get('ageEnd');
            $religion=Session::get('religion');
            $motherTongue=Session::get('motherTongue');
            $district=Session::get('district');

            //query run
            $results=DB::table('opt_filters')->join('user_profiles', 'opt_filters.user_id', '=', 'user_profiles.user_id')
                ->select('user_profiles.first_name','user_profiles.last_name','user_profiles.location','user_profiles.user_id')
                ->where('opt_filters.district','=',$district)
                ->whereBetween('opt_filters.age', [$ageStart, $ageEnd])
                ->where('opt_filters.religion','=',$religion)
                ->where('opt_filters.motherTongue','=',$motherTongue)
                ->where('opt_filters.gender','=',$gender)->get();


           /* echo '<script language="javascript">';
            echo 'alert("Successfully registered!")';
            echo '</script>';
            exit;

            Session::flush(); //session end

            //check if has any results from the query
            if(count($results)<1)
            {
                $results = "No Result";
                return view('client.search_result')->with('results',$results);//if query does not have any result return this
            }

            return view('client.search_result')->with('results',$results);//if query has any result return this


        }
        else
        {
            return view('client.index');
        }
    }*/

   /* public  function Register(SearchRequest $request)
    {
        //Getting values from the form
        $gender = \Input::get('Gender');
        $ageStart = \Input::get('AgeStart');
        $ageEnd = \Input::get('AgeEnd');
        $district = \Input::get('From');
        $religion = \Input::get('Religion');
        $motherTongue = \Input::get('MotherTongue');


        //puting them in session variables
        Session::put('gender',$gender);
        Session::put('ageStart',$ageStart);
        Session::put('ageEnd',$ageEnd);
        Session::put('religion',$religion);
        Session::put('motherTongue',$motherTongue);
        Session::put('district',$district);

        return view('auth.register');
    }*/


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
        $results=DB::table('profiles')
            ->select('first_name','last_name','location','user_id','birthday')
            ->where('location','=',$district)
            ->where('user_id','!=', Auth::user()->id)
            ->where('religion','=',$religion)
            ->where('motherTongue','=',$motherTongue)
            ->where('gender','=',$gender)
            ->get();

        //checking age

        $currentDate = Carbon::now();

        //GET THE CURRENT YEAR
        $currentYear = (int)str_limit($currentDate,4);
        $count =0;

        foreach($results as $raw)
        {
            $bdy=$raw->birthday;

            //GET THE BIRTH YEAR
            $bYear = (int)str_limit($bdy,4);

            // CALCULATE THE AGE
            $age = $currentYear - $bYear;

            //CHECK THE AGE
            if(($age >= $ageStart)&&($age < $ageEnd))
            {
                $final[$count]=$raw;
            }
            $count  ++;
        }

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
            $query = DB::table('requests')->insert([
                [
                    'userID' => $id,
                    'friendID' => $uid,
                    'created_at' => $x,
                    'updated_at' => $x
                ]
            ]);

            //CHECK IF THE QUERY EXECUTED SUCCESSFULLY
            if(!$query)
                App::abort(500, 'Oopz..Something went wrong with the database!');
            else
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