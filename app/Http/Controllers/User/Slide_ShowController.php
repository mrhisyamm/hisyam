<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide_Show;
use App\Models\Barang;

class Slide_ShowController extends Controller
{
    public function index()
    {
        $no = 1;
        $slide = Slide_Show::all();
        $barangs = Barang::where('status','1')->get();
        $slide_count = Slide_Show::count('label');
        
        return view('user.slide_show.index',compact('slide','slide_count','no','barangs'));
        
        
    }    
}