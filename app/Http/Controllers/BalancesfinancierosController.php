<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBalancesfinancierosRequest;
use App\Http\Requests\UpdateBalancesfinancierosRequest;
use App\Repositories\BalancesfinancierosRepository;
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
use App\Models\Contratos;
use App\Models\Balancesfinancieros;
use App\Models\Archivosbalancesfinancieros;

class BalancesfinancierosController extends AppBaseController
{
    /** @var  BalancesfinancierosRepository */
    private $balancesfinancierosRepository;

    public function __construct(BalancesfinancierosRepository $balancesfinancierosRepo)
    {
        $this->balancesfinancierosRepository = $balancesfinancierosRepo;
    }

    /**
     * Display a listing of the Balancesfinancieros.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $query=trim($request->GET('searchText'));

        $balancesfinancieros=DB::table('personas as p')
            ->join('contratos as c','p.id','=','c.idpersonas')
            ->join('balancesfinancieros as bf','c.id','=','bf.idcontratos')
            ->join('archivosbalancesfinancieros as af','bf.id','=','af.idbalancesfinancieros')
            ->select('bf.id','c.ncontrato','af.id as idbalancesarch','c.nocontrato','c.apodocontrato','bf.actaparcial','bf.pendientepagar','bf.estado')
            ->where('c.id','LIKE','%'.$query.'%')
            // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
            ->whereNull('bf.deleted_at')
            ->orderBy('bf.id','desc')
            ->paginate(7);
        
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();

        return view('balancesfinancieros.index',["balancesfinancieros"=>$balancesfinancieros,"contratos"=>$contratos,"query"=>$query]);
    }

    /**
     * Show the form for creating a new Balancesfinancieros.
     *
     * @return Response
     */
    public function create()
    {
        $contratos=DB::table('contratos')->whereNull('deleted_at')->get();
        $pendiente=DB::table('contratos as c')
        ->join('balancesfinancieros as bf','c.id','=','bf.idcontratos')
        ->select('bf.*')
        ->latest()->first();

		return view("balancesfinancieros.create",["contratos"=>$contratos,"pendiente"=>$pendiente]);
    }

    /**
     * Store a newly created Balancesfinancieros in storage.
     *
     * @param CreateBalancesfinancierosRequest $request
     *
     * @return Response
     */
    public function store(CreateBalancesfinancierosRequest $request)
    {

        $archivo=Input::file('file');

        $pendiente = $request->get('pendiente') - $request->get('actaparcial');

        $balancesfinancieros=new balancesfinancieros();
        $balancesfinancieros->actaparcial=$request->get('actaparcial');
        $balancesfinancieros->pendientepagar=$pendiente;
        $balancesfinancieros->estado=$request->get('estado');
        $balancesfinancieros->idcontratos=$request->get('idcontratos');  
        $balancesfinancieros->save();

        if($archivo != null) {
        $archivosbalancesfinancieros = new archivosbalancesfinancieros();
            $carpeta="14";
            $ruta=$carpeta."/".$request->get("idresidentes")."/".$archivo->getClientOriginalName();
                  $r1=Storage::disk('local')->put($ruta,  \File::get($archivo) );
              $archivosbalancesfinancieros->archivo=$ruta;      

            $archivosbalancesfinancieros->titulo="";
            $archivosbalancesfinancieros->descripcion="";
            $archivosbalancesfinancieros->idbalancesfinancieros=$balancesfinancieros->id;
            $archivosbalancesfinancieros->save();
        }else{
            $archivosbalancesfinancieros = new archivosbalancesfinancieros();
            $archivosbalancesfinancieros->archivo="";      
            $archivosbalancesfinancieros->titulo="";
            $archivosbalancesfinancieros->descripcion="";
            $archivosbalancesfinancieros->idbalancesfinancieros=$balancesfinancieros->id;
            $archivosbalancesfinancieros->save();
        }

        Flash::success('Acta Parcial Agregada Satisfactoriamente.');

        return redirect(route('balancesfinancieros.index'));
    }

    /**
     * Display the specified Balancesfinancieros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $balancesfinancieros = $this->balancesfinancierosRepository->findWithoutFail($id);

        if (empty($balancesfinancieros)) {
            Flash::error('Balancesfinancieros not found');

            return redirect(route('balancesfinancieros.index'));
        }

        return view('balancesfinancieros.show')->with('balancesfinancieros', $balancesfinancieros);
    }

    /**
     * Show the form for editing the specified Balancesfinancieros.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $balancesfinancieros=DB::table('balancesfinancieros as bf')
        ->join('archivosbalancesfinancieros as abf','bf.id','=','abf.idbalancesfinancieros')->select('bf.id','bf.actaparcial','bf.pendientepagar','bf.estado')->where('bf.id','=',$id)->first();

        $pendiente=DB::table('contratos as c')
        ->join('balancesfinancieros as bf','c.id','=','bf.idcontratos')
        ->select('bf.*')
        ->latest()->first();

        return view("balancesfinancieros.edit",["balancesfinancieros"=>$balancesfinancieros,"pendiente"=>$pendiente]);
    }

    /**
     * Update the specified Balancesfinancieros in storage.
     *
     * @param  int              $id
     * @param UpdateBalancesfinancierosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBalancesfinancierosRequest $request)
    {
        $balancesfinancieros = $this->balancesfinancierosRepository->findWithoutFail($id);

        if (empty($balancesfinancieros)) {
            Flash::error('Balancesfinancieros not found');

            return redirect(route('balancesfinancieros.index'));
        }

        $balancesfinancieros = $this->balancesfinancierosRepository->update($request->all(), $id);

        Flash::success('Balancesfinancieros updated successfully.');

        return redirect(route('balancesfinancieros.index'));
    }

    public function descargarBalances($id){
        $archivosbalancesfinancieros=Archivosbalancesfinancieros::find($id);
        $rutaarchivo= "storage/".$archivosbalancesfinancieros->archivo;
        return response()->download($rutaarchivo);
      }

    /**
     * Remove the specified Balancesfinancieros from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $balancesfinancieros = $this->balancesfinancierosRepository->findWithoutFail($id);

        if (empty($balancesfinancieros)) {
            Flash::error('Balancesfinancieros not found');

            return redirect(route('balancesfinancieros.index'));
        }

        $this->balancesfinancierosRepository->delete($id);

        Flash::success('Balancesfinancieros deleted successfully.');

        return redirect(route('balancesfinancieros.index'));
    }
}
