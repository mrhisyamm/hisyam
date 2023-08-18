<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetail_pembelian1Request;
use App\Http\Requests\UpdateDetail_pembelian1Request;
use App\Repositories\Detail_pembelian1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detail_pembelian1Controller extends AppBaseController
{
    /** @var  Detail_pembelian1Repository */
    private $detailPembelian1Repository;

    public function __construct(Detail_pembelian1Repository $detailPembelian1Repo)
    {
        $this->detailPembelian1Repository = $detailPembelian1Repo;
    }

    /**
     * Display a listing of the Detail_pembelian1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detailPembelian1s = $this->detailPembelian1Repository->all();

        return view('detail_pembelian1s.index')
            ->with('detailPembelian1s', $detailPembelian1s);
    }

    /**
     * Show the form for creating a new Detail_pembelian1.
     *
     * @return Response
     */
    public function create()
    {
        return view('detail_pembelian1s.create');
    }

    /**
     * Store a newly created Detail_pembelian1 in storage.
     *
     * @param CreateDetail_pembelian1Request $request
     *
     * @return Response
     */
    public function store(CreateDetail_pembelian1Request $request)
    {
        $input = $request->all();

        $detailPembelian1 = $this->detailPembelian1Repository->create($input);

        Flash::success('Detail Pembelian1 saved successfully.');

        return redirect(route('detailPembelian1s.index'));
    }

    /**
     * Display the specified Detail_pembelian1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detailPembelian1 = $this->detailPembelian1Repository->find($id);

        if (empty($detailPembelian1)) {
            Flash::error('Detail Pembelian1 not found');

            return redirect(route('detailPembelian1s.index'));
        }

        return view('detail_pembelian1s.show')->with('detailPembelian1', $detailPembelian1);
    }

    /**
     * Show the form for editing the specified Detail_pembelian1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detailPembelian1 = $this->detailPembelian1Repository->find($id);

        if (empty($detailPembelian1)) {
            Flash::error('Detail Pembelian1 not found');

            return redirect(route('detailPembelian1s.index'));
        }

        return view('detail_pembelian1s.edit')->with('detailPembelian1', $detailPembelian1);
    }

    /**
     * Update the specified Detail_pembelian1 in storage.
     *
     * @param int $id
     * @param UpdateDetail_pembelian1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateDetail_pembelian1Request $request)
    {
        $detailPembelian1 = $this->detailPembelian1Repository->find($id);

        if (empty($detailPembelian1)) {
            Flash::error('Detail Pembelian1 not found');

            return redirect(route('detailPembelian1s.index'));
        }

        $detailPembelian1 = $this->detailPembelian1Repository->update($request->all(), $id);

        Flash::success('Detail Pembelian1 updated successfully.');

        return redirect(route('detailPembelian1s.index'));
    }

    /**
     * Remove the specified Detail_pembelian1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detailPembelian1 = $this->detailPembelian1Repository->find($id);

        if (empty($detailPembelian1)) {
            Flash::error('Detail Pembelian1 not found');

            return redirect(route('detailPembelian1s.index'));
        }

        $this->detailPembelian1Repository->delete($id);

        Flash::success('Detail Pembelian1 deleted successfully.');

        return redirect(route('detailPembelian1s.index'));
    }
}
