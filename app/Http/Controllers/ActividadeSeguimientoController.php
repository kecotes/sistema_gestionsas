<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActividadescontratosRequest;
use App\Http\Requests\UpdateActividadescontratosRequest;
use App\Repositories\ActividadescontratosRepository;
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
use App\User;
use App\Models\Pnaturales;
use App\Models\Contratos;
use App\Models\Actividadescontratos;
use App\Models\Tipoactividades;
use App\Models\Archivosactividadescontratos;
use Illuminate\Support\Facades\Auth;

class ActividadeSeguimientoController extends Controller
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
      // Obtiene el objeto del Usuario Autenticado
      $users = User::all();
    
      // Obtiene el ID del Usuario Autenticado
      $idusers = Auth::id();

      $idactividad=3;
      $query=trim($request->GET('searchText'));

      $actividadeseguimiento=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('actividadescontratos as ac','c.id','=','ac.idcontratos')
      ->join('tipoactividades as ta','ac.idtipoactividades','=','ta.id')
      ->join('archivosactividadescontratos as aac','ac.id','=','aac.idactividadescontratos')
      ->select('ac.id','aac.id as idejecuarch','c.ncontrato','c.nocontrato','c.apodocontrato','c.idpersonas','ta.tipoactividad','ac.created_at','aac.titulo','aac.descripcion','ac.iduser')
      ->where('c.id','LIKE','%'.$query.'%')
      ->where('ac.idtipoactividades','=',$idactividad)
      ->whereNull('ac.deleted_at')
      ->orderBy('ac.id','desc')
      ->paginate(7);

      //Consulta para los Residentes - Solo pemite ver contratos el contrato de cada residente
      $contratosRdt=DB::table('users as u')
      ->join('usuarioscreados as uc','u.id','=','uc.idusers')
      ->join('personas as p','uc.idpersonas','=','p.id')
      ->join('usuarioscontratados as usc','usc.idpersonas','=','p.id')
      ->join('contratos as c','c.id','=','usc.idcontratos')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id','usc.idcontratos')->where('u.id','=',$idusers)->whereNull('c.deleted_at')->get();

      //Consulta para los Administradores - Permite ver todos los archivos
      $contratosADM=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();

      $contratosh1=DB::table('contratos as c')->select('c.id','c.nocontrato')->where('c.id','LIKE','%'.$query.'%')->whereNull('deleted_at')->first();

      //Descarga de archivos, obtiene el ID del contrato que el residente tiene asignado y dio click
      //Luego se conulta por inenr Join que archivo esta para descargar y se descarga el formato
      $contratoid=DB::table('users as u')
      ->join('usuarioscreados as uc','u.id','=','uc.idusers')
      ->join('personas as p','uc.idpersonas','=','p.id')
      ->join('usuarioscontratados as usc','usc.idpersonas','=','p.id')
      ->join('contratos as c','c.id','=','usc.idcontratos')->select('c.id','c.created_at')->where('u.id','=',$idusers)->whereNull('c.deleted_at')->latest()->first();
      return view('actividadeseguimiento.index',["actividadeseguimiento"=>$actividadeseguimiento,"contratosADM"=>$contratosADM,"contratosRdt"=>$contratosRdt,"contratoid"=>$contratoid,"searchText"=>$query,"contratosh1"=>$contratosh1,"idusers"=>$idusers,"users"=>$users]);
    }
    
    /**
     * Show the form for creating a new Actividadescontratos.
     *
     * @return Response
     */
    public function create()
    {
        // Obtiene el ID del Usuario Autenticado
        $idusers = Auth::id();
        
        //Consulta para los Residentes - Solo pemite ver contratos el contrato de cada residente
        $contratosRdt=DB::table('users as u')
        ->join('usuarioscreados as uc','u.id','=','uc.idusers')
        ->join('personas as p','uc.idpersonas','=','p.id')
        ->join('usuarioscontratados as usc','usc.idpersonas','=','p.id')
        ->join('contratos as c','c.id','=','usc.idcontratos')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->where('u.id','=',$idusers)->whereNull('c.deleted_at')->get();

        //Consulta para los Administradores - Permite ver todos los archivos
        $contratosADM=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();

        $residentes=DB::table('personas as p') ->join('pnaturales as pn','p.id','=','pn.idpersonas')->select('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->groupBy('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->whereNull('p.deleted_at')->get();        
        $idactividad=3;
		return view("actividadeseguimiento.create",["contratosRdt"=>$contratosRdt,"contratosADM"=>$contratosADM,"idactividad"=>$idactividad,"residentes"=>$residentes]);
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
        $archivo=Input::file('file');
        
        if($archivo != null) {
        
        $nombre=$request->get("name");
    
            $actividadescontratos=new actividadescontratos();
            $actividadescontratos->idcontratos=$request->get('idcontratos');
            $actividadescontratos->idtipoactividades=$request->get('idactividad');
            $actividadescontratos->iduser=$request->get('idresidentes');
            $actividadescontratos->save();

            $archivosactividadescontratos = new archivosactividadescontratos();
                $carpeta="5";
                    $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                    $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
                $archivosactividadescontratos->archivo=$ruta;
    
            $archivosactividadescontratos->titulo=$request->get('titulo');
            
            if(Auth::user()->tipoUsuario == '1'){
                $archivosactividadescontratos->descripcion=$request->get('descripcionArch');
            }else{
                $archivosactividadescontratos->descripcion=$request->get('contenido');
            }

            $archivosactividadescontratos->idactividadescontratos=$actividadescontratos->id;
            $archivosactividadescontratos->save();

        } else {
            $actividadescontratos=new actividadescontratos();
            $actividadescontratos->idcontratos=$request->get('idcontratos');
            $actividadescontratos->idtipoactividades=$request->get('idactividad');
            $actividadescontratos->iduser=$request->get('idresidentes');
            $actividadescontratos->save();

            $archivosactividadescontratos = new archivosactividadescontratos();
            $archivosactividadescontratos->archivo="";
            $archivosactividadescontratos->titulo=$request->get('titulo');
            if(Auth::user()->tipoUsuario == '1'){
                $archivosactividadescontratos->descripcion=$request->get('descripcionArch');
            }else{
                $archivosactividadescontratos->descripcion=$request->get('contenido');
            }
            $archivosactividadescontratos->idactividadescontratos=$actividadescontratos->id;
            $archivosactividadescontratos->save();
        }
    
            Flash::success('Control de Equipos Agregado Satisfatoriamente.');
    
            return redirect(route('actividadeseguimiento.index'));
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
        $actividadescontratos=DB::table('actividadescontratos as ac')
        ->join('archivosactividadescontratos as aac','ac.id','=','aac.idactividadescontratos')->where('ac.id','=',$id)->first();

        if (empty($actividadescontratos)) {
            Flash::error('Actividadescontratos not found');

            return redirect(route('controlequipos.index'));
        }

        return view('actividadeseguimiento.show')->with('actividadescontratos', $actividadescontratos);
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
        // Obtiene el ID del Usuario Autenticado
        $idusers = Auth::id();


        $actividadeseguimiento=DB::table('actividadescontratos as ac')
        ->join('archivosactividadescontratos as aac','ac.id','=','aac.idactividadescontratos')->select('ac.id','aac.archivo','aac.titulo','aac.descripcion','ac.idcontratos')->where('ac.id','=',$id)->first();

                //Consulta para los Residentes - Solo pemite ver contratos el contrato de cada residente
                $contratosRdt=DB::table('users as u')
                ->join('usuarioscreados as uc','u.id','=','uc.idusers')
                ->join('personas as p','uc.idpersonas','=','p.id')
                ->join('usuarioscontratados as usc','usc.idpersonas','=','p.id')
                ->join('contratos as c','c.id','=','usc.idcontratos')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id','usc.idcontratos')->where('u.id','=',$idusers)->whereNull('c.deleted_at')->get();
        
                //Consulta para los Administradores - Permite ver todos los archivos
                $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.*')->whereNull('deleted_at')->get();

        $residentes=DB::table('personas as p') ->join('pnaturales as pn','p.id','=','pn.idpersonas')->select('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->groupBy('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->whereNull('p.deleted_at')->get();        

		return view("actividadeseguimiento.edit",["actividadeseguimiento"=>$actividadeseguimiento,"contratosRdt"=>$contratosRdt,"contratos"=>$contratos,"idusers"=>$idusers,"residentes"=>$residentes]);

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
        $archivo=Input::file('file');

        if($archivo != null) {
            $actividadescontratos= actividadescontratos::findOrFail($id);
            $actividadescontratos->idcontratos=$request->get('idcontratos');
            $actividadescontratos->idtipoactividades=$request->get('idactividad');
            $actividadescontratos->iduser=$request->get('idresidentes');
            $actividadescontratos->update();

            $archivosactividadescontratos = archivosactividadescontratos::where('idactividadescontratos', $actividadescontratos->id)->first();
                $carpeta="5";
                    $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                    $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
                $archivosactividadescontratos->archivo=$ruta;

            $archivosactividadescontratos->titulo=$request->get('titulo');
            $archivosactividadescontratos->descripcion=$request->get('descripcion');
            $archivosactividadescontratos->idactividadescontratos=$actividadescontratos->id;
            $archivosactividadescontratos->update();
        } else {
            $actividadescontratos= actividadescontratos::findOrFail($id);
            $actividadescontratos->idcontratos=$request->get('idcontratos');
            $actividadescontratos->idtipoactividades=$request->get('idactividad');
            $actividadescontratos->iduser=$request->get('idresidentes');
            $actividadescontratos->update();

            $archivosactividadescontratos = archivosactividadescontratos::where('idactividadescontratos', $actividadescontratos->id)->first();
            $archivosactividadescontratos->titulo=$request->get('titulo');
            $archivosactividadescontratos->descripcion=$request->get('descripcion');
            $archivosactividadescontratos->idactividadescontratos=$actividadescontratos->id;
            $archivosactividadescontratos->update();
        }

        Flash::success('Control de Equipos actualizada.');

        return redirect(route('actividadeseguimiento.index'));
    }

    public function descargarAsV($id){
        $contrate=DB::table('actividadescontratos as ac')
        ->join('archivosactividadescontratos as aac','ac.id','=','aac.idactividadescontratos')
        ->where([
            ['ac.idtipoactividades', '=', '3'],
            ['aac.descripcion', '=', 'admin'],
            ['ac.idcontratos', '=', $id],
        ])->first();
        $rutaarchivo= "storage/".$contrate->archivo;
        return response()->download($rutaarchivo);
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

            return redirect(route('controlequipos.index'));
        }

        $this->actividadescontratosRepository->delete($id);

        Flash::success('Control Equipo Eliminado.');

        return redirect(route('actividadeseguimiento.index'));
    }
}

