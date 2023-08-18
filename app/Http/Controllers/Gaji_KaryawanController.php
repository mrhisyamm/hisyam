<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji_Karyawan;
use Flash;

class Gaji_KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji_karyawan = Gaji_Karyawan::all();
        return view('gaji_karyawan.index', compact(
            'gaji_karyawan'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gaji_karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gaji_karyawan = new Gaji_Karyawan();
        $gaji_karyawan->nama_karyawan = $request->nama_karyawan;
        $gaji_karyawan->gaji = $request->gaji;
        $gaji_karyawan->tanggal = $request->tanggal;
        $gaji_karyawan->keterangan = $request->keterangan;
        $gaji_karyawan->save();

        Flash::success('Data Gaji Karyawan saved successfully.');

        return redirect('/gaji_karyawan');
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
        $gaji_karyawan = Gaji_Karyawan::find($id);
        return view('gaji_karyawan.edit', compact(
            'gaji_karyawan'

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
        $gaji_karyawan = Gaji_Karyawan::find($id);
        $gaji_karyawan->nama_karyawan = $request->nama_karyawan;
        $gaji_karyawan->gaji = $request->gaji;
        $gaji_karyawan->tanggal = $request->tanggal;
        $gaji_karyawan->keterangan = $request->keterangan;
        $gaji_karyawan->save();

        Flash::success('Data Gaji Karyawan updated successfully.');

        return redirect('/gaji_karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji_karyawan = Gaji_Karyawan::find($id);
        $gaji_karyawan->delete();

        Flash::success('Data Gaji Karyawan deleted successfully.');

        return redirect('/gaji_karyawan');
    }
}
