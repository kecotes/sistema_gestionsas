<?php
/** 
*
*TODO:
*
*
*FIXME:
* - Al crear una poliza crea 2 en la BD automaticamente, almenos en la priemra interaccion confirmada.
*
*/

namespace App\Http\Controllers;

use App\Http\Requests\CreatePolizasRequest;
use App\Http\Requests\UpdatePolizasRequest;
use App\Repositories\PolizasRepository;
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

use App\User;
use App\Models\Personas;
use App\Models\Polizas;
use App\Models\Contratos;
use App\Models\Novedadesfechas;
use App\Models\Archivospolizas;


class PolizasController extends AppBaseController
{
    /** @var  PolizasRepository */
    private $polizasRepository;

    public function __construct(PolizasRepository $polizasRepo)
    {
        $this->polizasRepository = $polizasRepo;
    }

    /**
     * Display a listing of the Polizas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
      $query=trim($request->GET('searchText'));

      $polizas=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('polizas as po','c.id','=','po.idcontratos')
      ->join('archivospolizas as ap','po.id','=','ap.idpolizas')
      ->select('po.id','c.ncontrato','ap.id as idpolizasarch','c.nocontrato','c.apodocontrato','po.fechaexpedicion','po.npoliza','po.tipopoliza','po.tipocertificado','po.observaciones')
      ->where('c.id','LIKE','%'.$query.'%')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('po.deleted_at')
      ->orderBy('po.id','desc')
      ->paginate(7);

      $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

      return view('polizas.index',["polizas"=>$polizas,"contratos"=>$contratos,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new Polizas.
     *
     * @return Response
     */
    public function create()
    {
        //$contratos=DB::table('contratos as c')->select(DB::raw('CONCAT(c.ncontrato, " ",c.apodocontrato) AS contratos'),'c.id')->whereNull('deleted_at')->get();
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();
        $rutaarchivos="../storage/archivos/";
		return view("polizas.create",["contratos"=>$contratos]);
    }

    /**
     * Store a newly created Polizas in storage.
     *
     * @param CreatePolizasRequest $request
     *
     * @return Response
     */
    public function store(CreatePolizasRequest $request)
    {
        $archivo=Input::file('file');

        if($archivo != null) {

            $polizas=new polizas();
            $polizas->fechaexpedicion=$request->get('fechaexpedicion');
            $polizas->tipopoliza=$request->get('tipopoliza');
            $polizas->npoliza=$request->get('npoliza');
            $polizas->tipocertificado=$request->get('tipocertificado');
            $polizas->observaciones=$request->get('observaciones');
            $polizas->estado="Vigente";
            $polizas->idcontratos=$request->get('idcontratos');
            $polizas->save();

            $archivospolizas = new archivospolizas();
            $carpeta="20";
            $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                  $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
              $archivospolizas->archivo=$ruta;

           $archivospolizas->titulo="";
           $archivospolizas->descripcion="";
           $archivospolizas->idpolizas=$polizas->id;
           $archivospolizas->save();

        } else {
            $polizas=new polizas();
            $polizas->fechaexpedicion=$request->get('fechaexpedicion');
            $polizas->tipopoliza=$request->get('tipopoliza');
            $polizas->npoliza=$request->get('npoliza');
            $polizas->tipocertificado=$request->get('tipocertificado');
            $polizas->observaciones=$request->get('observaciones');
            $polizas->estado="Vigente";
            $polizas->idcontratos=$request->get('idcontratos');
            $polizas->save();

            $archivospolizas=new archivospolizas();
            $archivospolizas->archivo="";
            $archivospolizas->titulo="";
            $archivospolizas->descripcion="";
            $archivospolizas->idpolizas=$polizas->id;
            $archivospolizas->save();
        }

        Flash::success('Poliza Agregada Satisfactoriamente.');

        return redirect(route('polizas.index'));
    }

    /**
     * Display the specified Polizas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $polizas = $this->polizasRepository->findWithoutFail($id);

        if (empty($polizas)) {
            Flash::error('Polizas not found');

            return redirect(route('polizas.index'));
        }

        return view('polizas.show')->with('polizas', $polizas);
    }

    /**
     * Show the form for editing the specified Polizas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $polizas=DB::table('polizas as po')
        ->join('archivospolizas as ap','po.id','=','ap.idpolizas')->select('po.id','po.fechaexpedicion','po.npoliza','po.tipopoliza','po.tipocertificado','po.observaciones')->where('po.id','=',$id)->first();

        return view("polizas.edit",["polizas"=>$polizas]);
    }

    /**
     * Update the specified Polizas in storage.
     *
     * @param  int              $id
     * @param UpdatePolizasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePolizasRequest $request)
    {

        $polizas= polizas::findOrFail($id);
        $polizas->tipopoliza=$request->get('tipopoliza');
        $polizas->npoliza=$request->get('npoliza');
        $polizas->tipocertificado=$request->get('tipocertificado');
        $polizas->observaciones=$request->get('observaciones');
        $polizas->update();

        if (empty($polizas)) {
            Flash::error('Polizas not found');

            return redirect(route('polizas.index'));
        }

        Flash::success('Poliza Editada correctamente.');

        return redirect(route('polizas.index'));
    }

    public function descargarPoliza($id){
        $archivospolizas=Archivospolizas::find($id);
        $rutaarchivo= "storage/".$archivospolizas->archivo;
        return response()->download($rutaarchivo);
      }

    /**
     * Remove the specified Polizas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $polizas = $this->polizasRepository->findWithoutFail($id);

        if (empty($polizas)) {
            Flash::error('Polizas not found');

            return redirect(route('polizas.index'));
        }

        $this->polizasRepository->delete($id);

        Flash::success('Polizas deleted successfully.');

        return redirect(route('polizas.index'));
    }
}
