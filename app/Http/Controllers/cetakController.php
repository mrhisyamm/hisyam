<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penjualan;
use App\Models\Detail_Penjualan;
use App\Models\Barang;


class cetakController extends Controller
{
      
    public function cetak1($id)
    {
        $penjualan = Penjualan::find($id);
        $detail_penjualan = Detail_Penjualan::all();
        $barangs = Barang::all();
        return view('history.cetak1', compact('penjualan','detail_penjualan','barangs')); 
    }
}