<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntidadescontratantesRequest;
use App\Http\Requests\UpdateEntidadescontratantesRequest;
use App\Repositories\EntidadescontratantesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EntidadescontratantesController extends AppBaseController
{
    /** @var  EntidadescontratantesRepository */
    private $entidadescontratantesRepository;

    public function __construct(EntidadescontratantesRepository $entidadescontratantesRepo)
    {
        $this->entidadescontratantesRepository = $entidadescontratantesRepo;
    }

    /**
     * Display a listing of the Entidadescontratantes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->entidadescontratantesRepository->pushCriteria(new RequestCriteria($request));
        $entidadescontratantes = $this->entidadescontratantesRepository->all();

        return view('entidadescontratantes.index')
            ->with('entidadescontratantes', $entidadescontratantes);
    }

    /**
     * Show the form for creating a new Entidadescontratantes.
     *
     * @return Response
     */
    public function create()
    {
        return view('entidadescontratantes.create');
    }

    /**
     * Store a newly created Entidadescontratantes in storage.
     *
     * @param CreateEntidadescontratantesRequest $request
     *
     * @return Response
     */
    public function store(CreateEntidadescontratantesRequest $request)
    {
        $input = $request->all();

        $entidadescontratantes = $this->entidadescontratantesRepository->create($input);

        Flash::success('Entidad contratante guardada exitosamente.');

        return redirect(route('entidadescontratantes.index'));
    }

    /**
     * Display the specified Entidadescontratantes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entidadescontratantes = $this->entidadescontratantesRepository->findWithoutFail($id);

        if (empty($entidadescontratantes)) {
            Flash::error('Entidadescontratantes not found');

            return redirect(route('entidadescontratantes.index'));
        }

        return view('entidadescontratantes.show')->with('entidadescontratantes', $entidadescontratantes);
    }

    /**
     * Show the form for editing the specified Entidadescontratantes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entidadescontratantes = $this->entidadescontratantesRepository->findWithoutFail($id);

        if (empty($entidadescontratantes)) {
            Flash::error('Entidadescontratantes not found');

            return redirect(route('entidadescontratantes.index'));
        }

        return view('entidadescontratantes.edit')->with('entidadescontratantes', $entidadescontratantes);
    }

    /**
     * Update the specified Entidadescontratantes in storage.
     *
     * @param  int              $id
     * @param UpdateEntidadescontratantesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntidadescontratantesRequest $request)
    {
        $entidadescontratantes = $this->entidadescontratantesRepository->findWithoutFail($id);

        if (empty($entidadescontratantes)) {
            Flash::error('Entidadescontratantes not found');

            return redirect(route('entidadescontratantes.index'));
        }

        $entidadescontratantes = $this->entidadescontratantesRepository->update($request->all(), $id);

        Flash::success('Entidad contratantes editada exitosamente.');

        return redirect(route('entidadescontratantes.index'));
    }

    /**
     * Remove the specified Entidadescontratantes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entidadescontratantes = $this->entidadescontratantesRepository->findWithoutFail($id);

        if (empty($entidadescontratantes)) {
            Flash::error('Entidadescontratantes not found');

            return redirect(route('entidadescontratantes.index'));
        }

        $this->entidadescontratantesRepository->delete($id);

        Flash::success('Entidad contratantes eliminada exitosamente.');

        return redirect(route('entidadescontratantes.index'));
    }
}
