<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran_Listrik;
use Flash;

class Pembayaran_ListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran_listrik = Pembayaran_Listrik::all();
        return view('pembayaran_listrik.index', compact(
            'pembayaran_listrik'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran_listrik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembayaran_listrik = new Pembayaran_Listrik();
        $pembayaran_listrik->no_tujuan = $request->no_tujuan;
        $pembayaran_listrik->keterangan = $request->keterangan;
        $pembayaran_listrik->tanggal = $request->tanggal;
        $pembayaran_listrik->token = $request->token;
        $pembayaran_listrik->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran_listrik->save();

        Flash::success('pembayaran saved successfully.');

        return redirect('/pembayaran_listrik');
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
        $pembayaran_listrik = Pembayaran_Listrik::find($id);
        return view('pembayaran_listrik.edit', compact(
            'pembayaran_listrik'

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
        $pembayaran_listrik = Pembayaran_Listrik::find($id);
        $pembayaran_listrik->no_tujuan = $request->no_tujuan;
        $pembayaran_listrik->keterangan = $request->keterangan;
        $pembayaran_listrik->tanggal = $request->tanggal;
        $pembayaran_listrik->token = $request->token;
        $pembayaran_listrik->jumlah_bayar = $request->jumlah_bayar;
        $pembayaran_listrik->save();

        Flash::success('pembayaran updated successfully.');

        return redirect('/pembayaran_listrik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran_listrik = Pembayaran_Listrik::find($id);
        $pembayaran_listrik->delete();

        Flash::success('pembayaran deleted successfully.');
        return redirect('/pembayaran_listrik');
    }
}
