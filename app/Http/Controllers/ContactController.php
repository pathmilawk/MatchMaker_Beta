<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller {

    public function contactUs(){

        return view('client.contact');

    }

    public function contactFormSubmit(Request $request){
        $username = \Input::get('username');
        $password = \Input::get('password');
        $email = \Input::get('email');
        $question = \Input::get('question');
        $now = Carbon::now();
    }
}
