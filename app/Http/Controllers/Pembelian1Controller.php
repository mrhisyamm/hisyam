<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePembelian1Request;
use App\Http\Requests\UpdatePembelian1Request;
use App\Repositories\Pembelian1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Barang;
use App\Models\Detail_pembelian1;
use App\Models\Pembelian;
use App\Models\Suplier;
use DB;

class Pembelian1Controller extends AppBaseController
{
    /** @var  Pembelian1Repository */
    private $pembelian1Repository;

    public function __construct(Pembelian1Repository $pembelian1Repo)
    {
        $this->pembelian1Repository = $pembelian1Repo;
    }

    /**
     * Display a listing of the Pembelian1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pembelian1s = $this->pembelian1Repository->all();

        return view('pembelian1s.index')
            ->with('pembelian1s', $pembelian1s);
    }

    /**
     * Show the form for creating a new Pembelian1.
     *
     * @return Response
     */
    public function create()
    {
        $nom_barang = \App\Models\Barang::get();
        $barang = \App\Models\Barang::all()->pluck('nama','id');
                $suplier = \App\Models\Suplier::all()->pluck('name','id');
        return view('pembelian1s.create',
            compact('barang','suplier','nom_barang'));
    }

    /**
     * Store a newly created Pembelian1 in storage.
     *
     * @param CreatePembelian1Request $request
     *
     * @return Response
     */
    public function store(CreatePembelian1Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $pembelian1 = $this->pembelian1Repository->create($input);
            foreach ($input['nama'] as $key => $row) {
                $detail_pembelian1 = new \App\Models\Detail_pembelian1();
                $barang = \App\Models\Barang::where('nama', $input['nama'][$key])->first();
                $a = \App\Models\Barang::where('nama', $input['nama'][$key])->first();

                $detail_pembelian1->barangs_id = $barang->id;

                
                $detail_pembelian1->qty = $input['qty'][$key];
                $detail_pembelian1->subtotal = $input['subtotal'][$key];
                $detail_pembelian1->pembelians1_id = $pembelian1->id;
                $detail_pembelian1->save();

                $new_stok = (int)$barang->stok - (int)$input['qty'][$key];
                $new = (int)$barang->harga_beli+0;
                //$a->harga_beli=(int)$input['harga_beli'][$key];
                $barang->stok = $new_stok;
                $barang->save();
                //$a->save();


            }
            $result = $pembelian1->id;
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
       
        
        // dd( $result);
        Flash::success('Pembelian saved successfully.');
        //return redirect(route('pembelians.index'));
            return redirect(route('pembelian1s.show', $result));
    }

    /**
     * Display the specified Pembelian1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pembelian1 = $this->pembelian1Repository->find($id);

        if (empty($pembelian1)) {
            Flash::error('Pembelian1 not found');

            return redirect(route('pembelian1s.index'));
        }

        return view('pembelian1s.show')->with('pembelian1', $pembelian1);
    }

    /**
     * Show the form for editing the specified Pembelian1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pembelian1 = $this->pembelian1Repository->find($id);

        if (empty($pembelian1)) {
            Flash::error('Pembelian1 not found');

            return redirect(route('pembelian1s.index'));
        }

        return view('pembelian1s.edit')->with('pembelian1', $pembelian1);
    }

    /**
     * Update the specified Pembelian1 in storage.
     *
     * @param int $id
     * @param UpdatePembelian1Request $request
     *
     * @return Response
     */
    public function update($id, UpdatePembelian1Request $request)
    {
        $pembelian1 = $this->pembelian1Repository->find($id);

        if (empty($pembelian1)) {
            Flash::error('Pembelian1 not found');

            return redirect(route('pembelian1s.index'));
        }

        $pembelian1 = $this->pembelian1Repository->update($request->all(), $id);

        Flash::success('Pembelian1 updated successfully.');

        return redirect(route('pembelian1s.index'));
    }

    /**
     * Remove the specified Pembelian1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pembelian1 = $this->pembelian1Repository->find($id);

        if (empty($pembelian1)) {
            Flash::error('Pembelian1 not found');

            return redirect(route('pembelian1s.index'));
        }

        $this->pembelian1Repository->delete($id);

        Flash::success('Pembelian1 deleted successfully.');

        return redirect(route('pembelian1s.index'));
    }
}
