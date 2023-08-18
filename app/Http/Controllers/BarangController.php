<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Repositories\BarangRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Detail_pembelian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Flash;
use Response;
use Carbon;

class BarangController extends AppBaseController
{
    /** @var  BarangRepository */
    private $barangRepository;

    public function __construct(BarangRepository $barangRepo)
    {
        $this->barangRepository = $barangRepo;
    }

    /**
     * Display a listing of the Barang.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $barangs = $this->barangRepository->all();
        if(Auth::check())
        {
        $barangs = Barang::all();
        return view('barangs.index')
            ->with('barangs', $barangs);
        }else{
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new Barang.
     *
     * @return Response
     */
    public function create()
    {
        $kategori=Kategori::all();
        
        return view('barangs.create', compact('kategori'));
    }

    /**
     * Store a newly created Barang in storage.
     *
     * @param CreateBarangRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $barangs = new Barang();
        
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();

        $nmfile = Str::uuid().".".$extension;
        $path = $request->file('file')->storeAs(
            'barang',$nmfile, 'data'
        );
        $barangs->gambar = $nmfile;
        $barangs->nama = $request->nama;
        $barangs->deskripsi = $request->deskripsi;
        $barangs->stok = $request->stok;
        $barangs->satuan = $request->satuan;
        $barangs->harga_beli = $request->harga_beli;
        $barangs->harga = $request->harga;
        $barangs->harga_diskon = $request->harga_diskon;
        $barangs->status = $request->status;
        $barangs->id_kategori = $request->id_kategori;
        
        $barangs->save();

        Flash::success('Barang saved successfully.');

        return redirect(route('barangs.index'));
    }

    /**
     * Display the specified Barang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mytime = Carbon\Carbon::now();
        $barang = $this->barangRepository->find($id);
        $det = \App\Models\Detail_pembelian::where('barangs_id',$id)->get();

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        return view('barangs.show',compact('barang','det','mytime'));
    }

    /**
     * Show the form for editing the specified Barang.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $barang = $this->barangRepository->find($id);
        $kategori = Kategori::all();

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        return view('barangs.edit', compact('barang','kategori'))->with('barang', $barang);
    }

    /**
     * Update the specified Barang in storage.
     *
     * @param int $id
     * @param UpdateBarangRequest $request
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        if ($request->file('file') != null) {
            echo $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            $nmfile = Str::uuid() . "." . $extension;
            $path = $request->file('file')->storeAs(
                'barang',
                $nmfile,
                'data'
            );
           echo  $barang->gambar = $nmfile;
        }

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok = $request->stok;
        $barang->satuan = $request->satuan;
        $barang->harga_beli = $request->harga_beli;
        $barang->harga = $request->harga;
        $barang->harga_diskon = $request->harga_diskon;
        $barang->status = $request->status;
        $barang->id_kategori = $request->id_kategori;
        
        $barang->save();

        Flash::success('Barang updated successfully.');

        return redirect(route('barangs.index'));
    }

    /**
     * Remove the specified Barang from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $barang = $this->barangRepository->find($id);

        if (empty($barang)) {
            Flash::error('Barang not found');

            return redirect(route('barangs.index'));
        }

        $this->barangRepository->delete($id);

        Flash::success('Barang deleted successfully.');

        return redirect(route('barangs.index'));
    }
}
