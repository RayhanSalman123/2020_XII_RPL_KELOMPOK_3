<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect('/index_admin');
        }elseif ($user->hasRole('student')) {
            return redirect('/index_student');
        }elseif ($user->hasRole('teacher')) {
            return redirect('/index_teacher');
        }elseif ($user->hasRole('head_master')) {
            return redirect('/index_head_master');
        }
        
        // return redirect()->route('dashboard.users');
    }

    public function username()
    {
        return 'usr_email';
    }
}
