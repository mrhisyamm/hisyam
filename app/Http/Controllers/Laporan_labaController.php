<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_penjualan;
use App\Models\Detail_pembelian;
use App\Models\Pembelian;
use App\Models\Penjualan;
use App\Models\Pesanan;
use App\Models\Barang;
use App\Models\Beban;
use Carbon\Carbon;

class Laporan_labaController extends Controller
{
    public function laba()
    {
        return view('laporan_laba.laba');
    }

    public function laba_cari(Request $request)
    {
        $dari = date('Y-m-d', strtotime($request->dari));
        $sampai = date('Y-m-d', strtotime($request->sampai));
        $tanggal = Carbon::now()->format('Y-m-d');

        $daftar_pembelian = \App\Models\Detail_pembelian::whereRaw('qty>qty_terjual')
            ->get();

        $harga = 0;
        $ter =0;
        foreach ($daftar_pembelian as $pembelian) {
            if ($pembelian->qty > 0) {
                $pembelian->qty;
                $sisa = $pembelian->qty - $pembelian->qty_terjual;
                if ($sisa >= $pembelian->qty) {
                    $harga = $pembelian->harga;
                } else {
                    $harga = $pembelian->harga;
                }
                $ter = $total =+$harga;
            }
        }
         $tot = $ter;
        $Penjualan =  detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();
        $jum_pen =  detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->sum('qty');
        $total_penjualan =  detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->sum('subtotal');

        $Pembelian =  detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();
        $total_pembelian =  detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->sum('subtotal');

        $beban = Beban::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->get();
        $total_beban = Beban::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->sum('harga');


        ///////////////////////////////////////////////////////////////////////////////////////////////


        $title = 'Laporan Pembelian (Default Hari ini)';
        $tanggal1 = $request->input('dari');
        $tanggal2 = $request->input('sampai');

        if (empty($tanggal1) || empty($tanggal2)) {
            $pesanan_details = Pesanan::join('pesanan_details', 'pesanan_details.pesanan_id', '=', 'pesanan.id')
                ->get();
        } else {
            $pesanan_details = Pesanan::join('pesanan_details', 'pesanan_details.pesanan_id', '=', 'pesanan.id')
                ->whereBetween('pesanan.created_at', [$tanggal1, $tanggal2])
                ->get();
        }

        $tanggal = [];
        $nilai = [];
        foreach ($pesanan_details as $dt) {
            array_push($tanggal, date('Y-m-d', strtotime($dt->created_at)));
            $hitung = Pesanan::where('tanggal', $dt->created_at)->count();
            array_push($nilai, $hitung);
        }
        $tanggal = json_encode($tanggal);
        $nilai = json_encode($nilai);

        $dari = $tanggal1 ?? date('Y-m-d');
        $sampai = $tanggal2 ?? date('Y-m-d');

        foreach ($pesanan_details as $pesanan_detail) {
            $pesanan_detail->barangs = Barang::find($pesanan_detail->barang_id);
        }

        $totalPembelian2 = 0;
        foreach($pesanan_details as $item){
            $totalHarga = $item->jumlah_harga + $item->layanan; 
            $totalPembelian2 += $totalHarga; 
        }

       
        // return $totalPembelian2;

        /////////////////////////////////////////////////////////////////////////


        return view('laporan_laba.laba', compact('total_penjualan',
                                                 'total_pembelian', 
                                                 'dari', 
                                                 'sampai', 
                                                 'tot', 
                                                 'jum_pen', 
                                                 'beban', 
                                                 'total_beban',

                                                 'totalPembelian2'
                                                ));
    }


    public function print(Request $request)
    {

        $dari = date('Y-m-d', strtotime($request->dari));
        $sampai = date('Y-m-d', strtotime($request->sampai));
        $tanggal = Carbon::now()->format('Y-m-d');

        $daftar_pembelian = \App\Models\Detail_pembelian::whereRaw('qty>qty_terjual')
            ->where('tanggal_beli', '>', $tanggal)
            ->orderBy('created_at', 'ASC')
            ->get();

        $harga = 0;
        $ter =0;

        foreach ($daftar_pembelian as $pembelian) {
            if ($pembelian->qty > 0) {
                $pembelian->qty;
                $sisa = $pembelian->qty - $pembelian->qty_terjual;
                if ($sisa >= $pembelian->qty) {
                    $harga = $pembelian->harga;
                } else {
                    $harga = $pembelian->harga;
                }
                $ter = $total =+$harga;
            }
        }
        $tot = $ter;
        $Penjualan =  Detail_penjualan::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();
        $jum_pen =  Detail_penjualan::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->sum('qty');
        $total_penjualan =  Detail_penjualan::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->sum('subtotal');

        $Pembelian =  Detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->get();
        $total_pembelian =  Detail_pembelian::whereDate('created_at', '>=', $dari)->whereDate('created_at', '<=', $sampai)->orderBy('created_at', 'desc')->sum('subtotal');

        $beban = Beban::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->get();
        $total_beban = Beban::whereDate('tanggal', '>=', $dari)->whereDate('tanggal', '<=', $sampai)->orderBy('tanggal', 'desc')->sum('harga');

        return view('laporan_laba.print', compact('total_penjualan', 'total_pembelian', 'dari', 'sampai', 'tot', 'jum_pen', 'beban', 'total_beban'));
    }
}
