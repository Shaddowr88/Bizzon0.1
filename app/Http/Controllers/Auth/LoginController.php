<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/backend';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  public function loginBison(Request $request){
      $email = $request->email;
      $password = $request->password;
      if(Auth::attempt(['email'=>$email,'password'=>$password])){
          $user = Auth::user();

          if($user->hasRole('Administrateur')) {
              return redirect()->route('backend_homepage');
          } else {
              return redirect()->route('dashbord_index');
          }
      }else{
          return redirect()->route('login')->with('messages','impossible de vous identifier');
      }
  }


}



