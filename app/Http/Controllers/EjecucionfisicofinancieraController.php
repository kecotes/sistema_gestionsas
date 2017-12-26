<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEjecucionfisicofinancieraRequest;
use App\Http\Requests\UpdateEjecucionfisicofinancieraRequest;
use App\Repositories\EjecucionfisicofinancieraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Input;
use Response;

use DB;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Models\Personas;
use App\Models\Pnaturales;
use App\Models\Polizas;
use App\Models\Contratos;
use App\Models\Actividadescontratos;
use App\Models\Tipoactividades;
use App\Models\Archivosactividadescontratos;

class EjecucionfisicofinancieraController extends AppBaseController
{
    /** @var  EjecucionfisicofinancieraRepository */
    private $ejecucionfisicofinancieraRepository;

    public function __construct(EjecucionfisicofinancieraRepository $ejecucionfisicofinancieraRepo)
    {
        $this->ejecucionfisicofinancieraRepository = $ejecucionfisicofinancieraRepo;
    }

    /**
     * Display a listing of the Ejecucionfisicofinanciera.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $idactividad=7;
        $query=trim($request->GET('searchText'));
  
        $ejecucionfisicofinancieras=DB::table('personas as p')
        ->join('contratos as c','p.id','=','c.idpersonas')
        ->join('actividadescontratos as ac','c.id','=','ac.idcontratos')
        ->join('tipoactividades as ta','ac.idtipoactividades','=','ta.id')
        ->select('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','ac.contenido','ac.titulo','ac.estado','ta.tipoactividad')
        ->where('c.id','LIKE','%'.$query.'%')
        ->where('ac.idtipoactividades','=',$idactividad)
       // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
        ->whereNull('c.deleted_at')
        ->orderBy('c.id','desc')
        ->groupBy('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','ac.contenido','ac.titulo','ac.estado','ta.tipoactividad')
        ->paginate(7);

        $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();
        return view('ejecucionfisicofinancieras.index',["ejecucionfisicofinancieras"=>$ejecucionfisicofinancieras,"contratos"=>$contratos,"searchText"=>$query]);

    }

    /**
     * Show the form for creating a new Ejecucionfisicofinanciera.
     *
     * @return Response
     */
    public function create()
    {
        return view('ejecucionfisicofinancieras.create');
    }

    /**
     * Store a newly created Ejecucionfisicofinanciera in storage.
     *
     * @param CreateEjecucionfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function store(CreateEjecucionfisicofinancieraRequest $request)
    {
        $input = $request->all();

        $ejecucionfisicofinanciera = $this->ejecucionfisicofinancieraRepository->create($input);

        Flash::success('Ejecucionfisicofinanciera saved successfully.');

        return redirect(route('ejecucionfisicofinancieras.index'));
    }

    /**
     * Display the specified Ejecucionfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ejecucionfisicofinanciera = $this->ejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($ejecucionfisicofinanciera)) {
            Flash::error('Ejecucionfisicofinanciera not found');

            return redirect(route('ejecucionfisicofinancieras.index'));
        }

        return view('ejecucionfisicofinancieras.show')->with('ejecucionfisicofinanciera', $ejecucionfisicofinanciera);
    }

    /**
     * Show the form for editing the specified Ejecucionfisicofinanciera.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ejecucionfisicofinanciera = $this->ejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($ejecucionfisicofinanciera)) {
            Flash::error('Ejecucionfisicofinanciera not found');

            return redirect(route('ejecucionfisicofinancieras.index'));
        }

        return view('ejecucionfisicofinancieras.edit')->with('ejecucionfisicofinanciera', $ejecucionfisicofinanciera);
    }

    /**
     * Update the specified Ejecucionfisicofinanciera in storage.
     *
     * @param  int              $id
     * @param UpdateEjecucionfisicofinancieraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEjecucionfisicofinancieraRequest $request)
    {
        $ejecucionfisicofinanciera = $this->ejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($ejecucionfisicofinanciera)) {
            Flash::error('Ejecucionfisicofinanciera not found');

            return redirect(route('ejecucionfisicofinancieras.index'));
        }

        $ejecucionfisicofinanciera = $this->ejecucionfisicofinancieraRepository->update($request->all(), $id);

        Flash::success('Ejecucionfisicofinanciera updated successfully.');

        return redirect(route('ejecucionfisicofinancieras.index'));
    }

    /**
     * Remove the specified Ejecucionfisicofinanciera from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ejecucionfisicofinanciera = $this->ejecucionfisicofinancieraRepository->findWithoutFail($id);

        if (empty($ejecucionfisicofinanciera)) {
            Flash::error('Ejecucionfisicofinanciera not found');

            return redirect(route('ejecucionfisicofinancieras.index'));
        }

        $this->ejecucionfisicofinancieraRepository->delete($id);

        Flash::success('Ejecucionfisicofinanciera deleted successfully.');

        return redirect(route('ejecucionfisicofinancieras.index'));
    }
}
