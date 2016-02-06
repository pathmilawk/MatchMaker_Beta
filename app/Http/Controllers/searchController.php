<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

use Illuminate\Http\Request;

class searchController extends Controller {

	public function searchMain()
    {
        return view('client.search_main');
    }

    /**
     * @return \Illuminate\View\View0
     */
    public  function Login()
    {
        $values = $_POST[userGender];

        //$values["usersGender"]=Session::get('Ugender');
        //$values["lookingGender"]=Session::get('a');
        //$values["places"]=Session::get('b');
        //$values["ageStart"]=Session::get('c');
        //$values["ageEnd"]=Session::get('Uder');
        //$values["religionr"]=Session::get('Uger');
        //$values["motherTongue"]=Session::get('Uer');

        echo $values;
        return view('auth.login');
    }

}
