<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Contact;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller {

    public function contactUs(){
        $contacts=DB::table('contacts')->whereNotNull('answer')->get();
        $count=DB::table('contacts')->whereNotNull('answer')->count();

        if(Auth::check()) {
            return view('client.contact')->with('contacts', $contacts)->with('count', $count);
        }
        else{
            return view('client.contact1')->with('contacts', $contacts)->with('count', $count);
        }

    }

    public function contactFormSubmit(ContactRequest $request){
        $input=$request->all();
        Contact::create($input);
        $success='true';
        return redirect('contact_us');
    }
}
