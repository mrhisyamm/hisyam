<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::all();
        return view('user.profile.index',compact('profile'));
    }    
}