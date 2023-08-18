<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beban;

class BebanController extends Controller
{
    public function index()
    {
        $no = 1;
        $beban = Beban::all();
        return view('beban.index',compact('beban','no'));
    }

    public function create()
    {
        return view('beban.create');
    }

    public function store(Request $request)
    {
        Beban::create($request->all());
        return redirect('/beban');
    }

    public function delete($id)
    {
        Beban::find($id)->delete();
        return redirect('/beban');
    }
}
