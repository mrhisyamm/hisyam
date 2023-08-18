<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
//use App\Models\Kategori_Barang;

class BarangController extends Controller
{
    public function index(){
        //$barang = Barang::all();
        $barang = Barang::orderBy('created_at','DESC')->paginate(21);
        $kategori = Kategori::all();
        return view('user.barang.index',compact('barang','kategori'));
    }
    
    public function kategori_barang($id_kategori){
        $data = \DB::table('barangs')->where('id_kategori', $id_kategori)->get();

        return view('user.barang.kategori', compact('data'));
    }
}