<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage(){
//        dd(url('$_SERVER'));
//        dd(url('/'));
        return view('Home');
        
    }
}
