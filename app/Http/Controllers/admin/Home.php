<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    //

    public function displayHome()
    {
        return view('admin.home');
    }
}