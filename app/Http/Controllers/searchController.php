<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;

class searchController extends Controller {

	public function searchMain()
    {
        return view('client.search_main2');
    }

    public  function Login()
    {

        Session::put('lookingGender',$_POST['lookingGender']);
        Session::put('places',$_POST['places']);
        Session::put('ageStart',$_POST['ageStart']);
        Session::put('ageEnd',$_POST['ageEnd']);
        Session::put('religion',$_POST['religion']);
        Session::put('motherTongue',$_POST['motherTongue']);

        return view('auth.login');
    }

    public  function Register()
    {
        return view('auth.register');
    }

    public function searchResult()
    {
        return view('client.search_result');
    }
}