<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFuncionariosRequest;
use App\Http\Requests\UpdateFuncionariosRequest;
use App\Repositories\FuncionariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FuncionariosController extends AppBaseController
{
    /** @var  FuncionariosRepository */
    private $funcionariosRepository;

    public function __construct(FuncionariosRepository $funcionariosRepo)
    {
        $this->funcionariosRepository = $funcionariosRepo;
    }

    /**
     * Display a listing of the Funcionarios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->funcionariosRepository->pushCriteria(new RequestCriteria($request));
        $funcionarios = $this->funcionariosRepository->all();

        return view('funcionarios.index')
            ->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for creating a new Funcionarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created Funcionarios in storage.
     *
     * @param CreateFuncionariosRequest $request
     *
     * @return Response
     */
    public function store(CreateFuncionariosRequest $request)
    {
        $input = $request->all();

        $funcionarios = $this->funcionariosRepository->create($input);

        Flash::success('Funcionarios saved successfully.');

        return redirect(route('funcionarios.index'));
    }

    /**
     * Display the specified Funcionarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $funcionarios = $this->funcionariosRepository->findWithoutFail($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        return view('funcionarios.show')->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for editing the specified Funcionarios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $funcionarios = $this->funcionariosRepository->findWithoutFail($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        return view('funcionarios.edit')->with('funcionarios', $funcionarios);
    }

    /**
     * Update the specified Funcionarios in storage.
     *
     * @param  int              $id
     * @param UpdateFuncionariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFuncionariosRequest $request)
    {
        $funcionarios = $this->funcionariosRepository->findWithoutFail($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        $funcionarios = $this->funcionariosRepository->update($request->all(), $id);

        Flash::success('Funcionarios updated successfully.');

        return redirect(route('funcionarios.index'));
    }

    /**
     * Remove the specified Funcionarios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $funcionarios = $this->funcionariosRepository->findWithoutFail($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        $this->funcionariosRepository->delete($id);

        Flash::success('Funcionarios deleted successfully.');

        return redirect(route('funcionarios.index'));
    }
}
