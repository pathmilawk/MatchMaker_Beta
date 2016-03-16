<?php namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\SearchRequest;
use App\Http\Controllers\Controller;
use App\optFilter;
use DB;
use Session;

class searchController extends Controller {

    public function connectSearch()
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
            exit;*/

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
    }

    public  function Register(SearchRequest $request)
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
    }

    public function searchResult(SearchRequest $request)
    {
        //Getting values from the form
        $gender = \Input::get('Gender');
        $ageStart = \Input::get('AgeStart');
        $ageEnd = \Input::get('AgeEnd');
        $district = \Input::get('From');
        $religion = \Input::get('Religion');
        $motherTongue = \Input::get('MotherTongue');

        //query run
        $results=DB::table('opt_filters')->join('user_profiles', 'opt_filters.user_id', '=', 'user_profiles.user_id')
                                        ->select('user_profiles.first_name','user_profiles.last_name','user_profiles.location',
                                                 'user_profiles.user_id')
                                        ->where('opt_filters.district','=',$district)
                                        ->whereBetween('opt_filters.age', [$ageStart, $ageEnd])
                                        ->where('opt_filters.religion','=',$religion)
                                        ->where('opt_filters.motherTongue','=',$motherTongue)
                                        ->where('opt_filters.gender','=',$gender)->get();

        //check if has any results from the query
        if(count($results)<1)
        {
            $results = "No Result";
            return view('client.search_result')->with('results',$results); //if query does not have any result return this
        }

      return view('client.search_result')->with('results',$results);//if query has values return this


    }

    public function searchMain2()
    {
        return view('client.search_main2');
    }

    public function searchAppearence()
    {
        //Getting values from the form
        $height = \Input::get('height');
        $hair = \Input::get('hair');
        $complexion = \Input::get('complexion');

        //query run
       $results=DB::table('opt_filters')->join('user_profiles', 'opt_filters.user_id', '=', 'user_profiles.user_id')
            ->select('user_profiles.first_name','user_profiles.last_name','user_profiles.location','user_profiles.user_id')
            ->where('opt_filters.height','=',$height)
            ->where('opt_filters.hair','=',$hair)
            ->where('opt_filters.complexion','=',$complexion)
            ->get();

        //check if has any results from the query
        if(count($results)<1)
        {
            $results = "No Result";
            return view('client.search_result')->with('results',$results); //if query does not have any result return this
        }

        return view('client.search_result')->with('results',$results);//if query has values return this
    }


    public function searchSocial()
    {
        //Getting values from the form
        $occupation = \Input::get('occupation');
        $drinking = \Input::get('drinking');
        $smoking = \Input::get('smoking');

        //query run
        $results=DB::table('opt_filters')->join('user_profiles', 'opt_filters.user_id', '=', 'user_profiles.user_id')
            ->select('user_profiles.first_name','user_profiles.last_name','user_profiles.location','user_profiles.user_id')
            ->where('opt_filters.occupation','=',$occupation)
            ->where('opt_filters.drinking','=',$drinking)
            ->where('opt_filters.smoking','=',$smoking)
            ->get();

        //check if has any results from the query
        if(count($results)<1)
        {
            $results = "No Result";
            return view('client.search_result')->with('results',$results); //if query does not have any result return this
        }

        return view('client.search_result')->with('results',$results);//if query has values return this
    }
}