<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Lang;
use Config;

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
    // protected $redirectTo = 'home';

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
        session(['Role_id' => $this->guard()->user()->users]);
        if($this->guard()->user()->users->role_id == 3){
            if (($pos = strpos($_SERVER['REQUEST_URI'], "?")) !== FALSE) { 
                    $whatIWant = substr($_SERVER['REQUEST_URI'], $pos+1); 
                }
            $lang=$whatIWant;
           
            return redirect($lang.'/myaccount');

        }else{
             return redirect('admin/login');
        }


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
