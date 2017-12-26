<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchivospolizasRequest;
use App\Http\Requests\UpdateArchivospolizasRequest;
use App\Repositories\ArchivospolizasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArchivospolizasController extends AppBaseController
{
    /** @var  ArchivospolizasRepository */
    private $archivospolizasRepository;

    public function __construct(ArchivospolizasRepository $archivospolizasRepo)
    {
        $this->archivospolizasRepository = $archivospolizasRepo;
    }

    /**
     * Display a listing of the Archivospolizas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archivospolizasRepository->pushCriteria(new RequestCriteria($request));
        $archivospolizas = $this->archivospolizasRepository->all();

        return view('archivospolizas.index')
            ->with('archivospolizas', $archivospolizas);
    }

    /**
     * Show the form for creating a new Archivospolizas.
     *
     * @return Response
     */
    public function create()
    {
        return view('archivospolizas.create');
    }

    /**
     * Store a newly created Archivospolizas in storage.
     *
     * @param CreateArchivospolizasRequest $request
     *
     * @return Response
     */
    public function store(CreateArchivospolizasRequest $request)
    {
        $input = $request->all();

        $archivospolizas = $this->archivospolizasRepository->create($input);

        Flash::success('Archivospolizas saved successfully.');

        return redirect(route('archivospolizas.index'));
    }

    /**
     * Display the specified Archivospolizas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archivospolizas = $this->archivospolizasRepository->findWithoutFail($id);

        if (empty($archivospolizas)) {
            Flash::error('Archivospolizas not found');

            return redirect(route('archivospolizas.index'));
        }

        return view('archivospolizas.show')->with('archivospolizas', $archivospolizas);
    }

    /**
     * Show the form for editing the specified Archivospolizas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archivospolizas = $this->archivospolizasRepository->findWithoutFail($id);

        if (empty($archivospolizas)) {
            Flash::error('Archivospolizas not found');

            return redirect(route('archivospolizas.index'));
        }

        return view('archivospolizas.edit')->with('archivospolizas', $archivospolizas);
    }

    /**
     * Update the specified Archivospolizas in storage.
     *
     * @param  int              $id
     * @param UpdateArchivospolizasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchivospolizasRequest $request)
    {
        $archivospolizas = $this->archivospolizasRepository->findWithoutFail($id);

        if (empty($archivospolizas)) {
            Flash::error('Archivospolizas not found');

            return redirect(route('archivospolizas.index'));
        }

        $archivospolizas = $this->archivospolizasRepository->update($request->all(), $id);

        Flash::success('Archivospolizas updated successfully.');

        return redirect(route('archivospolizas.index'));
    }

    /**
     * Remove the specified Archivospolizas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archivospolizas = $this->archivospolizasRepository->findWithoutFail($id);

        if (empty($archivospolizas)) {
            Flash::error('Archivospolizas not found');

            return redirect(route('archivospolizas.index'));
        }

        $this->archivospolizasRepository->delete($id);

        Flash::success('Archivospolizas deleted successfully.');

        return redirect(route('archivospolizas.index'));
    }
}
