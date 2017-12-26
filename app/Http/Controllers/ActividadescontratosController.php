<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActividadescontratosRequest;
use App\Http\Requests\UpdateActividadescontratosRequest;
use App\Repositories\ActividadescontratosRepository;
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
use App\Models\Contratos;
use App\Models\Actividadescontratos;
use App\Models\Tipoactividades;
use App\Models\Archivosactividadescontratos;

class ActividadescontratosController extends AppBaseController
{
    /** @var  ActividadescontratosRepository */
    private $actividadescontratosRepository;

    public function __construct(ActividadescontratosRepository $actividadescontratosRepo)
    {
        $this->actividadescontratosRepository = $actividadescontratosRepo;
    }

    /**
     * Display a listing of the Actividadescontratos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        
      $query=trim($request->GET('searchText'));

      $actividadescontratos=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('actividadescontratos as ac','c.id','=','ac.idcontratos')
      ->join('tipoactividades as ta','ac.idtipoactividades','=','ta.id')
      ->join('archivosactividadescontratos as arch','c.id','=','ac.idcontratos')
      ->select('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','ac.contenido','ac.titulo','ac.estado','ta.tipoactividad','arch.archivo','arch.titulo','arch.descripcion')
      ->where('c.id','LIKE','%'.$query.'%')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('c.deleted_at')
      ->orderBy('c.id','desc')
      ->groupBy('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','ac.contenido','ac.titulo','ac.estado','ta.tipoactividad','arch.archivo','arch.titulo','arch.descripcion')
      ->paginate(7);

      $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();

      return view('actividadescontratos.index',["actividadescontratos"=>$actividadescontratos,"contratos"=>$contratos,"searchText"=>$query]);
    
    }
    
    /**
     * Show the form for creating a new Actividadescontratos.
     *
     * @return Response
     */
    public function create()
    {
        $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();
        $rutaarchivos="../storage/archivos/";
		return view("actividadescontratos.create",["contratos"=>$contratos,"rutaarchivos"=>$rutaarchivos]);
    }

    /**
     * Store a newly created Actividadescontratos in storage.
     *
     * @param CreateActividadescontratosRequest $request
     *
     * @return Response
     */
    public function store(CreateActividadescontratosRequest $request)
    {
        $input = $request->all();

        $actividadescontratos = $this->actividadescontratosRepository->create($input);

        Flash::success('Actividadescontratos saved successfully.');

        return redirect(route('actividadescontratos.index'));
    }

    /**
     * Display the specified Actividadescontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actividadescontratos = $this->actividadescontratosRepository->findWithoutFail($id);

        if (empty($actividadescontratos)) {
            Flash::error('Actividadescontratos not found');

            return redirect(route('actividadescontratos.index'));
        }

        return view('actividadescontratos.show')->with('actividadescontratos', $actividadescontratos);
    }

    /**
     * Show the form for editing the specified Actividadescontratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actividadescontratos = $this->actividadescontratosRepository->findWithoutFail($id);

        if (empty($actividadescontratos)) {
            Flash::error('Actividadescontratos not found');

            return redirect(route('actividadescontratos.index'));
        }

        return view('actividadescontratos.edit')->with('actividadescontratos', $actividadescontratos);
    }

    /**
     * Update the specified Actividadescontratos in storage.
     *
     * @param  int              $id
     * @param UpdateActividadescontratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActividadescontratosRequest $request)
    {
        $actividadescontratos = $this->actividadescontratosRepository->findWithoutFail($id);

        if (empty($actividadescontratos)) {
            Flash::error('Actividadescontratos not found');

            return redirect(route('actividadescontratos.index'));
        }

        $actividadescontratos = $this->actividadescontratosRepository->update($request->all(), $id);

        Flash::success('Actividadescontratos updated successfully.');

        return redirect(route('actividadescontratos.index'));
    }

    /**
     * Remove the specified Actividadescontratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actividadescontratos = $this->actividadescontratosRepository->findWithoutFail($id);

        if (empty($actividadescontratos)) {
            Flash::error('Actividadescontratos not found');

            return redirect(route('actividadescontratos.index'));
        }

        $this->actividadescontratosRepository->delete($id);

        Flash::success('Actividadescontratos deleted successfully.');

        return redirect(route('actividadescontratos.index'));
    }
}
