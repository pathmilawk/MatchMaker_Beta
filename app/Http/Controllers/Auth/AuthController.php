<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;
use session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

   public function  redirectPath(){

		   if (Auth::user()->is_admin) {

			   return '/AdminDashBoard';
		   } else {
			   return '/home';
		   }

   }

	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'username' => 'required|unique:users',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6'
		]);
	}

	public function postRegister(Request $request)
	{



		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$this->auth->login($this->registrar->create($request->all()));

		$name=Input::get('username');

		Mail::raw("Hi ".$name.", Now You Have Registered With Match Maker.", function($message)
		{


			$email=Input::get('email');

			$message->from('prageethkalhara17@gmail.com', 'Laravel');

			$message->to($email)->cc('pathmila17@gmail.com')->subject('Welcome!');
		});

		return redirect($this->redirectPath());
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