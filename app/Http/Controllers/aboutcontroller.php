<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    function index(){
        return view('about.index'); 
    }
}
