<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratosprueRequest;
use App\Http\Requests\UpdateContratosprueRequest;
use App\Repositories\ContratosprueRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContratosprueController extends AppBaseController
{
    /** @var  ContratosprueRepository */
    private $contratosprueRepository;

    public function __construct(ContratosprueRepository $contratosprueRepo)
    {
        $this->contratosprueRepository = $contratosprueRepo;
    }

    /**
     * Display a listing of the Contratosprue.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contratosprueRepository->pushCriteria(new RequestCriteria($request));
        $contratosprues = $this->contratosprueRepository->all();

        return view('contratosprues.index')
            ->with('contratosprues', $contratosprues);
    }

    /**
     * Show the form for creating a new Contratosprue.
     *
     * @return Response
     */
    public function create()
    {
        return view('contratosprues.create');
    }

    /**
     * Store a newly created Contratosprue in storage.
     *
     * @param CreateContratosprueRequest $request
     *
     * @return Response
     */
    public function store(CreateContratosprueRequest $request)
    {
        $input = $request->all();

        $contratosprue = $this->contratosprueRepository->create($input);

        Flash::success('Contratosprue saved successfully.');

        return redirect(route('contratosprues.index'));
    }

    /**
     * Display the specified Contratosprue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contratosprue = $this->contratosprueRepository->findWithoutFail($id);

        if (empty($contratosprue)) {
            Flash::error('Contratosprue not found');

            return redirect(route('contratosprues.index'));
        }

        return view('contratosprues.show')->with('contratosprue', $contratosprue);
    }

    /**
     * Show the form for editing the specified Contratosprue.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contratosprue = $this->contratosprueRepository->findWithoutFail($id);

        if (empty($contratosprue)) {
            Flash::error('Contratosprue not found');

            return redirect(route('contratosprues.index'));
        }

        return view('contratosprues.edit')->with('contratosprue', $contratosprue);
    }

    /**
     * Update the specified Contratosprue in storage.
     *
     * @param  int              $id
     * @param UpdateContratosprueRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratosprueRequest $request)
    {
        $contratosprue = $this->contratosprueRepository->findWithoutFail($id);

        if (empty($contratosprue)) {
            Flash::error('Contratosprue not found');

            return redirect(route('contratosprues.index'));
        }

        $contratosprue = $this->contratosprueRepository->update($request->all(), $id);

        Flash::success('Contratosprue updated successfully.');

        return redirect(route('contratosprues.index'));
    }

    /**
     * Remove the specified Contratosprue from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratosprue = $this->contratosprueRepository->findWithoutFail($id);

        if (empty($contratosprue)) {
            Flash::error('Contratosprue not found');

            return redirect(route('contratosprues.index'));
        }

        $this->contratosprueRepository->delete($id);

        Flash::success('Contratosprue deleted successfully.');

        return redirect(route('contratosprues.index'));
    }
}
