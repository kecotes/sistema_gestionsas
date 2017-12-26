<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTiposcontratosRequest;
use App\Http\Requests\UpdateTiposcontratosRequest;
use App\Repositories\TiposcontratosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TiposcontratosController extends AppBaseController
{
    /** @var  TiposcontratosRepository */
    private $tiposcontratosRepository;

    public function __construct(TiposcontratosRepository $tiposcontratosRepo)
    {
        $this->tiposcontratosRepository = $tiposcontratosRepo;
    }

    /**
     * Display a listing of the Tiposcontratos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tiposcontratosRepository->pushCriteria(new RequestCriteria($request));
        $tiposcontratos = $this->tiposcontratosRepository->all();

        return view('tiposcontratos.index')
            ->with('tiposcontratos', $tiposcontratos);
    }

    /**
     * Show the form for creating a new Tiposcontratos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tiposcontratos.create');
    }

    /**
     * Store a newly created Tiposcontratos in storage.
     *
     * @param CreateTiposcontratosRequest $request
     *
     * @return Response
     */
    public function store(CreateTiposcontratosRequest $request)
    {
        $input = $request->all();

        $tiposcontratos = $this->tiposcontratosRepository->create($input);

        Flash::success('Tipo de Contratos Guardado exitosamente.');

        return redirect(route('tiposcontratos.index'));
    }

    /**
     * Display the specified Tiposcontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tiposcontratos = $this->tiposcontratosRepository->findWithoutFail($id);

        if (empty($tiposcontratos)) {
            Flash::error('Tiposcontratos not found');

            return redirect(route('tiposcontratos.index'));
        }

        return view('tiposcontratos.show')->with('tiposcontratos', $tiposcontratos);
    }

    /**
     * Show the form for editing the specified Tiposcontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tiposcontratos = $this->tiposcontratosRepository->findWithoutFail($id);

        if (empty($tiposcontratos)) {
            Flash::error('Tiposcontratos not found');

            return redirect(route('tiposcontratos.index'));
        }

        return view('tiposcontratos.edit')->with('tiposcontratos', $tiposcontratos);
    }

    /**
     * Update the specified Tiposcontratos in storage.
     *
     * @param  int              $id
     * @param UpdateTiposcontratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTiposcontratosRequest $request)
    {
        $tiposcontratos = $this->tiposcontratosRepository->findWithoutFail($id);

        if (empty($tiposcontratos)) {
            Flash::error('Tiposcontratos not found');

            return redirect(route('tiposcontratos.index'));
        }

        $tiposcontratos = $this->tiposcontratosRepository->update($request->all(), $id);

        Flash::success('Tipo de Contratos editado exitosamente.');

        return redirect(route('tiposcontratos.index'));
    }

    /**
     * Remove the specified Tiposcontratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tiposcontratos = $this->tiposcontratosRepository->findWithoutFail($id);

        if (empty($tiposcontratos)) {
            Flash::error('Tiposcontratos not found');

            return redirect(route('tiposcontratos.index'));
        }

        $this->tiposcontratosRepository->delete($id);

        Flash::success('Tipo de Contratos borrado exitosamente.');

        return redirect(route('tiposcontratos.index'));
    }
}
