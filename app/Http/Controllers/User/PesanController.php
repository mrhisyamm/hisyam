<?php

namespace App\Http\Controllers\User;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Customer;
use App\Models\Pesanan_Detail;
use App\Models\City;
use App\Models\Couriers;
use App\Models\Province;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class PesanController extends Controller
{
public function index($id){
    $barang = Barang::where('id', $id)->first();

    return view('user.pesan.index',compact('barang'));
}

public function pesan(Request $request, $id)
{
    $barang = Barang::where('id', $id)->first();
    $tanggal = Carbon::now();

    //validasi apakah melebihi stok
    if($request->jumlah_pesan > $barang->stok)
    {
        return redirect('pesan/'.$id);
    }
    //cek validasi
    $cek_pesanan = Pesanan::where('customer_id', auth('customer')->id())->where('status', 0)->first();
    //simpan ke db pesanan
    if(empty($cek_pesanan))
{
    $pesanan = new Pesanan;
    $pesanan->customer_id = auth('customer')->id();
    $pesanan->tanggal = $tanggal;
    $pesanan->status = 0;
    $pesanan->kode = mt_rand(100, 999);
    $pesanan->jumlah_harga = 0;
    $pesanan->save();
}
    $pesanan_baru = Pesanan::where('customer_id', auth('customer')->id())->where('status', 0)->first();
    //simpan Ke db Pesanan Detail

    //cek pesanan detail
    $cek_pesanan_detail = Pesanan_Detail::where('status_pembayaran', 0)->first();
    $cek_pesanan_detail = Pesanan_Detail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    if(empty($cek_pesanan_detail))
    {
    $pesanan_details = new Pesanan_Detail;
    $pesanan_details->barang_id = $barang->id;
    $pesanan_details->pesanan_id = $pesanan_baru->id;
    $pesanan_details->size = $request->size;
    $pesanan_details->jumlah = $request->jumlah_pesan;
    $pesanan_details->jumlah_harga = $barang->harga*$request->jumlah_pesan;    
    $pesanan_details->status_pembayaran = $request->status_pembayaran;
    $pesanan_details->save();
    }else{
    $cek_pesanan_detail = Pesanan_Detail::where('status_pembayaran', 0)->first();
    $pesanan_details = Pesanan_Detail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
    $pesanan_details->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;
    //harga sekarang
    $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
    $pesanan_details->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
    $pesanan_details->update();
}

//Jumlah total
$pesanan = Pesanan::where('customer_id', auth('customer')->id())->where('status',0)->first();
$pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
$pesanan->update();

Alert::success('Pesanan Success Masuk Keranjang', 'Success');
    return redirect('barang')->with('toast_success', 'Pesanan success di Simpan Ke keranjang');

}

public function check_out(Request $request)
{
    if($request->origin && $request->destination && $request->weight && $request->courier){
        $origin = $request->origin;
        $destination = $request->destination;
        $weight = $request->weight;
        $courier = $request->courier;

        $client = new Client();
     try{
         $response = $client->request('POST','https://api.rajaongkir.com/starter/cost',
        [
         'body' => 'origin='.$request->origin.
                    '&destination='.$request->destination.
                    '&weight='.$request->weight.
                    '&courier=jne',
         'headers' => [
             'key' => '899db52596b55d459f6382a323a1695a',
             'content-type' => 'application/x-www-form-urlencoded',
         ]
        ]
     );
    
     } catch (RequestException $e){
         var_dump($e->getResponse()->getBody()->getContents());
     }

     $json = $response->getBody()->getContents();

     $array_result = json_decode($json, true);

     $origin = $array_result["rajaongkir"]["origin_details"]["city_name"];
     $destination = $array_result["rajaongkir"]["destination_details"]["city_name"];

    }else{

        $origin = '';
        $destination = '';
        $weight ='';
        $courier = '';
        $array_result = null;

    }

    $pesanan = Pesanan::where('customer_id', auth('customer')->id())->where('status',0)->first();
    $pesanan_details = [];
    if(!empty($pesanan))
    {
        $pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan->id)->get();
    }

    $couriers = Couriers::pluck('title','code');
    $provinces = Province::pluck('name');
    $cities = City::get();

   
    return view('user.pesan.check_out', compact('pesanan','pesanan_details','couriers','origin','destination','provinces','cities','array_result'))->with('toast_success', 'Pesanan success di Check Out');
}

public function delete($id){
    $pesanan_details = Pesanan_Detail::where('id',$id)->first();

    $pesanan = Pesanan::where('id', $pesanan_details->pesanan_id)->first();
    $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_details->jumlah_harga;
    $pesanan->update();

    $pesanan_details->delete();

    Alert::error('Pesanan Success Dihapus', 'Hapus');
    return redirect('check_out')->with('toast_error', 'Pesanan success di hapus');
}

public function konfirmasi()
{

    $customer = Customer::where('id', auth('customer')->id())->first();

        if(empty($customer->alamat))
        {
            
            return redirect('profilep')->with('toast_error', 'Identitas Harap dilengkapi Terlebih Dahulu');
        }

        if(empty($customer->nohp))
        {
            
            return redirect('profilep')->with('toast_error', 'Identitas Harap dilengkapi Terlebih Dahulu');
        }

    $pesanan = Pesanan::where('customer_id', auth('customer')->id())->where('status',0)->first();
    $pesanan_id = $pesanan['id'];
    $pesanan->status = 1;
    $pesanan->update();

    $pesanan_details = Pesanan_Detail::where('status_pembayaran',0)->first();
    $pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan_id)->get();
    foreach ($pesanan_details as $pesanan_details) {
        $barang = Barang::where('id', $pesanan_details->barang_id)->first();
        $barang->stok =$barang->stok-$pesanan_details->jumlah;
        $barang->update();
    }

    Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
    return redirect('history')->with('toast_success', 'Pesanan success dipesan Selanjutakan Lakukan Proses Pembayaran');
}

}
