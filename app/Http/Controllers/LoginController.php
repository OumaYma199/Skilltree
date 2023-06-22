<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //La page/vue login.blade.php
     public function login() {
        return view('auth.login');
    }
      //La page/vue register.blade.php
      public function register() {
        return view('auth.register');
    }

    public function logout(){
         Auth::logout();
         return redirect()->route('login');
    }
}
