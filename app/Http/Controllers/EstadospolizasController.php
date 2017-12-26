<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadospolizasRequest;
use App\Http\Requests\UpdateEstadospolizasRequest;
use App\Repositories\EstadospolizasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

use App\Models\Personas;
use App\Models\Polizas;
use App\Models\Estadospolizas;
use App\Models\Contratos;
use App\Models\Novedadesfechas;

class EstadospolizasController extends AppBaseController
{
    /** @var  EstadospolizasRepository */
    private $estadospolizasRepository;

    public function __construct(EstadospolizasRepository $estadospolizasRepo)
    {
        $this->estadospolizasRepository = $estadospolizasRepo;
    }

    /**
     * Display a listing of the Estadospolizas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
      $query=trim($request->GET('searchText'));

      $estadospolizas=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('estadospolizas as ep','c.id','=','ep.idcontratos')
      ->select('ep.id','c.ncontrato','c.nocontrato','c.apodocontrato','ep.amparo','ep.vigenciadesde','ep.vigenciahasta','ep.valorasegurado','ep.estadopoliza','ep.idcontratos')
      ->where('c.id','LIKE','%'.$query.'%')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('ep.deleted_at')
      ->orderBy('ep.id','desc')
      ->groupBy('ep.id','c.ncontrato','c.nocontrato','c.apodocontrato','ep.amparo','ep.vigenciadesde','ep.vigenciahasta','ep.valorasegurado','ep.estadopoliza','ep.idcontratos')
      ->paginate(7);

      $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

      return view('estadospolizas.index',["estadospolizas"=>$estadospolizas,"contratos"=>$contratos,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new Estadospolizas.
     *
     * @return Response
     */
    public function create()
    {
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();
        $rutaarchivos="../storage/archivos/";
		return view("estadospolizas.create",["contratos"=>$contratos]);
    }

    /**
     * Store a newly created Estadospolizas in storage.
     *
     * @param CreateEstadospolizasRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadospolizasRequest $request)
    {
        $input = $request->all();

        $estadospolizas = $this->estadospolizasRepository->create($input);

        Flash::success('Estadospolizas saved successfully.');

        return redirect(route('estadospolizas.index'));
    }

    /**
     * Display the specified Estadospolizas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estadospolizas = $this->estadospolizasRepository->findWithoutFail($id);

        if (empty($estadospolizas)) {
            Flash::error('Estadospolizas not found');

            return redirect(route('estadospolizas.index'));
        }

        return view('estadospolizas.show')->with('estadospolizas', $estadospolizas);
    }

    /**
     * Show the form for editing the specified Estadospolizas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estadospolizas=DB::table('estadospolizas as ep')->where('ep.id','=',$id)->first();

        return view("estadospolizas.edit",["estadospolizas"=>$estadospolizas]);
    }

    /**
     * Update the specified Estadospolizas in storage.
     *
     * @param  int              $id
     * @param UpdateEstadospolizasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadospolizasRequest $request)
    {
        $estadospolizas = $this->estadospolizasRepository->findWithoutFail($id);

        if (empty($estadospolizas)) {
            Flash::error('Estadospolizas not found');

            return redirect(route('estadospolizas.index'));
        }

        $estadospolizas = $this->estadospolizasRepository->update($request->all(), $id);

        Flash::success('Estadospolizas updated successfully.');

        return redirect(route('estadospolizas.index'));
    }

    /**
     * Remove the specified Estadospolizas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estadospolizas = $this->estadospolizasRepository->findWithoutFail($id);

        if (empty($estadospolizas)) {
            Flash::error('Estadospolizas not found');

            return redirect(route('estadospolizas.index'));
        }

        $this->estadospolizasRepository->delete($id);

        Flash::success('Estadospolizas deleted successfully.');

        return redirect(route('estadospolizas.index'));
    }
}
