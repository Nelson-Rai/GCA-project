<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
        protected function redirectTo(){
            if(Auth()->user()->role == 1){
                return route('admin.dashboard.index');
            }elseif(Auth()->user()->role == 2){
                return route('vendor.dashboard.index');
            }elseif(Auth()->user()->role == 3){
                return route('home.index');
            }
        }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request){
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'email'=>'required|email',
    //         'password'=>'required'
    //     ]);

    //     if(Auth()->user()->role == 1){
    //         return redirect(route('admin.dashboard.index'));
    //     }elseif(Auth()->user()->role == 2){
    //         return redirect(route('vendor.dashborad.index'));
    //     }elseif(Auth()->user()->role == 3){
    //         return redirect(route('home.index'));
    //     }else{
    //         return redirect(route('login')->with('error','Email or Password is wrong'));
    //     }
    // }
}
