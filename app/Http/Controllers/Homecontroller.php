<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
