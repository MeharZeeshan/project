<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog(){
//        die ($this->getBlog());
        return view('Blog');
    }
}
