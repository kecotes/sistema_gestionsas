<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCorrespondenciasRequest;
use App\Http\Requests\UpdateCorrespondenciasRequest;
use App\Repositories\CorrespondenciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Input;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use DB;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Models\Personas;
use App\Models\Correspondencias;
use App\Models\Contratos;

class CorrespondenciasController extends AppBaseController
{
    /** @var  CorrespondenciasRepository */
    private $correspondenciasRepository;

    public function __construct(CorrespondenciasRepository $correspondenciasRepo)
    {
        $this->correspondenciasRepository = $correspondenciasRepo;
    }

    /**
     * Display a listing of the Correspondencias.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query=trim($request->GET('searchText'));

        //Inicia el select buscador en 0
        if($query == ""){
            $query = 0;
        }
  
        $correspondencias=DB::table('personas as p')
        ->join('contratos as c','p.id','=','c.idpersonas')
        ->join('correspondencias as co','c.id','=','co.idcontratos')
        ->select('co.id','co.tipo','co.destinatario','co.remitente','co.archivo','co.fecha','co.asunto')
        ->where('c.id','LIKE','%'.$query.'%')
        ->whereNull('co.deleted_at')
        ->orderBy('co.id','desc')
        ->paginate(7);

        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();
  
        return view('correspondencias.index',["correspondencias"=>$correspondencias,"contratos"=>$contratos,"searchText"=>$query]);

    }

    /**
     * Show the form for creating a new Correspondencias.
     *
     * @return Response
     */
    public function create()
    {
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

        return view("correspondencias.create",["contratos"=>$contratos]); 
    }

    /**
     * Store a newly created Correspondencias in storage.
     *
     * @param CreateCorrespondenciasRequest $request
     *
     * @return Response
     */
    public function store(CreateCorrespondenciasRequest $request)
    {
        $archivo=Input::file('file');

        if($archivo != null) {

            $correspondencias=new correspondencias();
            $correspondencias->destinatario=$request->get('destinatario');
            $correspondencias->remitente=$request->get('remitente');
            $correspondencias->asunto=$request->get('asunto');
            

            // La composicion esta: IDContrato / IDCorrespondencias / ID User / 
            $carpeta="20";
            $ruta=$request->get('idcontratos')."/".$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                  $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
              $correspondencias->archivo=$ruta;

              $correspondencias->fecha=$request->get('fecha');
              $correspondencias->idcontratos=$request->get('idcontratos');
              $correspondencias->tipo=$request->get('tipo');
              $correspondencias->save();

        } else {
            $correspondencias=new correspondencias();
            $correspondencias->destinatario=$request->get('destinatario');
            $correspondencias->remitente=$request->get('remitente');
            $correspondencias->asunto=$request->get('asunto');
            $correspondencias->archivo="";
            $correspondencias->fecha=$request->get('fecha');
            $correspondencias->idcontratos=$request->get('idcontratos');
            $correspondencias->tipo=$request->get('tipo');
            $correspondencias->save();

        }

        Flash::success('Correspondencia Agregada Satisfactoriamente.');

        return redirect(route('correspondencias.index'));
    }

    /**
     * Display the specified Correspondencias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $correspondencias = $this->correspondenciasRepository->findWithoutFail($id);

        if (empty($correspondencias)) {
            Flash::error('Correspondencias not found');

            return redirect(route('correspondencias.index'));
        }

        return view('correspondencias.show')->with('correspondencias', $correspondencias);
    }

    /**
     * Show the form for editing the specified Correspondencias.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $correspondencias=DB::table('correspondencias as co')
        ->where('co.id','=',$id)->first();

        //Consulta para los Administradores - Permite ver todos los archivos
        $contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.*')->whereNull('deleted_at')->get();

        $residentes=DB::table('personas as p') ->join('pnaturales as pn','p.id','=','pn.idpersonas')->select('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->groupBy('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')->whereNull('p.deleted_at')->get();        

		return view("correspondencias.edit",["correspondencias"=>$correspondencias,"contratos"=>$contratos,"residentes"=>$residentes]);
    }

    /**
     * Update the specified Correspondencias in storage.
     *
     * @param  int              $id
     * @param UpdateCorrespondenciasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCorrespondenciasRequest $request)
    {
        $archivo=Input::file('file');

        if($archivo != null) {

            $correspondencias= correspondencias::findOrFail($id);
            $correspondencias->destinatario=$request->get('destinatario');
            $correspondencias->remitente=$request->get('remitente');
            $correspondencias->asunto=$request->get('asunto');
            

            // La composicion esta: IDContrato / IDCorrespondencias / ID User / 
            $carpeta="20";
            $ruta=$request->get('idcontratos')."/".$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                  $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
              $correspondencias->archivo=$ruta;

              $correspondencias->fecha=$request->get('fecha');
              $correspondencias->tipo=$request->get('tipo');
              $correspondencias->save();

        } else {
            $correspondencias=correspondencias::findOrFail($id);
            $correspondencias->destinatario=$request->get('destinatario');
            $correspondencias->remitente=$request->get('remitente');
            $correspondencias->asunto=$request->get('asunto');
            $correspondencias->fecha=$request->get('fecha');
            $correspondencias->tipo=$request->get('tipo');
            $correspondencias->save();

        }

        Flash::success('Correspondencias Actualizada Correctamente.');

        return redirect(route('correspondencias.index'));
    }

    public function descargarCorrespondencia($id){
        $archivospolizas=Correspondencias::find($id);
        $rutaarchivo= "storage/".$archivospolizas->archivo;
        return response()->download($rutaarchivo);
      }


    /**
     * Remove the specified Correspondencias from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $correspondencias = $this->correspondenciasRepository->findWithoutFail($id);

        if (empty($correspondencias)) {
            Flash::error('Correspondencias not found');

            return redirect(route('correspondencias.index'));
        }

        $this->correspondenciasRepository->delete($id);

        Flash::success('Correspondencias deleted successfully.');

        return redirect(route('correspondencias.index'));
    }
}
