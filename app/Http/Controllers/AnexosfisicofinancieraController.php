<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnexosfisicofinancieraRequest;
use App\Http\Requests\UpdateAnexosfisicofinancieraRequest;
use App\Repositories\AnexosfisicofinancieraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AnexosfisicofinancieraController extends AppBaseController
{
    /** @var  AnexosfisicofinancieraRepository */
    private $anexosfisicofinancieraRepository;

    public function __construct(AnexosfisicofinancieraRepository $anexosfisicofinancieraRepo)
    {
        $this->anexosfisicofinancieraRepository = $anexosfisicofinancieraRepo;
    }

    /**
     * Display a listing of the Anexosfisicofinanciera.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->anexosfisicofinancieraRepository->pushCriteria(new RequestCriteria($request));
        $anexosfisicofinancieras = $this->anexosfisicofinancieraRepository->all();

        return view('anexosfisicofinancieras.index')
            ->with('anexosfisicofinancieras', $anexosfisicofinancieras);
    }

    /**
     * Show the form for creating a new Anexosfisicofinanciera.
     *
     * @return Response
     */
    public function create()
    {
        return view('anexosfisicofinancieras.create');
    }

    /**
     * Store a newly created Anexosfisicofinanciera in storage.
     *
     * @param CreateAnexosfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function store(CreateAnexosfisicofinancieraRequest $request)
    {
        $input = $request->all();

        $anexosfisicofinanciera = $this->anexosfisicofinancieraRepository->create($input);

        Flash::success('Anexosfisicofinanciera saved successfully.');

        return redirect(route('anexosfisicofinancieras.index'));
    }

    /**
     * Display the specified Anexosfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $anexosfisicofinanciera = $this->anexosfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosfisicofinanciera)) {
            Flash::error('Anexosfisicofinanciera not found');

            return redirect(route('anexosfisicofinancieras.index'));
        }

        return view('anexosfisicofinancieras.show')->with('anexosfisicofinanciera', $anexosfisicofinanciera);
    }

    /**
     * Show the form for editing the specified Anexosfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $anexosfisicofinanciera = $this->anexosfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosfisicofinanciera)) {
            Flash::error('Anexosfisicofinanciera not found');

            return redirect(route('anexosfisicofinancieras.index'));
        }

        return view('anexosfisicofinancieras.edit')->with('anexosfisicofinanciera', $anexosfisicofinanciera);
    }

    /**
     * Update the specified Anexosfisicofinanciera in storage.
     *
     * @param  int              $id
     * @param UpdateAnexosfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnexosfisicofinancieraRequest $request)
    {
        $anexosfisicofinanciera = $this->anexosfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosfisicofinanciera)) {
            Flash::error('Anexosfisicofinanciera not found');

            return redirect(route('anexosfisicofinancieras.index'));
        }

        $anexosfisicofinanciera = $this->anexosfisicofinancieraRepository->update($request->all(), $id);

        Flash::success('Anexosfisicofinanciera updated successfully.');

        return redirect(route('anexosfisicofinancieras.index'));
    }

    /**
     * Remove the specified Anexosfisicofinanciera from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $anexosfisicofinanciera = $this->anexosfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosfisicofinanciera)) {
            Flash::error('Anexosfisicofinanciera not found');

            return redirect(route('anexosfisicofinancieras.index'));
        }

        $this->anexosfisicofinancieraRepository->delete($id);

        Flash::success('Anexosfisicofinanciera deleted successfully.');

        return redirect(route('anexosfisicofinancieras.index'));
    }
}
