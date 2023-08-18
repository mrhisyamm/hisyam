<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetail_penjualan1Request;
use App\Http\Requests\UpdateDetail_penjualan1Request;
use App\Repositories\Detail_penjualan1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detail_penjualan1Controller extends AppBaseController
{
    /** @var  Detail_penjualan1Repository */
    private $detailPenjualan1Repository;

    public function __construct(Detail_penjualan1Repository $detailPenjualan1Repo)
    {
        $this->detailPenjualan1Repository = $detailPenjualan1Repo;
    }

    /**
     * Display a listing of the Detail_penjualan1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detailPenjualan1s = $this->detailPenjualan1Repository->all();

        return view('detail_penjualan1s.index')
            ->with('detailPenjualan1s', $detailPenjualan1s);
    }

    /**
     * Show the form for creating a new Detail_penjualan1.
     *
     * @return Response
     */
    public function create()
    {
        return view('detail_penjualan1s.create');
    }

    /**
     * Store a newly created Detail_penjualan1 in storage.
     *
     * @param CreateDetail_penjualan1Request $request
     *
     * @return Response
     */
    public function store(CreateDetail_penjualan1Request $request)
    {
        $input = $request->all();

        $detailPenjualan1 = $this->detailPenjualan1Repository->create($input);

        Flash::success('Detail Penjualan1 saved successfully.');

        return redirect(route('detailPenjualan1s.index'));
    }

    /**
     * Display the specified Detail_penjualan1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detailPenjualan1 = $this->detailPenjualan1Repository->find($id);

        if (empty($detailPenjualan1)) {
            Flash::error('Detail Penjualan1 not found');

            return redirect(route('detailPenjualan1s.index'));
        }

        return view('detail_penjualan1s.show')->with('detailPenjualan1', $detailPenjualan1);
    }

    /**
     * Show the form for editing the specified Detail_penjualan1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detailPenjualan1 = $this->detailPenjualan1Repository->find($id);

        if (empty($detailPenjualan1)) {
            Flash::error('Detail Penjualan1 not found');

            return redirect(route('detailPenjualan1s.index'));
        }

        return view('detail_penjualan1s.edit')->with('detailPenjualan1', $detailPenjualan1);
    }

    /**
     * Update the specified Detail_penjualan1 in storage.
     *
     * @param int $id
     * @param UpdateDetail_penjualan1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateDetail_penjualan1Request $request)
    {
        $detailPenjualan1 = $this->detailPenjualan1Repository->find($id);

        if (empty($detailPenjualan1)) {
            Flash::error('Detail Penjualan1 not found');

            return redirect(route('detailPenjualan1s.index'));
        }

        $detailPenjualan1 = $this->detailPenjualan1Repository->update($request->all(), $id);

        Flash::success('Detail Penjualan1 updated successfully.');

        return redirect(route('detailPenjualan1s.index'));
    }

    /**
     * Remove the specified Detail_penjualan1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detailPenjualan1 = $this->detailPenjualan1Repository->find($id);

        if (empty($detailPenjualan1)) {
            Flash::error('Detail Penjualan1 not found');

            return redirect(route('detailPenjualan1s.index'));
        }

        $this->detailPenjualan1Repository->delete($id);

        Flash::success('Detail Penjualan1 deleted successfully.');

        return redirect(route('detailPenjualan1s.index'));
    }
}
