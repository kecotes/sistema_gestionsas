<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioscreadosRequest;
use App\Http\Requests\UpdateUsuarioscreadosRequest;
use App\Repositories\UsuarioscreadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsuarioscreadosController extends AppBaseController
{
    /** @var  UsuarioscreadosRepository */
    private $usuarioscreadosRepository;

    public function __construct(UsuarioscreadosRepository $usuarioscreadosRepo)
    {
        $this->usuarioscreadosRepository = $usuarioscreadosRepo;
    }

    /**
     * Display a listing of the Usuarioscreados.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usuarioscreadosRepository->pushCriteria(new RequestCriteria($request));
        $usuarioscreados = $this->usuarioscreadosRepository->all();

        return view('usuarioscreados.index')
            ->with('usuarioscreados', $usuarioscreados);
    }

    /**
     * Show the form for creating a new Usuarioscreados.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarioscreados.create');
    }

    /**
     * Store a newly created Usuarioscreados in storage.
     *
     * @param CreateUsuarioscreadosRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioscreadosRequest $request)
    {
        $input = $request->all();

        $usuarioscreados = $this->usuarioscreadosRepository->create($input);

        Flash::success('Usuarioscreados saved successfully.');

        return redirect(route('usuarioscreados.index'));
    }

    /**
     * Display the specified Usuarioscreados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarioscreados = $this->usuarioscreadosRepository->findWithoutFail($id);

        if (empty($usuarioscreados)) {
            Flash::error('Usuarioscreados not found');

            return redirect(route('usuarioscreados.index'));
        }

        return view('usuarioscreados.show')->with('usuarioscreados', $usuarioscreados);
    }

    /**
     * Show the form for editing the specified Usuarioscreados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarioscreados = $this->usuarioscreadosRepository->findWithoutFail($id);

        if (empty($usuarioscreados)) {
            Flash::error('Usuarioscreados not found');

            return redirect(route('usuarioscreados.index'));
        }

        return view('usuarioscreados.edit')->with('usuarioscreados', $usuarioscreados);
    }

    /**
     * Update the specified Usuarioscreados in storage.
     *
     * @param  int              $id
     * @param UpdateUsuarioscreadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioscreadosRequest $request)
    {
        $usuarioscreados = $this->usuarioscreadosRepository->findWithoutFail($id);

        if (empty($usuarioscreados)) {
            Flash::error('Usuarioscreados not found');

            return redirect(route('usuarioscreados.index'));
        }

        $usuarioscreados = $this->usuarioscreadosRepository->update($request->all(), $id);

        Flash::success('Usuarioscreados updated successfully.');

        return redirect(route('usuarioscreados.index'));
    }

    /**
     * Remove the specified Usuarioscreados from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarioscreados = $this->usuarioscreadosRepository->findWithoutFail($id);

        if (empty($usuarioscreados)) {
            Flash::error('Usuarioscreados not found');

            return redirect(route('usuarioscreados.index'));
        }

        $this->usuarioscreadosRepository->delete($id);

        Flash::success('Usuarioscreados deleted successfully.');

        return redirect(route('usuarioscreados.index'));
    }
}
