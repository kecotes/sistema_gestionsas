<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcontratosRequest;
use App\Http\Requests\UpdateSubcontratosRequest;
use App\Repositories\SubcontratosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SubcontratosController extends AppBaseController
{
    /** @var  SubcontratosRepository */
    private $subcontratosRepository;

    public function __construct(SubcontratosRepository $subcontratosRepo)
    {
        $this->subcontratosRepository = $subcontratosRepo;
    }

    /**
     * Display a listing of the Subcontratos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subcontratosRepository->pushCriteria(new RequestCriteria($request));
        $subcontratos = $this->subcontratosRepository->all();

        return view('subcontratos.index')
            ->with('subcontratos', $subcontratos);
    }

    /**
     * Show the form for creating a new Subcontratos.
     *
     * @return Response
     */
    public function create()
    {
        return view('subcontratos.create');
    }

    /**
     * Store a newly created Subcontratos in storage.
     *
     * @param CreateSubcontratosRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcontratosRequest $request)
    {
        $input = $request->all();

        $subcontratos = $this->subcontratosRepository->create($input);

        Flash::success('Subcontratos saved successfully.');

        return redirect(route('subcontratos.index'));
    }

    /**
     * Display the specified Subcontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subcontratos = $this->subcontratosRepository->findWithoutFail($id);

        if (empty($subcontratos)) {
            Flash::error('Subcontratos not found');

            return redirect(route('subcontratos.index'));
        }

        return view('subcontratos.show')->with('subcontratos', $subcontratos);
    }

    /**
     * Show the form for editing the specified Subcontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subcontratos = $this->subcontratosRepository->findWithoutFail($id);

        if (empty($subcontratos)) {
            Flash::error('Subcontratos not found');

            return redirect(route('subcontratos.index'));
        }

        return view('subcontratos.edit')->with('subcontratos', $subcontratos);
    }

    /**
     * Update the specified Subcontratos in storage.
     *
     * @param  int              $id
     * @param UpdateSubcontratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcontratosRequest $request)
    {
        $subcontratos = $this->subcontratosRepository->findWithoutFail($id);

        if (empty($subcontratos)) {
            Flash::error('Subcontratos not found');

            return redirect(route('subcontratos.index'));
        }

        $subcontratos = $this->subcontratosRepository->update($request->all(), $id);

        Flash::success('Subcontratos updated successfully.');

        return redirect(route('subcontratos.index'));
    }

    /**
     * Remove the specified Subcontratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subcontratos = $this->subcontratosRepository->findWithoutFail($id);

        if (empty($subcontratos)) {
            Flash::error('Subcontratos not found');

            return redirect(route('subcontratos.index'));
        }

        $this->subcontratosRepository->delete($id);

        Flash::success('Subcontratos deleted successfully.');

        return redirect(route('subcontratos.index'));
    }
}
