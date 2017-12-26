<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchivoscontratosRequest;
use App\Http\Requests\UpdateArchivoscontratosRequest;
use App\Repositories\ArchivoscontratosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArchivoscontratosController extends AppBaseController
{
    /** @var  ArchivoscontratosRepository */
    private $archivoscontratosRepository;

    public function __construct(ArchivoscontratosRepository $archivoscontratosRepo)
    {
        $this->archivoscontratosRepository = $archivoscontratosRepo;
    }

    /**
     * Display a listing of the Archivoscontratos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archivoscontratosRepository->pushCriteria(new RequestCriteria($request));
        $archivoscontratos = $this->archivoscontratosRepository->all();

        return view('archivoscontratos.index')
            ->with('archivoscontratos', $archivoscontratos);
    }

    /**
     * Show the form for creating a new Archivoscontratos.
     *
     * @return Response
     */
    public function create()
    {
        return view('archivoscontratos.create');
    }

    /**
     * Store a newly created Archivoscontratos in storage.
     *
     * @param CreateArchivoscontratosRequest $request
     *
     * @return Response
     */
    public function store(CreateArchivoscontratosRequest $request)
    {
        $input = $request->all();

        $archivoscontratos = $this->archivoscontratosRepository->create($input);

        Flash::success('Archivoscontratos saved successfully.');

        return redirect(route('archivoscontratos.index'));
    }

    /**
     * Display the specified Archivoscontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archivoscontratos = $this->archivoscontratosRepository->findWithoutFail($id);

        if (empty($archivoscontratos)) {
            Flash::error('Archivoscontratos not found');

            return redirect(route('archivoscontratos.index'));
        }

        return view('archivoscontratos.show')->with('archivoscontratos', $archivoscontratos);
    }

    /**
     * Show the form for editing the specified Archivoscontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archivoscontratos = $this->archivoscontratosRepository->findWithoutFail($id);

        if (empty($archivoscontratos)) {
            Flash::error('Archivoscontratos not found');

            return redirect(route('archivoscontratos.index'));
        }

        return view('archivoscontratos.edit')->with('archivoscontratos', $archivoscontratos);
    }

    /**
     * Update the specified Archivoscontratos in storage.
     *
     * @param  int              $id
     * @param UpdateArchivoscontratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchivoscontratosRequest $request)
    {
        $archivoscontratos = $this->archivoscontratosRepository->findWithoutFail($id);

        if (empty($archivoscontratos)) {
            Flash::error('Archivoscontratos not found');

            return redirect(route('archivoscontratos.index'));
        }

        $archivoscontratos = $this->archivoscontratosRepository->update($request->all(), $id);

        Flash::success('Archivoscontratos updated successfully.');

        return redirect(route('archivoscontratos.index'));
    }

    /**
     * Remove the specified Archivoscontratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archivoscontratos = $this->archivoscontratosRepository->findWithoutFail($id);

        if (empty($archivoscontratos)) {
            Flash::error('Archivoscontratos not found');

            return redirect(route('archivoscontratos.index'));
        }

        $this->archivoscontratosRepository->delete($id);

        Flash::success('Archivoscontratos deleted successfully.');

        return redirect(route('archivoscontratos.index'));
    }
}
