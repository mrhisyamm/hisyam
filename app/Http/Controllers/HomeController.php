<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pesanan_Detail;
use App\Models\User;
use App\Models\Suplier;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all()->count();
        $pesanan_detail = Pesanan_Detail::all()->count();
        $user = User::all()->count();
        $suplier = Suplier::all()->count();
        return view('home')->with('barang', $barang)->with('pesanan_detail', $pesanan_detail)->with('user', $user)->with('suplier', $suplier);
    }
}
