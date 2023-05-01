<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('welcome', ['action' => route('auth.login')]);
    }

    public function dashboardLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
        if (Auth::attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/auth/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'))->with('error', 'Invalid Credentials');
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return back();
    }
}
