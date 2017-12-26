<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchivospersonasRequest;
use App\Http\Requests\UpdateArchivospersonasRequest;
use App\Repositories\ArchivospersonasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArchivospersonasController extends AppBaseController
{
    /** @var  ArchivospersonasRepository */
    private $archivospersonasRepository;

    public function __construct(ArchivospersonasRepository $archivospersonasRepo)
    {
        $this->archivospersonasRepository = $archivospersonasRepo;
    }

    /**
     * Display a listing of the Archivospersonas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archivospersonasRepository->pushCriteria(new RequestCriteria($request));
        $archivospersonas = $this->archivospersonasRepository->all();

        return view('archivospersonas.index')
            ->with('archivospersonas', $archivospersonas);
    }

    /**
     * Show the form for creating a new Archivospersonas.
     *
     * @return Response
     */
    public function create()
    {
        return view('archivospersonas.create');
    }

    /**
     * Store a newly created Archivospersonas in storage.
     *
     * @param CreateArchivospersonasRequest $request
     *
     * @return Response
     */
    public function store(CreateArchivospersonasRequest $request)
    {
        $input = $request->all();

        $archivospersonas = $this->archivospersonasRepository->create($input);

        Flash::success('Archivospersonas saved successfully.');

        return redirect(route('archivospersonas.index'));
    }

    /**
     * Display the specified Archivospersonas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archivospersonas = $this->archivospersonasRepository->findWithoutFail($id);

        if (empty($archivospersonas)) {
            Flash::error('Archivospersonas not found');

            return redirect(route('archivospersonas.index'));
        }

        return view('archivospersonas.show')->with('archivospersonas', $archivospersonas);
    }

    /**
     * Show the form for editing the specified Archivospersonas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archivospersonas = $this->archivospersonasRepository->findWithoutFail($id);

        if (empty($archivospersonas)) {
            Flash::error('Archivospersonas not found');

            return redirect(route('archivospersonas.index'));
        }

        return view('archivospersonas.edit')->with('archivospersonas', $archivospersonas);
    }

    /**
     * Update the specified Archivospersonas in storage.
     *
     * @param  int              $id
     * @param UpdateArchivospersonasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchivospersonasRequest $request)
    {
        $archivospersonas = $this->archivospersonasRepository->findWithoutFail($id);

        if (empty($archivospersonas)) {
            Flash::error('Archivospersonas not found');

            return redirect(route('archivospersonas.index'));
        }

        $archivospersonas = $this->archivospersonasRepository->update($request->all(), $id);

        Flash::success('Archivospersonas updated successfully.');

        return redirect(route('archivospersonas.index'));
    }

    /**
     * Remove the specified Archivospersonas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archivospersonas = $this->archivospersonasRepository->findWithoutFail($id);

        if (empty($archivospersonas)) {
            Flash::error('Archivospersonas not found');

            return redirect(route('archivospersonas.index'));
        }

        $this->archivospersonasRepository->delete($id);

        Flash::success('Archivospersonas deleted successfully.');

        return redirect(route('archivospersonas.index'));
    }
}
