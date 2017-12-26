<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnexosejecucionfisicofinancieraRequest;
use App\Http\Requests\UpdateAnexosejecucionfisicofinancieraRequest;
use App\Repositories\AnexosejecucionfisicofinancieraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AnexosejecucionfisicofinancieraController extends AppBaseController
{
    /** @var  AnexosejecucionfisicofinancieraRepository */
    private $anexosejecucionfisicofinancieraRepository;

    public function __construct(AnexosejecucionfisicofinancieraRepository $anexosejecucionfisicofinancieraRepo)
    {
        $this->anexosejecucionfisicofinancieraRepository = $anexosejecucionfisicofinancieraRepo;
    }

    /**
     * Display a listing of the Anexosejecucionfisicofinanciera.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->anexosejecucionfisicofinancieraRepository->pushCriteria(new RequestCriteria($request));
        $anexosejecucionfisicofinancieras = $this->anexosejecucionfisicofinancieraRepository->all();

        return view('anexosejecucionfisicofinancieras.index')
            ->with('anexosejecucionfisicofinancieras', $anexosejecucionfisicofinancieras);
    }

    /**
     * Show the form for creating a new Anexosejecucionfisicofinanciera.
     *
     * @return Response
     */
    public function create()
    {
        return view('anexosejecucionfisicofinancieras.create');
    }

    /**
     * Store a newly created Anexosejecucionfisicofinanciera in storage.
     *
     * @param CreateAnexosejecucionfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function store(CreateAnexosejecucionfisicofinancieraRequest $request)
    {
        $input = $request->all();

        $anexosejecucionfisicofinanciera = $this->anexosejecucionfisicofinancieraRepository->create($input);

        Flash::success('Anexosejecucionfisicofinanciera saved successfully.');

        return redirect(route('anexosejecucionfisicofinancieras.index'));
    }

    /**
     * Display the specified Anexosejecucionfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $anexosejecucionfisicofinanciera = $this->anexosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosejecucionfisicofinanciera)) {
            Flash::error('Anexosejecucionfisicofinanciera not found');

            return redirect(route('anexosejecucionfisicofinancieras.index'));
        }

        return view('anexosejecucionfisicofinancieras.show')->with('anexosejecucionfisicofinanciera', $anexosejecucionfisicofinanciera);
    }

    /**
     * Show the form for editing the specified Anexosejecucionfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $anexosejecucionfisicofinanciera = $this->anexosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosejecucionfisicofinanciera)) {
            Flash::error('Anexosejecucionfisicofinanciera not found');

            return redirect(route('anexosejecucionfisicofinancieras.index'));
        }

        return view('anexosejecucionfisicofinancieras.edit')->with('anexosejecucionfisicofinanciera', $anexosejecucionfisicofinanciera);
    }

    /**
     * Update the specified Anexosejecucionfisicofinanciera in storage.
     *
     * @param  int              $id
     * @param UpdateAnexosejecucionfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnexosejecucionfisicofinancieraRequest $request)
    {
        $anexosejecucionfisicofinanciera = $this->anexosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosejecucionfisicofinanciera)) {
            Flash::error('Anexosejecucionfisicofinanciera not found');

            return redirect(route('anexosejecucionfisicofinancieras.index'));
        }

        $anexosejecucionfisicofinanciera = $this->anexosejecucionfisicofinancieraRepository->update($request->all(), $id);

        Flash::success('Anexosejecucionfisicofinanciera updated successfully.');

        return redirect(route('anexosejecucionfisicofinancieras.index'));
    }

    /**
     * Remove the specified Anexosejecucionfisicofinanciera from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $anexosejecucionfisicofinanciera = $this->anexosejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($anexosejecucionfisicofinanciera)) {
            Flash::error('Anexosejecucionfisicofinanciera not found');

            return redirect(route('anexosejecucionfisicofinancieras.index'));
        }

        $this->anexosejecucionfisicofinancieraRepository->delete($id);

        Flash::success('Anexosejecucionfisicofinanciera deleted successfully.');

        return redirect(route('anexosejecucionfisicofinancieras.index'));
    }
}
