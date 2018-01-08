<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNovedadesfechasRequest;
use App\Http\Requests\UpdateNovedadesfechasRequest;
use App\Repositories\NovedadesfechasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use App\Models\Personas;
use App\Models\Pjuridicas;
use App\Models\Contratos;
use App\Models\Novedadesfechas;

class NovedadesfechasController extends AppBaseController
{
    /** @var  NovedadesfechasRepository */
    private $novedadesfechasRepository;

    public function __construct(NovedadesfechasRepository $novedadesfechasRepo)
    {
        $this->novedadesfechasRepository = $novedadesfechasRepo;
    }

    /**
     * Display a listing of the Novedadesfechas.
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
        
        $novedadesfechas=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('novedadesfechas as no','c.id','=','no.idcontratos')
      ->select('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','no.fechainiciacion','no.fechafinalizacion','no.fechasuspension','no.fechareinicio','no.adicciontiempo','no.fechafinalizacionadiccion','no.agregar','no.idcontratos')
      ->where('c.id','LIKE','%'.$query.'%')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('c.deleted_at')
      ->orderBy('c.id','desc')
      ->groupBy('c.id','c.ncontrato','c.nocontrato','c.apodocontrato','no.fechainiciacion','no.fechafinalizacion','no.fechasuspension','no.fechareinicio','no.adicciontiempo','no.fechafinalizacionadiccion','no.agregar','no.idcontratos')
      ->paginate(7);

      $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

        return view('novedadesfechas.index')
            ->with('novedadesfechas', $novedadesfechas)
            ->with('contratos', $contratos);
    }

    /**
     * Show the form for creating a new Novedadesfechas.
     *
     * @return Response
     */
    public function create()
    {
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();
		return view("novedadesfechas.create",["contratos"=>$contratos]);
    }

    /**
     * Store a newly created Novedadesfechas in storage.
     *
     * @param CreateNovedadesfechasRequest $request
     *
     * @return Response
     */
    public function store(CreateNovedadesfechasRequest $request)
    {
        $agregar = $request->get('agregar');
        printf($agregar);
        switch ($agregar) {
            case 1:
                break;
            case 2:
                //Insertar Fecha de Inicio
                $novedadesfechas=new novedadesfechas();
                $novedadesfechas->plazoinicial="0";
                $novedadesfechas->fechainiciacion=$request->get('valor');
                $novedadesfechas->fechafinalizacion="2000-12-31 00:00:00";
                $novedadesfechas->fechasuspension="2000-12-31 00:00:00";
                $novedadesfechas->fechareinicio="2000-12-31 00:00:00";
                $novedadesfechas->adicciontiempo="";
                $novedadesfechas->fechafinalizacionadiccion="2000-12-31 00:00:00";
                $novedadesfechas->agregar=$agregar;
                $novedadesfechas->estado="En Ejecucion";
                $novedadesfechas->idcontratos=$request->get('idcontratos');
                $novedadesfechas->save();
                break;
            case 3:
                //Fecha de Suspension
                //Consultamos la ultima fecha de finalizacion
                $consultaNovedadesfechas=DB::table('novedadesfechas')->where('idcontratos','=',$request->get('idcontratos'))->latest()->first();

                //Insertar Fecha de Suspension y Fecha de Finalizacion
                $novedadesfechas=new novedadesfechas();
                $novedadesfechas->plazoinicial="";
                $novedadesfechas->fechainiciacion="2000-12-31 00:00:00";
                $novedadesfechas->fechafinalizacion=$consultaNovedadesfechas->fechafinalizacion;
                $novedadesfechas->fechasuspension=$request->get('valor');
                $novedadesfechas->fechareinicio="2000-12-31 00:00:00";
                $novedadesfechas->adicciontiempo="";
                $novedadesfechas->fechafinalizacionadiccion="2000-12-31 00:00:00";
                $novedadesfechas->agregar=$agregar;
                $novedadesfechas->estado="En Suspension";
                $novedadesfechas->idcontratos=$request->get('idcontratos');
                $novedadesfechas->save();
                break;
            case 4:
                //Fecha de Reinicio
                //Consultamos la ultima fecha de suspension y finalizacion
                $consultaNovedadesfechas=DB::table('novedadesfechas')->where('idcontratos','=',$request->get('idcontratos'))->latest()->first();

                //restamos la fecha de reinicio con la fecha de suspension y obtenemos los dias suspendidos
                $segundos= strtotime($request->get('valor')) - strtotime($consultaNovedadesfechas->fechasuspension);
                $diasSuspendidos=intval($segundos/60/60/24);
                echo "La cantidad de días entre el ".$request->get('valor')." - ".$consultaNovedadesfechas->fechasuspension." y hoy es <b>".$diasSuspendidos."</b>";

                //le sumamos los dias suspendidos a la fecha de finalizacion
                $nuevafecha = strtotime ( '+'.$diasSuspendidos.' day' , strtotime ( $consultaNovedadesfechas->fechafinalizacion  ) ) ;
                $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

            
                $novedadesfechas=new novedadesfechas();
                $novedadesfechas->plazoinicial="";
                $novedadesfechas->fechainiciacion="2000-12-31 00:00:00";
                $novedadesfechas->fechafinalizacion=$nuevafecha;
                $novedadesfechas->fechasuspension="2000-12-31 00:00:00";
                $novedadesfechas->fechareinicio=$request->get('valor');
                $novedadesfechas->adicciontiempo=$diasSuspendidos;
                $novedadesfechas->fechafinalizacionadiccion="2000-12-31 00:00:00";
                $novedadesfechas->agregar=$agregar;
                $novedadesfechas->estado="En Reinicio";
                $novedadesfechas->idcontratos=$request->get('idcontratos');
                $novedadesfechas->save();
                break;
            case 5:
                //Adiccion en Tiempo
                //Consultamos la ultima fecha de finalizacion
                $consultaNovedadesfechas=DB::table('novedadesfechas')->where('idcontratos','=',$request->get('idcontratos'))->latest()->first();

                //Le sumamos los dias de adiccion a esta fecha que conseguimos
                $dias = $request->get('valor');
                $nuevafecha = strtotime ( '+'.$dias.' day' , strtotime ( $consultaNovedadesfechas->fechafinalizacion  ) ) ;
                $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

                $novedadesfechas=new novedadesfechas();
                $novedadesfechas->plazoinicial="";
                $novedadesfechas->fechainiciacion="2000-12-31 00:00:00";
                $novedadesfechas->fechafinalizacion=$nuevafecha;
                $novedadesfechas->fechasuspension="2000-12-31 00:00:00";
                $novedadesfechas->fechareinicio="2000-12-31 00:00:00";
                $novedadesfechas->adicciontiempo=$request->get('valor');
                $novedadesfechas->fechafinalizacionadiccion="2000-12-31 00:00:00";
                $novedadesfechas->agregar=$agregar;
                $novedadesfechas->estado="En Adiccion de Tiempo";
                $novedadesfechas->idcontratos=$request->get('idcontratos');
                $novedadesfechas->save();
                break;
            case 6:
                //Insertar Fecha de Terminacion
                $novedadesfechas=new novedadesfechas();
                $novedadesfechas->plazoinicial="";
                $novedadesfechas->fechainiciacion="2000-12-31 00:00:00";
                $novedadesfechas->fechafinalizacion=$request->get('valor');
                $novedadesfechas->fechasuspension="2000-12-31 00:00:00";
                $novedadesfechas->fechareinicio="2000-12-31 00:00:00";
                $novedadesfechas->adicciontiempo="";
                $novedadesfechas->fechafinalizacionadiccion="2000-12-31 00:00:00";
                $novedadesfechas->agregar=$agregar;
                $novedadesfechas->estado="En Terminacion";
                $novedadesfechas->idcontratos=$request->get('idcontratos');
                $novedadesfechas->save();
                break;
            case 7:
                //Insertar Fecha de Terminacion segun Adiccion
                $novedadesfechas=new novedadesfechas();
                $novedadesfechas->plazoinicial="0";
                $novedadesfechas->fechainiciacion="2000-12-31 00:00:00";
                $novedadesfechas->fechafinalizacion="2000-12-31 00:00:00";
                $novedadesfechas->fechasuspension="2000-12-31 00:00:00";
                $novedadesfechas->fechareinicio="2000-12-31 00:00:00";
                $novedadesfechas->adicciontiempo="0";
                $novedadesfechas->fechafinalizacionadiccion="$request->get('valor')";
                $novedadesfechas->agregar=$agregar;
                $novedadesfechas->estado="En Terminacion segun Adiccion";
                $novedadesfechas->idcontratos=$request->get('idcontratos');
                $novedadesfechas->save();
                break;
        }

        Flash::success('Noveda de fecha  Agregado Satisfactoriamente.');

        return redirect(route('novedadesfechas.index'));
    }

    /**
     * Display the specified Novedadesfechas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $novedadesfechas = $this->novedadesfechasRepository->findWithoutFail($id);

        if (empty($novedadesfechas)) {
            Flash::error('Novedadesfechas not found');

            return redirect(route('novedadesfechas.index'));
        }

        return view('novedadesfechas.show')->with('novedadesfechas', $novedadesfechas);
    }

    /**
     * Show the form for editing the specified Novedadesfechas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $novedadesfechas = $this->novedadesfechasRepository->findWithoutFail($id);

        if (empty($novedadesfechas)) {
            Flash::error('Novedadesfechas not found');

            return redirect(route('novedadesfechas.index'));
        }

        return view('novedadesfechas.edit')->with('novedadesfechas', $novedadesfechas);
    }

    /**
     * Update the specified Novedadesfechas in storage.
     *
     * @param  int              $id
     * @param UpdateNovedadesfechasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNovedadesfechasRequest $request)
    {
        $novedadesfechas = $this->novedadesfechasRepository->findWithoutFail($id);

        if (empty($novedadesfechas)) {
            Flash::error('Novedadesfechas not found');

            return redirect(route('novedadesfechas.index'));
        }

        $novedadesfechas = $this->novedadesfechasRepository->update($request->all(), $id);

        Flash::success('Novedadesfechas updated successfully.');

        return redirect(route('novedadesfechas.index'));
    }

    /**
     * Remove the specified Novedadesfechas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $novedadesfechas = $this->novedadesfechasRepository->findWithoutFail($id);

        if (empty($novedadesfechas)) {
            Flash::error('Novedadesfechas not found');

            return redirect(route('novedadesfechas.index'));
        }

        $this->novedadesfechasRepository->delete($id);

        Flash::success('Novedadesfechas deleted successfully.');

        return redirect(route('novedadesfechas.index'));
    }
}
