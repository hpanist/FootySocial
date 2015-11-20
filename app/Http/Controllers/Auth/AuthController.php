<?php

namespace FootySocial\Http\Controllers\Auth;

use Validator;
use FootySocial\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use FootySocial\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
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

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	protected $redirectPath = '/profile';
	protected $registerPath = 'auth/register';
	protected $loginPath = '/auth/login';


	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:5',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data)
	{
		return User::create([
			'email' => $data['email'],
			'username' => $data['username'],
			'password' => bcrypt($data['password']),
		]);
	}

	public function getRegister()
	{
		return view('auth.register');
	}

	public function postRegister(Request $request)
	{
	  // return Response::make('Registration successful!');
		$this->validate($request, [
			'email' => 'required|email|max:255|unique:users',
			'username' => 'required|alpha_dash|max:18|unique:users',
			'password' => 'required|confirmed|min:5',
		]);

		User::create([
			'email' => $request->input('email'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password'))
		]);

		return redirect()
	            ->route('index')
	            ->withInfo('Your account has been created and you can now sign in');
	}

	public function getLogin()
	{
		return view('auth.login');
	}

	public function postLogin(Request $request)
  {
      $this->validate($request, [
          'username' => 'required',
          'password' => 'required'
      ]);

      $authStatus = Auth::attempt($request->only(['username', 'password']), $request->has('remember'));

      if (!$authStatus) {
          return redirect()->back()->with('info', 'Invalid Email or Password');
      }

      return redirect()->route('profile')->with('info', 'You are now signed in');
  }
}
