<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoactividadesRequest;
use App\Http\Requests\UpdateTipoactividadesRequest;
use App\Repositories\TipoactividadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoactividadesController extends AppBaseController
{
    /** @var  TipoactividadesRepository */
    private $tipoactividadesRepository;

    public function __construct(TipoactividadesRepository $tipoactividadesRepo)
    {
        $this->tipoactividadesRepository = $tipoactividadesRepo;
    }

    /**
     * Display a listing of the Tipoactividades.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoactividadesRepository->pushCriteria(new RequestCriteria($request));
        $tipoactividades = $this->tipoactividadesRepository->all();

        return view('tipoactividades.index')
            ->with('tipoactividades', $tipoactividades);
    }

    /**
     * Show the form for creating a new Tipoactividades.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipoactividades.create');
    }

    /**
     * Store a newly created Tipoactividades in storage.
     *
     * @param CreateTipoactividadesRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoactividadesRequest $request)
    {
        $input = $request->all();

        $tipoactividades = $this->tipoactividadesRepository->create($input);

        Flash::success('Tipoactividades saved successfully.');

        return redirect(route('tipoactividades.index'));
    }

    /**
     * Display the specified Tipoactividades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoactividades = $this->tipoactividadesRepository->findWithoutFail($id);

        if (empty($tipoactividades)) {
            Flash::error('Tipoactividades not found');

            return redirect(route('tipoactividades.index'));
        }

        return view('tipoactividades.show')->with('tipoactividades', $tipoactividades);
    }

    /**
     * Show the form for editing the specified Tipoactividades.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoactividades = $this->tipoactividadesRepository->findWithoutFail($id);

        if (empty($tipoactividades)) {
            Flash::error('Tipoactividades not found');

            return redirect(route('tipoactividades.index'));
        }

        return view('tipoactividades.edit')->with('tipoactividades', $tipoactividades);
    }

    /**
     * Update the specified Tipoactividades in storage.
     *
     * @param  int              $id
     * @param UpdateTipoactividadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoactividadesRequest $request)
    {
        $tipoactividades = $this->tipoactividadesRepository->findWithoutFail($id);

        if (empty($tipoactividades)) {
            Flash::error('Tipoactividades not found');

            return redirect(route('tipoactividades.index'));
        }

        $tipoactividades = $this->tipoactividadesRepository->update($request->all(), $id);

        Flash::success('Tipoactividades updated successfully.');

        return redirect(route('tipoactividades.index'));
    }

    /**
     * Remove the specified Tipoactividades from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoactividades = $this->tipoactividadesRepository->findWithoutFail($id);

        if (empty($tipoactividades)) {
            Flash::error('Tipoactividades not found');

            return redirect(route('tipoactividades.index'));
        }

        $this->tipoactividadesRepository->delete($id);

        Flash::success('Tipoactividades deleted successfully.');

        return redirect(route('tipoactividades.index'));
    }
}
