<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran_Air;
use Flash;

class Pembayaran_AirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran_air = Pembayaran_Air::all();
        return view('pembayaran_air.index', compact(
            'pembayaran_air'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran_air.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembayaran_air = new Pembayaran_Air();
        $pembayaran_air->no_ref = $request->no_ref;
        $pembayaran_air->tanggal = $request->tanggal;
        $pembayaran_air->instansi = $request->instansi;
        $pembayaran_air->nama_kepemilikan = $request->nama_kepemilikan;
        $pembayaran_air->keterangan = $request->keterangan;
        $pembayaran_air->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran_air->save();

        Flash::success('pembayaran saved successfully.');

        return redirect('/pembayaran_air');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembayaran_air = Pembayaran_Air::find($id);
        return view('pembayaran_air.edit', compact(
            'pembayaran_air'

        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembayaran_air = Pembayaran_Air::find($id);
        $pembayaran_air->no_ref = $request->no_ref;
        $pembayaran_air->tanggal = $request->tanggal;
        $pembayaran_air->instansi = $request->instansi;
        $pembayaran_air->nama_kepemilikan = $request->nama_kepemilikan;
        $pembayaran_air->keterangan = $request->keterangan;
        $pembayaran_air->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran_air->save();

        Flash::success('pembayaran updated successfully.');

        return redirect('/pembayaran_air');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran_air = Pembayaran_Air::find($id);
        $pembayaran_air->delete();

        Flash::success('pembayaran deleted successfully.');
        return redirect('/pembayaran_air');
    }
}
