<?php

namespace App\Http\Controllers\User;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Users;
use App\Models\Customer;
use App\Models\Pesanan_Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Flash;
use Alert;

class HistoryController extends Controller
{
    public function index(){
        $pesanan = Pesanan::where('customer_id', auth('customer')->id())->where('status', '!=', 0)->get();
        $pesanan_details = Pesanan_Detail::all();
        return view('user.history.index', compact('pesanan','pesanan_details'))->with('toast_success', 'pesanan success diCheck Out');
    }

    public function detail($id){
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan_details = Pesanan_Detail::all();
        $pesanan_details = Pesanan_Detail::find($id);
        $pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan->id)->get();

        return view('user.history.detail', compact('pesanan','pesanan_details'));

    }
    // public function cetak()
    // {
       
    //     $pesanan_details = Pesanan_detail::all();
       
    //     return view('user.history.cetak', compact('pesanan','pesanan_details')); 
    // }

    // public function cetak()
    // {
    //     // $penjualan = Penjualan::all();
    //     // $detail_penjualan = Detail_Penjualan::all();
    //     // $barangs = Barang::all();
    //     $pesanan_details = Pesanan_Detail::find($id);
    //     $pesanan_details = Pesanan_Detail::all();

    //     return view('user.history.cetak', compact('pesanan','pesanan_details')); 
    // }
}