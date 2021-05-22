<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
         return view("hello");
    }
         public function page2(){
    return view("page2");
    }
    public function contac(){
        return view("contac");
        }

    
}

