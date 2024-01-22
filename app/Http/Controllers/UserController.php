<?php

namespace App\Http\Controllers;

//use Bcrypt\Bcrypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function addUser(Request $req){
        $validator =Validator::make($req->all(),[
            'userName' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'address' => 'required|string|max:255',
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@]).*$/|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = DB::table('users')->insert([
            'name' => $req->userName,
            'email' => $req->email,
            'address' => $req->address,
            'password' => bcrypt($req->password),
        ]);

        if($user){
            return redirect()->route('user.login');
        }else{
            return redirect()->back();
        }

    }
}
