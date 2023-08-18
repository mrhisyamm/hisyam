<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Customer;
use App\Models\Pesanan_Detail;

class PesananController extends Controller
{
    public function profile($id)
    {
        $pesanan_details = Pesanan_Detail::find($id);
        $pesanan = Pesanan::find($id);
        $customer = Customer::find($id);

        return view('pesanan_detail.profile', compact('pesanan','customer','pesanan_details'));

    }
    
}
