<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetail_PenjualanRequest;
use App\Http\Requests\UpdateDetail_PenjualanRequest;
use App\Repositories\Detail_PenjualanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detail_PenjualanController extends AppBaseController
{
    /** @var  Detail_PenjualanRepository */
    private $detailPenjualanRepository;

    public function __construct(Detail_PenjualanRepository $detailPenjualanRepo)
    {
        $this->detailPenjualanRepository = $detailPenjualanRepo;
    }

    /**
     * Display a listing of the Detail_Penjualan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detailPenjualans = $this->detailPenjualanRepository->all();

        return view('detail__penjualans.index')
            ->with('detailPenjualans', $detailPenjualans);
    }

    /**
     * Show the form for creating a new Detail_Penjualan.
     *
     * @return Response
     */
    public function create()
    {
        return view('detail__penjualans.create');
    }

    /**
     * Store a newly created Detail_Penjualan in storage.
     *
     * @param CreateDetail_PenjualanRequest $request
     *
     * @return Response
     */
    public function store(CreateDetail_PenjualanRequest $request)
    {
        $input = $request->all();

        $detailPenjualan = $this->detailPenjualanRepository->create($input);

        Flash::success('Detail  Penjualan saved successfully.');

        return redirect(route('detailPenjualans.index'));
    }

    /**
     * Display the specified Detail_Penjualan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detailPenjualan = $this->detailPenjualanRepository->find($id);

        if (empty($detailPenjualan)) {
            Flash::error('Detail  Penjualan not found');

            return redirect(route('detailPenjualans.index'));
        }

        return view('detail__penjualans.show')->with('detailPenjualan', $detailPenjualan);
    }

    /**
     * Show the form for editing the specified Detail_Penjualan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detailPenjualan = $this->detailPenjualanRepository->find($id);

        if (empty($detailPenjualan)) {
            Flash::error('Detail  Penjualan not found');

            return redirect(route('detailPenjualans.index'));
        }

        return view('detail__penjualans.edit')->with('detailPenjualan', $detailPenjualan);
    }

    /**
     * Update the specified Detail_Penjualan in storage.
     *
     * @param int $id
     * @param UpdateDetail_PenjualanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetail_PenjualanRequest $request)
    {
        $detailPenjualan = $this->detailPenjualanRepository->find($id);

        if (empty($detailPenjualan)) {
            Flash::error('Detail  Penjualan not found');

            return redirect(route('detailPenjualans.index'));
        }

        $detailPenjualan = $this->detailPenjualanRepository->update($request->all(), $id);

        Flash::success('Detail  Penjualan updated successfully.');

        return redirect(route('detailPenjualans.index'));
    }

    /**
     * Remove the specified Detail_Penjualan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detailPenjualan = $this->detailPenjualanRepository->find($id);

        if (empty($detailPenjualan)) {
            Flash::error('Detail  Penjualan not found');

            return redirect(route('detailPenjualans.index'));
        }

        $this->detailPenjualanRepository->delete($id);

        Flash::success('Detail  Penjualan deleted successfully.');

        return redirect(route('detailPenjualans.index'));
    }
}
