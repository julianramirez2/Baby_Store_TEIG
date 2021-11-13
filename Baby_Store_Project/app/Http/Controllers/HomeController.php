<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        return view('mainPage');
    }

    public function user()
    {
        return view('user.index');
    }
}
