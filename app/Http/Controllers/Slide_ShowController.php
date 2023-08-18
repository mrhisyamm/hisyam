<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide_Show;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Flash;

class Slide_ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide_show = Slide_Show::all();
        return view('Slide_Show.index', compact(
            'slide_show'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slide_show = new Slide_Show;
        return view('Slide_Show.create');
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
            'label' => 'required',
            
        ]);

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $nmfile = Str::uuid().".".$extension;
        $path = $request->file('file')->storeAs(
            'slide_show',$nmfile, 'data'
        );

        $slide_show = new Slide_Show();
        $slide_show->gambar = $nmfile;
        $slide_show->label = $request->label;       
        $slide_show->save();

        Flash::success('Gambar saved successfully.');

        return redirect('/Slide_Show');
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
        $slide_show = Slide_Show::find($id);
        return view('Slide_Show.edit', compact(
            'slide_show'

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
        $slide_show = Slide_Show::find($id);
        if ($request->file('file') != null) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'slide_show',
                $nmfile,
                'data'
            );
            $slide_show->gambar = $nmfile;
        }
        $slide_show->label = $request->label;
        $slide_show->save();

        Flash::success('Gambar updated successfully.');


        return redirect('/Slide_Show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide_show = Slide_Show::find($id);
        if (empty($slide_show)) {
            Flash::error('gambar not found');

            return redirect(route('Slide_Show.index'));
        }

        $slide_show->delete($id);

        Flash::success('Gambar deleted successfully.');

        return redirect(route('Slide_Show.index'));
    }
}