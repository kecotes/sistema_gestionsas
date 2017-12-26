<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchivosactividadescontratosRequest;
use App\Http\Requests\UpdateArchivosactividadescontratosRequest;
use App\Repositories\ArchivosactividadescontratosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArchivosactividadescontratosController extends AppBaseController
{
    /** @var  ArchivosactividadescontratosRepository */
    private $archivosactividadescontratosRepository;

    public function __construct(ArchivosactividadescontratosRepository $archivosactividadescontratosRepo)
    {
        $this->archivosactividadescontratosRepository = $archivosactividadescontratosRepo;
    }

    /**
     * Display a listing of the Archivosactividadescontratos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archivosactividadescontratosRepository->pushCriteria(new RequestCriteria($request));
        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->all();

        return view('archivosactividadescontratos.index')
            ->with('archivosactividadescontratos', $archivosactividadescontratos);
    }

    /**
     * Show the form for creating a new Archivosactividadescontratos.
     *
     * @return Response
     */
    public function create()
    {
        return view('archivosactividadescontratos.create');
    }

    /**
     * Store a newly created Archivosactividadescontratos in storage.
     *
     * @param CreateArchivosactividadescontratosRequest $request
     *
     * @return Response
     */
    public function store(CreateArchivosactividadescontratosRequest $request)
    {
        $input = $request->all();

        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->create($input);

        Flash::success('Archivosactividadescontratos saved successfully.');

        return redirect(route('archivosactividadescontratos.index'));
    }

    /**
     * Display the specified Archivosactividadescontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->findWithoutFail($id);

        if (empty($archivosactividadescontratos)) {
            Flash::error('Archivosactividadescontratos not found');

            return redirect(route('archivosactividadescontratos.index'));
        }

        return view('archivosactividadescontratos.show')->with('archivosactividadescontratos', $archivosactividadescontratos);
    }

    /**
     * Show the form for editing the specified Archivosactividadescontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->findWithoutFail($id);

        if (empty($archivosactividadescontratos)) {
            Flash::error('Archivosactividadescontratos not found');

            return redirect(route('archivosactividadescontratos.index'));
        }

        return view('archivosactividadescontratos.edit')->with('archivosactividadescontratos', $archivosactividadescontratos);
    }

    /**
     * Update the specified Archivosactividadescontratos in storage.
     *
     * @param  int              $id
     * @param UpdateArchivosactividadescontratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchivosactividadescontratosRequest $request)
    {
        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->findWithoutFail($id);

        if (empty($archivosactividadescontratos)) {
            Flash::error('Archivosactividadescontratos not found');

            return redirect(route('archivosactividadescontratos.index'));
        }

        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->update($request->all(), $id);

        Flash::success('Archivosactividadescontratos updated successfully.');

        return redirect(route('archivosactividadescontratos.index'));
    }

    /**
     * Remove the specified Archivosactividadescontratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archivosactividadescontratos = $this->archivosactividadescontratosRepository->findWithoutFail($id);

        if (empty($archivosactividadescontratos)) {
            Flash::error('Archivosactividadescontratos not found');

            return redirect(route('archivosactividadescontratos.index'));
        }

        $this->archivosactividadescontratosRepository->delete($id);

        Flash::success('Archivosactividadescontratos deleted successfully.');

        return redirect(route('archivosactividadescontratos.index'));
    }
}
