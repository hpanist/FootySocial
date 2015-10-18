<?php

namespace FootySocial\Http\Controllers\Auth;

use Validator;
use FootySocial\User;
use Illuminate\Support\Facades\Auth;
use FootySocial\Http\Requests\Request;
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
  protected $registerPath = '/register';
  protected $loginPath = '/';


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

  // public function postRegister(Request $request)
  // {
  //   return Response::make('Registration successful!');
  //   $validator = $this->validator($request->all());
  //
  //   if ($validator->fails())
  //   {
  //     $this->throwValidationException($request, $validator);
  //   }
  //
  //   $this->auth->login($this->registrar->create($request->all()));
  //   return redirect($this->redirectPath());
  // }
}
