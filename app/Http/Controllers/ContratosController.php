<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContratosRequest;
use App\Http\Requests\UpdateContratosRequest;
use App\Repositories\ContratosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Input;
use Response;

use  App\Models\contratos;
use App\Models\Tiposcontratos;
use App\Models\Entidadescontratantes;
use App\Models\Pnaturales;
use App\Models\Personas;
use App\Models\Pjuridicas;
use App\Models\Unionestemporales;
use App\Models\Archivoscontratos;
use App\Models\Novedadesfechas;
use App\Models\Balancesfinancieros;
use App\Models\Archivosbalancesfinancieros;

use DB;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class ContratosController extends AppBaseController
{
    /** @var  ContratosRepository */
    private $contratosRepository;

    public function __construct(ContratosRepository $contratosRepo)
    {
        $this->contratosRepository = $contratosRepo;
    }

    /**
     * Display a listing of the Contratos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
    // Obtiene el ID del Usuario Autenticado
    $idusers = Auth::id();
        
     $query=trim($request->GET('searchText'));

      $contratos=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('entidadescontratantes as ec','ec.id','=','c.identidadescontratantes')
      ->join('tiposcontratos as tc','tc.id','=','c.idtiposcontratos')
      ->select('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','c.objetocontrato','valorcontrato','ec.nombre','tc.nombre')
      ->where('c.ncontrato','LIKE','%'.$query.'%')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('c.deleted_at')
      ->orderBy('c.id','desc')
      ->paginate(7);

      $contratosRdt=DB::table('users as u')
        ->join('usuarioscreados as uc','u.id','=','uc.idusers')
        ->join('personas as p','uc.idpersonas','=','p.id')
        ->join('usuarioscontratados as usc','usc.idpersonas','=','p.id')
        ->join('contratos as c','c.id','=','usc.idcontratos')->select('c.id','c.*')->where('u.id','=',$idusers)->whereNull('c.deleted_at')->get();

      return view('contratos.index',["contratos"=>$contratos,"searchText"=>$query,"contratosRdt"=>$contratosRdt]);
    }

    /**
     * Show the form for creating a new Contratos.
     *
     * @return Response
     */
    public function create()
    {
        $residentes=DB::table('users as u')->join('usuarioscreados as uc','u.id','=','uc.idusers')
        ->join('personas as p','uc.idpersonas','=','p.id')->join('pnaturales as pn','p.id','=','pn.idpersonas')->select('u.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->groupBy('u.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->whereNull('p.deleted_at')->get();
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();
		$entidadescontratantes=DB::table('entidadescontratantes')->whereNull('deleted_at')->get();
		$tiposcontratos=DB::table('tiposcontratos')->whereNull('deleted_at')->get();
        $contratista=DB::table('personas as p')
        ->join('pjuridicas as pj','p.id','=','pj.idpersonas')->where('pj.tipopjuridica','=','contratista')->orWhere('pj.tipopjuridica','=','unionestemporales')->whereNull('p.deleted_at')->get();
        $representante=DB::table('personas as p')
        ->join('pjuridicas as pj','p.id','=','pj.idpersonas')->where('pj.tipopjuridica','=','representante')->whereNull('p.deleted_at')->get();
        $unionestemporales=DB::table('personas as p')
        ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
        ->join('numuniones as nu','pj.id','=','nu.idpjuridicas')
        ->join('unionestemporales as ut','nu.idunionestemporales','=','ut.id')->where('pj.id','=','ut.idpjuridicas')->whereNull('p.deleted_at')->get();
        $rutasarchivos="../storage/archivos/";
		return view("contratos.create",["contratos"=>$contratos, "entidadescontratantes"=>$entidadescontratantes,"tiposcontratos"=>$tiposcontratos,"residentes"=>$residentes,"contratista"=>$contratista, "unionestemporales"=>$unionestemporales, "representante"=>$representante,"rutasarchivos"=>$rutasarchivos]);
    }

    /**
     * Store a newly created Contratos in storage.
     *
     * @param CreateContratosRequest $request
     *
     * @return Response
     */
    public function store(CreateContratosRequest $request)
    {
        $archivo=Input::file('file');

        $contratos=new contratos();
        $contratos->objetocontrato=$request->get('objetocontrato');
        $contratos->nocontrato=$request->get('nocontrato');
        $contratos->ncontrato=$request->get('ncontrato');
        $contratos->apodocontrato=$request->get('apodocontrato');
        $contratos->valorcontratol=$request->get('valorcontratol');
        $contratos->valorcontrato=$request->get('valorcontrato');
        $contratos->valoranticipol=$request->get('valoranticipol');
        $contratos->valoranticipo=$request->get('valoranticipo');
        $contratos->porcentajeanticipo=$request->get('porcentajeanticipo');
        $contratos->formapago=$request->get('formapago');
        $contratos->valoradicional=$request->get('valoradicional');
        $contratos->valoranticipoadicional=$request->get('valoranticipoadicional');
        $contratos->plazoinicial=$request->get('plazoinicial');
        $contratos->fechainiciacion=$request->get('fechainiciacion');
        $contratos->fechafinalizacion=$request->get('fechafinalizacion');
        $contratos->estado=$request->get('estado');
        $contratos->identidadescontratantes=$request->get('identidadescontratantes');
        $contratos->idtiposcontratos=$request->get('idtiposcontratos');
        $contratos->idpersonas=$request->get('idresidentes');
        $contratos->idcontratistas=$request->get('idcontratista');
        $contratos->idrepresentante=$request->get('representante');
        $contratos->save();

        if($archivo != null) {
            $carpeta = $request->input("tipoarchivo");
            if($carpeta == "15"){
                $nombre = "Copia del Contrato";
            }elseif($carpeta == "16"){
                $nombre = "Acta de Inicio";
            }elseif($carpeta == "17"){
                $nombre = "CDP";
            }else{
                $nombre = $request->input("tipoarchivo");
            }

            $archivoscontratos = new archivoscontratos();
                $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
            $archivoscontratos->archivo=$ruta;

            $archivoscontratos->titulo="";
            $archivoscontratos->descripcion="";
            $archivoscontratos->tipo=$nombre;
            $archivoscontratos->idcontratos=$contratos->id;
            $archivoscontratos->save();

        } 

        $novedadesfechas=new novedadesfechas();
        $novedadesfechas->plazoinicial=$request->get('plazoinicial');
        $novedadesfechas->fechainiciacion=$request->get('fechainiciacion');
        $novedadesfechas->fechafinalizacion=$request->get('fechafinalizacion');
        $novedadesfechas->fechasuspension="2000-12-31";
        $novedadesfechas->fechareinicio="2000-12-31";
        $novedadesfechas->adicciontiempo="0";
        $novedadesfechas->fechafinalizacionadiccion="2000-12-31";
        $novedadesfechas->agregar="0";
        $novedadesfechas->estado="En ejecucion";
        $novedadesfechas->idcontratos=$contratos->id;
        $novedadesfechas->save();

        $pendiente = $request->get('valorcontrato') - $request->get('valoranticipo');
        $balancesfinancieros=new balancesfinancieros();
        $balancesfinancieros->actaparcial=$request->get('valoranticipo');
        $balancesfinancieros->pendientepagar=$pendiente;
        $balancesfinancieros->estado="Acta parcial Inicial";
        $balancesfinancieros->idcontratos=$contratos->id;  
        $balancesfinancieros->save();

        $archivosbalancesfinancieros = new archivosbalancesfinancieros();
        $archivosbalancesfinancieros->archivo="";
        $archivosbalancesfinancieros->titulo="";
        $archivosbalancesfinancieros->descripcion="";
        $archivosbalancesfinancieros->idbalancesfinancieros=$balancesfinancieros->id;
        $archivosbalancesfinancieros->save();

        Flash::success('Contrato Agregado Satisfactoriamente.');


           return redirect(route('contratos.index'));
  
    }


    /**
     * Display the specified Contratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
      //Contratos
      $contratos=DB::table('contratos')->where('id','=',$id)->first();  
      $rutasarchivos="../storage/archivos/";
      $archivoscontratos=DB::table('archivoscontratos')->where('idcontratos','=',$id)->get();
      $novedadesfechas=DB::table('novedadesfechas')->where('idcontratos','=',$id)->get();
      $i=1;
      
      //Polizas
      $polizas=DB::table('polizas')->where('idcontratos','=',$id)->whereNull('deleted_at')->get();
      $estadospolizas=DB::table('estadospolizas')->where('idcontratos','=',$id)->whereNull('deleted_at')->get();

      //Balancesfinancieros
      $balancesfinancieros=DB::table('balancesfinancieros as bf')
      ->join('archivosbalancesfinancieros as abf','bf.id','=','abf.idbalancesfinancieros')
      ->select('bf.id','abf.id as idarchbalances','bf.actaparcial','bf.estado','bf.pendientepagar')
      ->where('idcontratos','=',$id)->whereNull('bf.deleted_at')->get();

      //Detalles
      $tiposcontratos=DB::table('tiposcontratos as tc')
      ->join('contratos as c','tc.id','=','c.idtiposcontratos')
      ->select('*')
      ->where('c.id','=',$id)
      ->whereNull('tc.deleted_at')
      ->first();  

      //Entidades Contratantes
      $entidadescontratantes=DB::table('entidadescontratantes as ec')
      ->join('contratos as c','ec.id','=','c.identidadescontratantes')
      ->select('*')
      ->where('c.id','=',$id)
      ->whereNull('ec.deleted_at')
      ->first();  

      //Residentes
      $residentes=DB::table('personas as p')
      ->join('pnaturales as pn','p.id','=','pn.idpersonas')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->select('*')
      ->where('c.id','=',$id)
      ->first();  

		return view("contratos.show",["contratos"=>$contratos, "entidadescontratantes"=>$entidadescontratantes,"tiposcontratos"=>$tiposcontratos,"residentes"=>$residentes,"polizas"=>$polizas,"rutasarchivos"=>$rutasarchivos,"archivoscontratos"=>$archivoscontratos,"estadospolizas"=>$estadospolizas,"novedadesfechas"=>$novedadesfechas,"balancesfinancieros"=>$balancesfinancieros,"i"=>$i]);
 }


    /**
     * Show the form for editing the specified Contratos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
    $contratos = $this->contratosRepository->findWithoutFail($id);
    $tiposcontratos=DB::table('tiposcontratos')->whereNull('deleted_at')->get();
    $entidadescontratantes=DB::table('entidadescontratantes as ec')->whereNull('deleted_at')->get();  
    $residentes=DB::table('personas as p')
      ->join('pnaturales as pn','p.id','=','pn.idpersonas')->select('p.id','pn.nombre')->whereNull('p.deleted_at')->get();  

    $archivoscontratos=DB::table('archivoscontratos')->where('idcontratos','=',$id)->get();

	return view("contratos.edit",["contratos"=>$contratos,"archivoscontratos"=>$archivoscontratos, "entidadescontratantes"=>$entidadescontratantes,"tiposcontratos"=>$tiposcontratos,"residentes"=>$residentes]);
}

    /**
     * Update the specified Contratos in storage.
     *
     * @param  int              $id
     * @param UpdateContratosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContratosRequest $request)
    {
        //Obteniendo los archivos
        $archivo=Input::file('file');
        $archivo2=Input::file('file2');
        $archivo3=Input::file('file3');

        $contratos= contratos::findOrFail($id);
        $contratos->objetocontrato=$request->get('objetocontrato');
        $contratos->nocontrato=$request->get('nocontrato');
        $contratos->ncontrato=$request->get('ncontrato');
        $contratos->apodocontrato=$request->get('apodocontrato');
        $contratos->valorcontratol=$request->get('valorcontratol');
        $contratos->valorcontrato=$request->get('valorcontrato');
        $contratos->valoranticipol=$request->get('valoranticipol');
        $contratos->valoranticipo=$request->get('valoranticipo');
        $contratos->porcentajeanticipo=$request->get('porcentajeanticipo');
        $contratos->formapago=$request->get('formapago');
        $contratos->valoradicional=$request->get('valoradicional');
        $contratos->valoranticipoadicional=$request->get('valoranticipoadicional');
        $contratos->plazoinicial=$request->get('plazoinicial');
        $contratos->estado=$request->get('estado');
        $contratos->identidadescontratantes=$request->get('identidadescontratantes');
        $contratos->idtiposcontratos=$request->get('idtiposcontratos');
        $contratos->idpersonas=$request->get('idresidentes');
        $contratos->update();

        //Insetando los nuevos archivos de contrato
        //Copia del Contratoxd
        if($archivo != null) {
            $archivoscontratos = new archivoscontratos();
            $carpeta="15";
                $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
            $archivoscontratos->archivo=$ruta;

            $archivoscontratos->titulo="";
            $archivoscontratos->descripcion="";
            $archivoscontratos->tipo="Copia del Contrato";
            $archivoscontratos->idcontratos=$contratos->id;
            $archivoscontratos->save();
        }   

        //Acta de Inicio
        if($archivo2 != null) {
            $archivoscontratos = new archivoscontratos();
            $carpeta="16";
                $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo2->getClientOriginalName();
                $r1=Storage::disk('local')->put($ruta,  \File::get($archivo2) );
            $archivoscontratos->archivo=$ruta;

            $archivoscontratos->titulo="";
            $archivoscontratos->descripcion="";
            $archivoscontratos->tipo="Acta de Inicio";
            $archivoscontratos->idcontratos=$contratos->id;
            $archivoscontratos->save();
        }

        //CDP
        if($archivo3 != null) {
            $archivoscontratos = new archivoscontratos();
            $carpeta="17";
                $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo3->getClientOriginalName();
                $r1=Storage::disk('local')->put($ruta,  \File::get($archivo3) );
            $archivoscontratos->archivo=$ruta;

            $archivoscontratos->titulo="";
            $archivoscontratos->descripcion="";
            $archivoscontratos->tipo="CDP";
            $archivoscontratos->idcontratos=$contratos->id;
            $archivoscontratos->save();
        }
           
        Flash::success('Contrato Modificado Satisfactoriamente.');
        return redirect(route('contratos.index'));

    }
    
    //Descargar Archivos Contratos desde Show_Fields
    public function descargarb($id){
        $Archivoscontratos=Archivoscontratos::find($id);
        $rutaarchivo= "storage/".$Archivoscontratos->archivo;
        return response()->download($rutaarchivo);
    }

    //Descargar Archivos Balances Financieros desde Show_Fields
    public function descargarc($id){
        $archivosbalancesfinancieros=Archivosbalancesfinancieros::where('idbalancesfinancieros', $id)->first();
        $rutaarchivo= "storage/".$archivosbalancesfinancieros->archivo;
        return response()->download($rutaarchivo);
    }


    /**
     * Remove the specified Contratos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contratos = $this->contratosRepository->findWithoutFail($id);

        if (empty($contratos)) {
            Flash::error('Contratos not found');

            return redirect(route('contratos.index'));
        }

        $this->contratosRepository->delete($id);

        Flash::success('Contratos eliminado Satisfactoriamente.');

        return redirect(route('contratos.index'));
    }
}
