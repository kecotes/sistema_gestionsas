<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdiccionesRequest;
use App\Http\Requests\UpdateAdiccionesRequest;
use App\Repositories\AdiccionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
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
use App\Models\Contratos;
use App\Models\Balancesfinancieros;
use App\Models\Adicciones;
use App\Models\Archivosbalancesfinancieros;

class AdiccionesController extends AppBaseController
{
    /** @var  AdiccionesRepository */
    private $adiccionesRepository;

    public function __construct(AdiccionesRepository $adiccionesRepo)
    {
        $this->adiccionesRepository = $adiccionesRepo;
    }

    /**
     * Display a listing of the Adicciones.
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

        $adicciones=DB::table('personas as p')
            ->join('contratos as c','p.id','=','c.idpersonas')
            ->join('adicciones as adc','c.id','=','adc.idcontratos')
            ->select('adc.id','c.ncontrato','c.nocontrato','c.apodocontrato','adc.valoradicional','adc.valoranticipoadicional','adc.idcontratos')
            ->where('c.id','LIKE','%'.$query.'%')
            // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
            ->whereNull('adc.deleted_at')
            ->orderBy('adc.id','asc')
            ->paginate(7);
        
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

        return view('adicciones.index',["adicciones"=>$adicciones,"contratos"=>$contratos,"query"=>$query]);
    }

    /**
     * Show the form for creating a new Adicciones.
     *
     * @return Response
     */
    public function create()
    {
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

		return view("adicciones.create",["contratos"=>$contratos]);
    }

    /**
     * Store a newly created Adicciones in storage.
     *
     * @param CreateAdiccionesRequest $request
     *
     * @return Response
     */
    public function store(CreateAdiccionesRequest $request)
    {
            $adicciones=new adicciones();
            $adicciones->valoradicional=$request->get('valoradicional');
            $adicciones->valoranticipoadicional=$request->get('valoranticipoadicional');
            $adicciones->idcontratos=$request->get('idcontratos');
            $adicciones->save();


            //Consulta el ultimo pendientepagar del contrato
            $ultimo_pendientepagar=balancesfinancieros::where('idcontratos', $request->get('idcontratos'))->latest()->first();

            // pendientepagar (viejo) + valor adicional - anticipo adicion = Obtiene el ultimo pendientepagar
            $nuevo_pendientepagar = $ultimo_pendientepagar->pendientepagar + $request->get('valoradicional')  - $request->get('valoranticipoadicional');


            $balancesfinancieros=new balancesfinancieros();
            $balancesfinancieros->actaparcial="0";
            $balancesfinancieros->pendientepagar=$nuevo_pendientepagar;
            $balancesfinancieros->estado="Adiccion";
            $balancesfinancieros->idcontratos=$request->get('idcontratos');  
            $balancesfinancieros->save();

        Flash::success('Adicciones Agregada.');

        return redirect(route('adicciones.index'));
    }

    /**
     * Display the specified Adicciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $adicciones = $this->adiccionesRepository->findWithoutFail($id);

        if (empty($adicciones)) {
            Flash::error('Adicciones not found');

            return redirect(route('adicciones.index'));
        }

        return view('adicciones.show')->with('adicciones', $adicciones);
    }

    /**
     * Show the form for editing the specified Adicciones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $adicciones = $this->adiccionesRepository->findWithoutFail($id);

        if (empty($adicciones)) {
            Flash::error('Adicciones not found');

            return redirect(route('adicciones.index'));
        }

        return view('adicciones.edit')->with('adicciones', $adicciones);
    }

    /**
     * Update the specified Adicciones in storage.
     *
     * @param  int              $id
     * @param UpdateAdiccionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdiccionesRequest $request)
    {
        $adicciones = $this->adiccionesRepository->findWithoutFail($id);

        if (empty($adicciones)) {
            Flash::error('Adicciones not found');

            return redirect(route('adicciones.index'));
        }

        $adicciones = $this->adiccionesRepository->update($request->all(), $id);

        Flash::success('Adicciones updated successfully.');

        return redirect(route('adicciones.index'));
    }

    /**
     * Remove the specified Adicciones from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $adicciones = $this->adiccionesRepository->findWithoutFail($id);

        if (empty($adicciones)) {
            Flash::error('Adicciones not found');

            return redirect(route('adicciones.index'));
        }

        $this->adiccionesRepository->delete($id);

        Flash::success('Adicciones deleted successfully.');

        return redirect(route('adicciones.index'));
    }
}
