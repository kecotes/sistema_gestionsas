<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDatosejecucionfisicofinancieraRequest;
use App\Http\Requests\UpdateDatosejecucionfisicofinancieraRequest;
use App\Repositories\DatosejecucionfisicofinancieraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DatosejecucionfisicofinancieraController extends AppBaseController
{
    /** @var  DatosejecucionfisicofinancieraRepository */
    private $datosejecucionfisicofinancieraRepository;

    public function __construct(DatosejecucionfisicofinancieraRepository $datosejecucionfisicofinancieraRepo)
    {
        $this->datosejecucionfisicofinancieraRepository = $datosejecucionfisicofinancieraRepo;
    }

    /**
     * Display a listing of the Datosejecucionfisicofinanciera.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->datosejecucionfisicofinancieraRepository->pushCriteria(new RequestCriteria($request));
        $datosejecucionfisicofinancieras = $this->datosejecucionfisicofinancieraRepository->all();

        return view('datosejecucionfisicofinancieras.index')
            ->with('datosejecucionfisicofinancieras', $datosejecucionfisicofinancieras);
    }

    /**
     * Show the form for creating a new Datosejecucionfisicofinanciera.
     *
     * @return Response
     */
    public function create()
    {
        return view('datosejecucionfisicofinancieras.create');
    }

    /**
     * Store a newly created Datosejecucionfisicofinanciera in storage.
     *
     * @param CreateDatosejecucionfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function store(CreateDatosejecucionfisicofinancieraRequest $request)
    {
        $input = $request->all();

        $datosejecucionfisicofinanciera = $this->datosejecucionfisicofinancieraRepository->create($input);

        Flash::success('Datosejecucionfisicofinanciera saved successfully.');

        return redirect(route('datosejecucionfisicofinancieras.index'));
    }

    /**
     * Display the specified Datosejecucionfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $datosejecucionfisicofinanciera = $this->datosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($datosejecucionfisicofinanciera)) {
            Flash::error('Datosejecucionfisicofinanciera not found');

            return redirect(route('datosejecucionfisicofinancieras.index'));
        }

        return view('datosejecucionfisicofinancieras.show')->with('datosejecucionfisicofinanciera', $datosejecucionfisicofinanciera);
    }

    /**
     * Show the form for editing the specified Datosejecucionfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $datosejecucionfisicofinanciera = $this->datosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($datosejecucionfisicofinanciera)) {
            Flash::error('Datosejecucionfisicofinanciera not found');

            return redirect(route('datosejecucionfisicofinancieras.index'));
        }

        return view('datosejecucionfisicofinancieras.edit')->with('datosejecucionfisicofinanciera', $datosejecucionfisicofinanciera);
    }

    /**
     * Update the specified Datosejecucionfisicofinanciera in storage.
     *
     * @param  int              $id
     * @param UpdateDatosejecucionfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDatosejecucionfisicofinancieraRequest $request)
    {
        $datosejecucionfisicofinanciera = $this->datosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($datosejecucionfisicofinanciera)) {
            Flash::error('Datosejecucionfisicofinanciera not found');

            return redirect(route('datosejecucionfisicofinancieras.index'));
        }

        $datosejecucionfisicofinanciera = $this->datosejecucionfisicofinancieraRepository->update($request->all(), $id);

        Flash::success('Datosejecucionfisicofinanciera updated successfully.');

        return redirect(route('datosejecucionfisicofinancieras.index'));
    }

    /**
     * Remove the specified Datosejecucionfisicofinanciera from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $datosejecucionfisicofinanciera = $this->datosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($datosejecucionfisicofinanciera)) {
            Flash::error('Datosejecucionfisicofinanciera not found');

            return redirect(route('datosejecucionfisicofinancieras.index'));
        }

        $this->datosejecucionfisicofinancieraRepository->delete($id);

        Flash::success('Datosejecucionfisicofinanciera deleted successfully.');

        return redirect(route('datosejecucionfisicofinancieras.index'));
    }
}
