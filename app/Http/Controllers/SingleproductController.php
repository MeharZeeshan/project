<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleproductController extends Controller
{
    public function getSingle(){
        return view('SingleProduct');
    }
}
