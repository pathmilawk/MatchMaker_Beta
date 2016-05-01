<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use DB;
use Input;
use Carbon\Carbon;

class RedirectIfAuthenticated {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;


		//to update deactivate state to activate
		/*$x = Input::get('email');

		$stat = DB::table('users')
			->where('email', $x)
			->update(['user_activate_state' => 'activate']);


		//to loged users log


		if (isset($x)) {

			$res = DB::table('users')->where('email', $x)->first();
			$id = $res->id;
			$name=$res->name;
			$time = Carbon::now();

			DB::table('recentloggedusers')->insertGetId(
				['user_id' => $id, 'name' => $name,'time' => $time]
			);

		}*/
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		//$result=DB::table('users')->get();
		if ($this->auth->check())
		{
			return new RedirectResponse(url('/home'));
		}

		return $next($request);
	}

}
