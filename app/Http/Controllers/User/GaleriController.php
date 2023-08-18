<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::all();
        return view('user.galeri.index',compact('galeri'));
    }    
}