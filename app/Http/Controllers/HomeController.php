<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function main()
    {
        return view('mainPage');
    }

    public function index(){
        $productos = HTTP::get('http://35.184.103.130/public/api/producta');
        $arrayProd = $productos->json();
        $arrayRet = $arrayProd['data'];
        return view('user.apiview',compact('arrayRet'));
    }

    public function user()
    {
        return view('user.index');
    }
}
