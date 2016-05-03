<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Contact;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller {

    /**
     * get contact us page for user
     * @return $this
     */
    public function contactUs(){
        $contacts=DB::table('contacts')->whereNotNull('answer')->where('published', true)->get();
        $count=DB::table('contacts')->whereNotNull('answer')->where('published', true)->count();

        if(Auth::check()) {
            return view('client.contact')->with('contacts', $contacts)->with('count', $count);
        }
        else{
            return view('client.contact1')->with('contacts', $contacts)->with('count', $count);
        }

    }

    /**
     * saves user's question
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactFormSubmit(ContactRequest $request){
        $input=$request->all();
        if(Auth::check()){
            $input['name']=Auth::user()->name." ".Auth::user()->lastname;
            $input['email']=Auth::user()->email;
        }
        Contact::create($input);
        $success='true';
        return redirect()->back()->with('contactsuccess', $success);
    }
}
