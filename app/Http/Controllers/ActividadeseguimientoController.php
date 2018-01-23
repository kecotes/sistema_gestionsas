<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActividadeseguimientoRequest;
use App\Http\Requests\UpdateActividadeseguimientoRequest;
use App\Repositories\ActividadeseguimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ActividadeseguimientoController extends AppBaseController
{
    /** @var  ActividadeseguimientoRepository */
    private $actividadeseguimientoRepository;

    public function __construct(ActividadeseguimientoRepository $actividadeseguimientoRepo)
    {
        $this->actividadeseguimientoRepository = $actividadeseguimientoRepo;
    }

    /**
     * Display a listing of the Actividadeseguimiento.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->actividadeseguimientoRepository->pushCriteria(new RequestCriteria($request));
        $actividadeseguimientos = $this->actividadeseguimientoRepository->all();

        return view('actividadeseguimientos.index')
            ->with('actividadeseguimientos', $actividadeseguimientos);
    }

    /**
     * Show the form for creating a new Actividadeseguimiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('actividadeseguimientos.create');
    }

    /**
     * Store a newly created Actividadeseguimiento in storage.
     *
     * @param CreateActividadeseguimientoRequest $request
     *
     * @return Response
     */
    public function store(CreateActividadeseguimientoRequest $request)
    {
        $input = $request->all();

        $actividadeseguimiento = $this->actividadeseguimientoRepository->create($input);

        Flash::success('Actividadeseguimiento saved successfully.');

        return redirect(route('actividadeseguimientos.index'));
    }

    /**
     * Display the specified Actividadeseguimiento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actividadeseguimiento = $this->actividadeseguimientoRepository->findWithoutFail($id);

        if (empty($actividadeseguimiento)) {
            Flash::error('Actividadeseguimiento not found');

            return redirect(route('actividadeseguimientos.index'));
        }

        return view('actividadeseguimientos.show')->with('actividadeseguimiento', $actividadeseguimiento);
    }

    /**
     * Show the form for editing the specified Actividadeseguimiento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actividadeseguimiento = $this->actividadeseguimientoRepository->findWithoutFail($id);

        if (empty($actividadeseguimiento)) {
            Flash::error('Actividadeseguimiento not found');

            return redirect(route('actividadeseguimientos.index'));
        }

        return view('actividadeseguimientos.edit')->with('actividadeseguimiento', $actividadeseguimiento);
    }

    /**
     * Update the specified Actividadeseguimiento in storage.
     *
     * @param  int              $id
     * @param UpdateActividadeseguimientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActividadeseguimientoRequest $request)
    {
        $actividadeseguimiento = $this->actividadeseguimientoRepository->findWithoutFail($id);

        if (empty($actividadeseguimiento)) {
            Flash::error('Actividadeseguimiento not found');

            return redirect(route('actividadeseguimientos.index'));
        }

        $actividadeseguimiento = $this->actividadeseguimientoRepository->update($request->all(), $id);

        Flash::success('Actividadeseguimiento updated successfully.');

        return redirect(route('actividadeseguimientos.index'));
    }

    /**
     * Remove the specified Actividadeseguimiento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actividadeseguimiento = $this->actividadeseguimientoRepository->findWithoutFail($id);

        if (empty($actividadeseguimiento)) {
            Flash::error('Actividadeseguimiento not found');

            return redirect(route('actividadeseguimientos.index'));
        }

        $this->actividadeseguimientoRepository->delete($id);

        Flash::success('Actividadeseguimiento deleted successfully.');

        return redirect(route('actividadeseguimientos.index'));
    }
}
