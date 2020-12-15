<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Start1Controller extends Controller
{
    public function Start1(){
        return view('start.Start1');
    }
    public function Start2(){
        return view('start.Start2');
    }
    public function Start3(){
        return view('start.Start3');
    }
}