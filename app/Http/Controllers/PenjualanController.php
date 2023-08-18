<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;
use App\Repositories\PenjualanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use App\Models\Penjualan;
use App\Models\DetailPenjualan;
use App\Models\Barang;
use PDF;

class PenjualanController extends AppBaseController
{
    /** @var  PenjualanRepository */
    private $penjualanRepository;

    public function __construct(PenjualanRepository $penjualanRepo)
    {
        $this->penjualanRepository = $penjualanRepo;
    }

    /**
     * Display a listing of the Penjualan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $penjualans = $this->penjualanRepository->all();

        return view('penjualans.index')
            ->with('penjualans', $penjualans);



    }

    /**
     * Show the form for creating a new Penjualan.
     *
     * @return Response
     */
    public function create()
    {
        $nom_barang = \App\Models\Barang::get();
        $brg = \App\Models\Barang::all();
        $barang = \App\Models\Barang::all()->pluck('nama','id');
        return view('penjualans.create',
           compact('barang','nom_barang','brg'));
    }

    /**
     * Store a newly created Penjualan in storage.
     *
     * @param CreatePenjualanRequest $request
     *
     * @return Response
     */
    public function store(CreatePenjualanRequest $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();

 
            $penjualan = $this->penjualanRepository->create($input);
            foreach ($input['nama'] as $key => $row) {
                $detail_penjualan = new \App\Models\Detail_penjualan();
                $barang = \App\Models\Barang::where('nama', $input['nama'][$key])->first();
                $detail_penjualan->barangs_id = $barang->id;
                $result = $penjualan->id;
                if ($input['qty'][$key] > $barang->stok){
                    Flash::error('Stok Kurang gan.');
                    return redirect(route('penjualans.create', $result)); 
                };
                $detail_penjualan->qty = $input['qty'][$key];
                $detail_penjualan->subtotal = $input['subtotal'][$key];
                $detail_penjualan->penjualans_id = $penjualan->id;
                $detail_penjualan->save();
                
                //update stok ke table barang    
                $new_stok = (int)$barang->stok - (int)$input['qty'][$key];
                $barang->stok = $new_stok;
                $barang->save();

                //update detail pembelian
                $daftar_pembelian = \App\Models\Detail_pembelian::whereRaw('qty>qty_terjual AND barangs_id=?',[(int)$input['id'][$key]])
                                   
                                    ->get();

                $jumlah = (int)$input['qty'][$key];
                foreach($daftar_pembelian as $pembelian) {
                    if ($jumlah > 0) {
                        $sisa = $pembelian->qty - $pembelian->qty_terjual;
                        if ($sisa>=$jumlah) {
                          $pembelian->qty_terjual += $jumlah;
                          $pembelian->save();
                          $jumlah = 0;
                        } else {
                          $pembelian->qty_terjual += $sisa;
                          $pembelian->save();
                          $jumlah -= $sisa;   
                        }
                    }
                }
               
            }
            $results = $penjualan->id;
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
       
        
        // dd( $result);
        Flash::success('Penjualan saved successfully.');
        //return redirect(route('penjualans.index'));

        return redirect(route('penjualans.show', $result, $results)); 
    }

    /**
     * Display the specified Penjualan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $penjualan = $this->penjualanRepository->find($id);

        if (empty($penjualan)) {
            Flash::error('Penjualan not found');

            return redirect(route('penjualans.index'));
        }

        return view('penjualans.show')->with('penjualan', $penjualan);
    }

    /**
     * Show the form for editing the specified Penjualan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $penjualan = $this->penjualanRepository->find($id);

        if (empty($penjualan)) {
            Flash::error('Penjualan not found');

            return redirect(route('penjualans.index'));
        }

        return view('penjualans.edit')->with('penjualan', $penjualan);
    }

    /**
     * Update the specified Penjualan in storage.
     *
     * @param int $id
     * @param UpdatePenjualanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePenjualanRequest $request)
    {
        $penjualan = $this->penjualanRepository->find($id);

        if (empty($penjualan)) {
            Flash::error('Penjualan not found');

            return redirect(route('penjualans.index'));
        }

        $penjualan = $this->penjualanRepository->update($request->all(), $id);

        Flash::success('Penjualan updated successfully.');

        return redirect(route('penjualans.index'));
    }

    /**
     * Remove the specified Penjualan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $penjualan = $this->penjualanRepository->find($id);

        if (empty($penjualan)) {
            Flash::error('Penjualan not found');

            return redirect(route('penjualans.index'));
        }

        $this->penjualanRepository->delete($id);

        Flash::success('Penjualan deleted successfully.');

        return redirect(route('penjualans.index'));
    }
    public function pdf($id)
    {
         $penjualan = $this->penjualanRepository->find($id);
        if (empty($penjualan)) {
            Flash::error('Penjualan not found');
            return redirect(route('penjualans.index'));
        }
        $pdf = PDF::loadView('penjualans.nota',
            compact('penjualan'))->setPaper([0,0,450.98,300.85],'landscape');
        //return $pdf->download('detail_penjualan.pdf'); 
        return $pdf->stream('detail_penjualan.pdf'); 
    }
}
