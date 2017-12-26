<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioscontratadosRequest;
use App\Http\Requests\UpdateUsuarioscontratadosRequest;
use App\Repositories\UsuarioscontratadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

use App\Models\Personas;
use App\Models\Usuarioscontratados;
use App\User;
use App\Models\Usuarioscreados;
use App\Models\Contratos;

class UsuarioscontratadosController extends AppBaseController
{
    /** @var  UsuarioscontratadosRepository */
    private $usuarioscontratadosRepository;

    public function __construct(UsuarioscontratadosRepository $usuarioscontratadosRepo)
    {
        $this->usuarioscontratadosRepository = $usuarioscontratadosRepo;
    }

    /**
     * Display a listing of the Usuarioscontratados.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $personas = DB::table('users as u')
        ->join('usuarioscreados as uc','u.id','=','uc.idusers')
        ->join('personas as p','uc.idpersonas','=','p.id')
        ->join('usuarioscontratados as usc','usc.idpersonas','=','p.id')
        ->select('p.id','u.name')->get();

        $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();
        
        $this->usuarioscontratadosRepository->pushCriteria(new RequestCriteria($request));
        $usuarioscontratados = $this->usuarioscontratadosRepository->all();

        return view('usuarioscontratados.index',["usuarioscontratados"=>$usuarioscontratados,"personas"=>$personas,"contratos"=>$contratos]);
    }

    /**
     * Show the form for creating a new Usuarioscontratados.
     *
     * @return Response
     */
    public function create()
    {
        $personas=DB::table('users as u')
        ->join('usuarioscreados as uc','u.id','=','uc.idusers')
        ->join('personas as p','uc.idpersonas','=','p.id')
        ->select('p.id','u.name')->whereNull('p.deleted_at')->get();

        $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();
  
      return view('usuarioscontratados.create',["personas"=>$personas,"contratos"=>$contratos]);
    }

    /**
     * Store a newly created Usuarioscontratados in storage.
     *
     * @param CreateUsuarioscontratadosRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioscontratadosRequest $request)
    {
        $input = $request->all();

        $usuarioscontratados = $this->usuarioscontratadosRepository->create($input);

        Flash::success('Usuarioscontratados saved successfully.');

        return redirect(route('usuarioscontratados.index'));
    }

    /**
     * Display the specified Usuarioscontratados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarioscontratados = $this->usuarioscontratadosRepository->findWithoutFail($id);

        if (empty($usuarioscontratados)) {
            Flash::error('Usuarioscontratados not found');

            return redirect(route('usuarioscontratados.index'));
        }

        return view('usuarioscontratados.show')->with('usuarioscontratados', $usuarioscontratados);
    }

    /**
     * Show the form for editing the specified Usuarioscontratados.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarioscontratados = $this->usuarioscontratadosRepository->findWithoutFail($id);

        $personas=DB::table('users as u')
        ->join('usuarioscreados as uc','u.id','=','uc.idusers')
        ->join('personas as p','uc.idpersonas','=','p.id')
        ->select('p.id','u.name')->whereNull('p.deleted_at')->get();

        $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();
  
      return view('usuarioscontratados.create',["usuarioscontratados"=>$usuarioscontratados,"personas"=>$personas,"contratos"=>$contratos]);
    }

    /**
     * Update the specified Usuarioscontratados in storage.
     *
     * @param  int              $id
     * @param UpdateUsuarioscontratadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioscontratadosRequest $request)
    {
        $usuarioscontratados = $this->usuarioscontratadosRepository->findWithoutFail($id);

        if (empty($usuarioscontratados)) {
            Flash::error('Usuarioscontratados not found');

            return redirect(route('usuarioscontratados.index'));
        }

        $usuarioscontratados = $this->usuarioscontratadosRepository->update($request->all(), $id);

        Flash::success('Usuarioscontratados updated successfully.');

        return redirect(route('usuarioscontratados.index'));
    }

    /**
     * Remove the specified Usuarioscontratados from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarioscontratados = $this->usuarioscontratadosRepository->findWithoutFail($id);

        if (empty($usuarioscontratados)) {
            Flash::error('Usuarioscontratados not found');

            return redirect(route('usuarioscontratados.index'));
        }

        $this->usuarioscontratadosRepository->delete($id);

        Flash::success('Usuarioscontratados deleted successfully.');

        return redirect(route('usuarioscontratados.index'));
    }
}
