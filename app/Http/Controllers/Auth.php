<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    //
    public function displayLogin()
    {
        return view('auth.login');
    }
    public function displayRegister()
    {
        return view('auth.register');
    }


}