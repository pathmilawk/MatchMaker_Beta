<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Mail;
use Input;
use Carbon\Carbon;


class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;


	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */

	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);

	}

//	public function register(){
//		return view('auth/register');
//	}


    /**check if user is admin or normal user
     * @return string
     */
   public function  redirectPath(){
       if(Auth::user()->is_admin){
            return '/AdminDashBoard';
       }

       else{
            if(Session::has('Gender'))
           {
               return '/ResultSession';
           }
           else {
               return '/home';
           }
       }
   }


    /**
     * validate user registration details
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:2',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'bdayM' => 'required',
            'bdayD' => 'required',
            'bdayY' => 'required',
            'lastname' => 'required|max:255',
            'username' => 'required',
            'gender' => 'required'

        ]);
    }

    /**
     * insert new user
     * @param array $data
     * @return static
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'bdayM' => $data['bdayM'],
            'bdayD' => $data['bdayD'],
            'bdayY' => $data['bdayY'],
            'gender' => $data['gender'],
        ]);
    }

    /**
     * validate user registration details
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'birthMonth' => 'required',
            'birthDate' => 'required',
            'birthYear' => 'required',
            'lastname' => 'required|max:255',
            'username' => 'required',
            'gender' => 'required'
        ]);

        $data=$request->all();
        User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'birthMonth' => $data['birthMonth'],
            'birthDate' => $data['birthDate'],
            'birthYear' => $data['birthYear'],
            'gender' => $data['gender'],
            'remember_tokern' => $data['_token'],
        ]);

        $credentials = $request->only('email', 'password');
        //email send
        $name=Input::get('username');

        Mail::raw("Hi ".$name.", Now You Have Registered With Match Maker.", function($message)
        {


            $email=Input::get('email');

            $message->from('pahmila17@gmail.com', 'MatchMaker');

            $message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
        });
        //email send end
        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => $this->getFailedLoginMessage(),
            ]);
    }


    public function postLogin(Request $request)
    {

        //-----------------------
        $x = Input::get('email');
        //to loged users log


        if (isset($x)) {

            $res = DB::table('users')->where('email', $x)->first();
            $id = $res->id;
            $name=$res->name;
            $time = Carbon::now();

            DB::table('recentloggedusers')->insertGetId(
                ['user_id' => $id, 'name' => $name,'time' => $time]
            );

        }
        //--------------------------

        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => $this->getFailedLoginMessage(),
            ]);
    }

}