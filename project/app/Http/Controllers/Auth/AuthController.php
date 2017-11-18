<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
   private $redirectTo = '/signin';
   protected $username = 'student_number';
   protected $redirectAfterLogout = '/login';
   protected $loginPath = '/login';
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
           'first_name'     => 'required|max:255',
           'last_name'      => 'required|max:255',
           'student_number' => 'required|max:255|unique:users',
           'password'       => 'required|confirmed|min:6',
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
      $data['token'] = 50;
       return User::create([
           'first_name'     => $data['first_name'],
           'last_name'      => $data['last_name'],
           'student_number' => $data['student_number'],
           'token'          => $data['token'],
           'password'       => bcrypt($data['password']),
       ]);
   }

   protected function forgot_password(){
    return view('auth.forgotpassword');
   }
   protected function save_forgot_pass(Request $request)
   {
      $target_user = User::where('student_number', $request->student_number)->first();
      $target_user->password = bcrypt($request->password);
      $target_user->save();
      return view('auth.login');
   }
   
}