<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $req){

        $validator = Validator::make($req->all(),[
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials =  $req->only('email', 'password');


        if(Auth::attempt($credentials)){
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors(['email'=>'Invalid Credentials']);
    }

    public function logoutUser(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');
    }
}
