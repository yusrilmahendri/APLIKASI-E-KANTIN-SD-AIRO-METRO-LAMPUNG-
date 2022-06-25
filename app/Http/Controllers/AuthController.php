<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('welcome');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
           if(auth()->user()->role == 'admin'){
            return redirect('/dashboard');
           }
           if(auth()->user()->role == 'pengguna'){
               return redirect('/home');
           }
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
