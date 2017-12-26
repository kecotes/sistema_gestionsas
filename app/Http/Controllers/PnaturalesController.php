<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePnaturalesRequest;
use App\Http\Requests\UpdatePnaturalesRequest;
use App\Repositories\PnaturalesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PnaturalesController extends AppBaseController
{
    /** @var  PnaturalesRepository */
    private $pnaturalesRepository;

    public function __construct(PnaturalesRepository $pnaturalesRepo)
    {
        $this->pnaturalesRepository = $pnaturalesRepo;
    }

    /**
     * Display a listing of the Pnaturales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pnaturalesRepository->pushCriteria(new RequestCriteria($request));
        $pnaturales = $this->pnaturalesRepository->all();

        return view('pnaturales.index')
            ->with('pnaturales', $pnaturales);
    }

    /**
     * Show the form for creating a new Pnaturales.
     *
     * @return Response
     */
    public function create()
    {
        return view('pnaturales.create');
    }

    /**
     * Store a newly created Pnaturales in storage.
     *
     * @param CreatePnaturalesRequest $request
     *
     * @return Response
     */
    public function store(CreatePnaturalesRequest $request)
    {
        $input = $request->all();

        $pnaturales = $this->pnaturalesRepository->create($input);

        Flash::success('Pnaturales saved successfully.');

        return redirect(route('pnaturales.index'));
    }

    /**
     * Display the specified Pnaturales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pnaturales = $this->pnaturalesRepository->findWithoutFail($id);

        if (empty($pnaturales)) {
            Flash::error('Pnaturales not found');

            return redirect(route('pnaturales.index'));
        }

        return view('pnaturales.show')->with('pnaturales', $pnaturales);
    }

    /**
     * Show the form for editing the specified Pnaturales.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pnaturales = $this->pnaturalesRepository->findWithoutFail($id);

        if (empty($pnaturales)) {
            Flash::error('Pnaturales not found');

            return redirect(route('pnaturales.index'));
        }

        return view('pnaturales.edit')->with('pnaturales', $pnaturales);
    }

    /**
     * Update the specified Pnaturales in storage.
     *
     * @param  int              $id
     * @param UpdatePnaturalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePnaturalesRequest $request)
    {
        $pnaturales = $this->pnaturalesRepository->findWithoutFail($id);

        if (empty($pnaturales)) {
            Flash::error('Pnaturales not found');

            return redirect(route('pnaturales.index'));
        }

        $pnaturales = $this->pnaturalesRepository->update($request->all(), $id);

        Flash::success('Pnaturales updated successfully.');

        return redirect(route('pnaturales.index'));
    }

    /**
     * Remove the specified Pnaturales from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pnaturales = $this->pnaturalesRepository->findWithoutFail($id);

        if (empty($pnaturales)) {
            Flash::error('Pnaturales not found');

            return redirect(route('pnaturales.index'));
        }

        $this->pnaturalesRepository->delete($id);

        Flash::success('Pnaturales deleted successfully.');

        return redirect(route('pnaturales.index'));
    }
}
