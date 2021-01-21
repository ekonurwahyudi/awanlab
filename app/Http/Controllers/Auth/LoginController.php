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

    protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('superadmin')){
            return redirect()->route('awanlab');
        }elseif($user->hasRole('cs')){
            return redirect('/dashboard-cs');
        }elseif($user->hasRole('kortek')){
            return redirect()->route('dashboard-kortek');
        }elseif($user->hasRole('teknisi')){
            return redirect()->route('dashboard-teknisi');
        }elseif($user->hasRole('admin')){
            return redirect()->route('dashboard-admin');
        }else{
            return redirect()->route('home');
        }
    }


}
