<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //La page/vue home.blade.php
    public function home() {
        return view('home.home');
    }

     //La page/vue about.blade.php
     public function about() {
        return view('home.about');
    }
    //La page/vue test.blade.php
    public function test() {
        return view('home.test');
    }

}
