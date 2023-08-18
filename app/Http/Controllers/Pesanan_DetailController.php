<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Pesanan;

use App\Models\User;
use App\Models\Customer;
use App\Models\Pesanan_Detail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Flash;
use Alert;

class Pesanan_DetailController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Laporan Pembelian (Default Hari ini)';
        $tanggal1 = $request->input('tanggal1');
        $tanggal2 = $request->input('tanggal2');

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

        return view('pesanan_detail.index', compact('title', 'tanggal', 'nilai', 'dari', 'sampai', 'pesanan_details'));
    }

    
    public function create()
    {
        return view('pesanan_details.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $nmfile = Str::uuid().".".$extension;
        $path = $request->file('file')->storeAs(
            'bukti_pembayaran',$nmfile, 'data'
        );
        $pesanan_details->b_pembayaran = $nmfile;

        $pesanan_details = new Pesanan_Detail();
        $pesanan_details->b_pembayaran = $nmfile;
        
        $pesanan_details->save();

        Flash::success('Bukti Pembayaran success di kirim.');
        return redirect('/pesanan_details');
    }

    public function details($id)
    {
        $pesanan_details = Pesanan_Detail::find($id);

        return view('pesanan_detail.details')->with('pesanan_details', $pesanan_details);
    }

    public function edit($id)
    {
        $pesanan_details = Pesanan_Detail::find($id);
        $pesanan = Pesanan::find($id);
        return view('pesanan_details.edit', compact('pesanan_details','pesanan'));
    }

    public function update(Request $request, $id)
    {
        $pesanan_details = Pesanan_Detail::find($id);
        if ($request->file('file') != null) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'bukti_pembayaran',
                $nmfile,
                'data'
            );
            $pesanan_details->b_pembayaran = $nmfile;
        }
        
        $pesanan_details->save();

        return redirect('/history')->with('toast_success', 'Bukti Pembayaran success dikirim');
        
    }   

    public function status(Request $request, $id)
    {
        $pesanan_details = Pesanan_Detail::find($id);
        $pesanan_details->status_pembayaran = $request->status_pembayaran;
        
        $pesanan_details->save();

        Flash::success('Status Pembayaran success diubah');

        return redirect('/pesanan_details');
        
    }
       
    public function tanggal(Request $request){
        $tanggal1 = date('Y-m-d',strtotime($request->tanggal1));
        $tanggal2 = date('Y-m-d',strtotime($request->tanggal2));

        $title = "Laporan Pembelian dari Tanggal ".date('d-M-Y',strtotime($tanggal1))." sampai Tanggal ".date('d-M-Y',strtotime($tanggal2));
        $pesanan_details = Pesanan::whereBetween('tanggal',[$tanggal1,$tanggal2])->orderBy('created_at')->get();

        $tanggal = array();
        foreach ($pesanan_details as $dt) {
            array_push($tanggal, $dt->created_at);
        }
        $tanggal = json_encode($tanggal);

        $dari = $tanggal1;
        $sampai = $tanggal2;

        return view('pesanan_detail.index',compact('title','tanggal','dari','sampai', 'pesanan_details'));
    }


    public function layanan(Request $request, $id)
    {
        $pesanan_details = Pesanan_Detail::find($id);
        $pesanan_details->layanan = $request->layanan;
        
        $pesanan_details->save();

        return redirect('/check_out')->with('toast_success', 'Nama Layanan Success di Pilih');
    }
    public function cetak1($id)
    {
       
        $pesanan = Pesanan::find($id);

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }
    
        $pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan->id)->get();
    
        return view('user.history.cetak1', compact('pesanan', 'pesanan_details')); 
    }


    
    
}
