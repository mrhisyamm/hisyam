<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Flash;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('Galeri.index', compact(
            'galeri'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeri = new Galeri;
        return view('Galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'deskripsi' => 'required',

        ]);

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $nmfile = Str::uuid().".".$extension;
        $path = $request->file('file')->storeAs(
            'galeri',$nmfile, 'data'
        );

        $galeri = new Galeri();
        $galeri->gambar = $nmfile;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->save();

        Flash::success('Galery saved successfully.');

        return redirect('/Galeri');
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
        $galeri = Galeri::find($id);
        return view('Galeri.edit', compact(
            'galeri'

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
        $galeri = Galeri::find($id);
        if ($request->file('file') != null) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'galeri',
                $nmfile,
                'data'
            );
            $galeri->gambar = $nmfile;
        }
        $galeri->deskripsi = $request->deskripsi;
        $galeri->save();


        Flash::success('Galery Update successfully.');

        return redirect('/Galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();

        Flash::success('Galery deleted successfully.');

        return redirect('/Galeri');
    }
}
