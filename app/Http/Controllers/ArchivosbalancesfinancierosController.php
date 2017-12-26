<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArchivosbalancesfinancierosRequest;
use App\Http\Requests\UpdateArchivosbalancesfinancierosRequest;
use App\Repositories\ArchivosbalancesfinancierosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArchivosbalancesfinancierosController extends AppBaseController
{
    /** @var  ArchivosbalancesfinancierosRepository */
    private $archivosbalancesfinancierosRepository;

    public function __construct(ArchivosbalancesfinancierosRepository $archivosbalancesfinancierosRepo)
    {
        $this->archivosbalancesfinancierosRepository = $archivosbalancesfinancierosRepo;
    }

    /**
     * Display a listing of the Archivosbalancesfinancieros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->archivosbalancesfinancierosRepository->pushCriteria(new RequestCriteria($request));
        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->all();

        return view('archivosbalancesfinancieros.index')
            ->with('archivosbalancesfinancieros', $archivosbalancesfinancieros);
    }

    /**
     * Show the form for creating a new Archivosbalancesfinancieros.
     *
     * @return Response
     */
    public function create()
    {
        return view('archivosbalancesfinancieros.create');
    }

    /**
     * Store a newly created Archivosbalancesfinancieros in storage.
     *
     * @param CreateArchivosbalancesfinancierosRequest $request
     *
     * @return Response
     */
    public function store(CreateArchivosbalancesfinancierosRequest $request)
    {
        $input = $request->all();

        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->create($input);

        Flash::success('Archivosbalancesfinancieros saved successfully.');

        return redirect(route('archivosbalancesfinancieros.index'));
    }

    /**
     * Display the specified Archivosbalancesfinancieros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->findWithoutFail($id);

        if (empty($archivosbalancesfinancieros)) {
            Flash::error('Archivosbalancesfinancieros not found');

            return redirect(route('archivosbalancesfinancieros.index'));
        }

        return view('archivosbalancesfinancieros.show')->with('archivosbalancesfinancieros', $archivosbalancesfinancieros);
    }

    /**
     * Show the form for editing the specified Archivosbalancesfinancieros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->findWithoutFail($id);

        if (empty($archivosbalancesfinancieros)) {
            Flash::error('Archivosbalancesfinancieros not found');

            return redirect(route('archivosbalancesfinancieros.index'));
        }

        return view('archivosbalancesfinancieros.edit')->with('archivosbalancesfinancieros', $archivosbalancesfinancieros);
    }

    /**
     * Update the specified Archivosbalancesfinancieros in storage.
     *
     * @param  int              $id
     * @param UpdateArchivosbalancesfinancierosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArchivosbalancesfinancierosRequest $request)
    {
        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->findWithoutFail($id);

        if (empty($archivosbalancesfinancieros)) {
            Flash::error('Archivosbalancesfinancieros not found');

            return redirect(route('archivosbalancesfinancieros.index'));
        }

        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->update($request->all(), $id);

        Flash::success('Archivosbalancesfinancieros updated successfully.');

        return redirect(route('archivosbalancesfinancieros.index'));
    }

    /**
     * Remove the specified Archivosbalancesfinancieros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $archivosbalancesfinancieros = $this->archivosbalancesfinancierosRepository->findWithoutFail($id);

        if (empty($archivosbalancesfinancieros)) {
            Flash::error('Archivosbalancesfinancieros not found');

            return redirect(route('archivosbalancesfinancieros.index'));
        }

        $this->archivosbalancesfinancierosRepository->delete($id);

        Flash::success('Archivosbalancesfinancieros deleted successfully.');

        return redirect(route('archivosbalancesfinancieros.index'));
    }
}
