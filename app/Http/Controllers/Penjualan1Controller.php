<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePenjualan1Request;
use App\Http\Requests\UpdatePenjualan1Request;
use App\Repositories\Penjualan1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use App\Models\Penjualan;
use App\Models\DetailPenjualan1;
use App\Models\Barang;
use PDF;

class Penjualan1Controller extends AppBaseController
{
    /** @var  Penjualan1Repository */
    private $penjualan1Repository;

    public function __construct(Penjualan1Repository $penjualan1Repo)
    {
        $this->penjualan1Repository = $penjualan1Repo;
    }

    /**
     * Display a listing of the Penjualan1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $penjualan1s = $this->penjualan1Repository->all();

        return view('penjualan1s.index')
            ->with('penjualan1s', $penjualan1s);
    }

    /**
     * Show the form for creating a new Penjualan1.
     *
     * @return Response
     */
    public function create()
    {
        $nom_barang = \App\Models\Barang::get();
        $brg = \App\Models\Barang::all();
        $barang = \App\Models\Barang::all()->pluck('nama','id');
        return view('penjualan1s.create',
           compact('barang','nom_barang','brg'));
    }

    /**
     * Store a newly created Penjualan1 in storage.
     *
     * @param CreatePenjualan1Request $request
     *
     * @return Response
     */
    public function store(CreatePenjualan1Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $penjualan1 = $this->penjualan1Repository->create($input);
            foreach ($input['nama'] as $key => $row) {
                $detail_penjualan1 = new \App\Models\Detail_penjualan1();
                $barang = \App\Models\Barang::where('nama', $input['nama'][$key])->first();
                $detail_penjualan1->barangs_id = $barang->id;
                $result = $penjualan1->id;
                if ($input['qty'][$key] > $barang->stok){
                    Flash::error('Stok Kurang gan.');
                    return redirect(route('penjualans.create', $result)); 
                };
                $detail_penjualan1->qty = $input['qty'][$key];
                $detail_penjualan1->subtotal = $input['subtotal'][$key];
                $detail_penjualan1->penjualan1s_id = $penjualan1->id;
                $detail_penjualan1->save();
                $new_stok = (int)$barang->stok + (int)$input['qty'][$key];
                $barang->stok = $new_stok;
                $barang->save();
            }
            $results = $penjualan1->id;
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
       
        
        // dd( $result);
        Flash::success('Penjualan saved successfully.');
        //return redirect(route('penjualans.index'));

        return redirect(route('penjualan1s.show', $result, $results));
    }

    /**
     * Display the specified Penjualan1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $penjualan1 = $this->penjualan1Repository->find($id);

        if (empty($penjualan1)) {
            Flash::error('Penjualan1 not found');

            return redirect(route('penjualan1s.index'));
        }

        return view('penjualan1s.show')->with('penjualan1', $penjualan1);
    }

    /**
     * Show the form for editing the specified Penjualan1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $penjualan1 = $this->penjualan1Repository->find($id);

        if (empty($penjualan1)) {
            Flash::error('Penjualan1 not found');

            return redirect(route('penjualan1s.index'));
        }

        return view('penjualan1s.edit')->with('penjualan1', $penjualan1);
    }

    /**
     * Update the specified Penjualan1 in storage.
     *
     * @param int $id
     * @param UpdatePenjualan1Request $request
     *
     * @return Response
     */
    public function update($id, UpdatePenjualan1Request $request)
    {
        $penjualan1 = $this->penjualan1Repository->find($id);

        if (empty($penjualan1)) {
            Flash::error('Penjualan1 not found');

            return redirect(route('penjualan1s.index'));
        }

        $penjualan1 = $this->penjualan1Repository->update($request->all(), $id);

        Flash::success('Penjualan1 updated successfully.');

        return redirect(route('penjualan1s.index'));
    }

    /**
     * Remove the specified Penjualan1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $penjualan1 = $this->penjualan1Repository->find($id);

        if (empty($penjualan1)) {
            Flash::error('Penjualan1 not found');

            return redirect(route('penjualan1s.index'));
        }

        $this->penjualan1Repository->delete($id);

        Flash::success('Penjualan1 deleted successfully.');

        return redirect(route('penjualan1s.index'));
    }
}
