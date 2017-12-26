<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePjuridicasRequest;
use App\Http\Requests\UpdatePjuridicasRequest;
use App\Repositories\PjuridicasRepository;
use App\Repositories\PersonasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

use App\Models\Personas;
use App\Models\Pjuridicas;


class PjuridicasController extends AppBaseController
{
    /** @var  PjuridicasRepository */
    private $pjuridicasRepository;

    public function __construct(PjuridicasRepository $pjuridicasRepo, personasRepository $personasasRepo)
    {
        $this->pjuridicasRepository = $pjuridicasRepo;
        $this->personasRepository = $personasasRepo;

    }

    /**
     * Display a listing of the Pjuridicas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request){

      $query=trim($request->GET('searchText'));

      $pjuridicas=DB::table('personas as p')
      ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
      ->select('p.id','p.direccion','p.telefono','p.documento','pj.nombre','pj.apellido','pj.ciudad','pj.departamento','pj.tipopjuridica')
      //->where('pj.nombre','LIKE','%'.$query.'%')
      ->where('pj.tipopjuridica','=','contratista')
      ->orwhere('pj.tipopjuridica','=','representante')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('p.deleted_at')
      ->orderBy('p.id','desc')
      ->groupBy('p.id','p.direccion','p.telefono','p.documento','pj.nombre','pj.apellido','pj.ciudad','pj.departamento','pj.tipopjuridica')
      ->paginate(7);
      return view('pjuridicas.index',["pjuridicas"=>$pjuridicas,"searchText"=>$query]);

  }

  /**
   * Show the form for creating a new Personas.
   *
   * @return Response
   */
  public function create(){
    return view('pjuridicas.create');
  }

  /**
   * Store a newly created Personas in storage.
   *
   * @param CreatePersonasRequest $request
   *
   * @return Response
   */
  public function store(CreatePjuridicasRequest $request){
        $personas= New personas();
        $personas->direccion=$request->get('direccion');
        $personas->telefono=$request->get('telefono');
        $personas->tipodocumento=$request->get('tipodocumento');
        $personas->documento=$request->get('documento');
        $personas->expedicion=$request->get('expedicion');
        $personas->estado='Activo';
        $personas->save();

        $pjuridicas=New pjuridicas();
        $pjuridicas->idpersonas=$personas->id;
        $pjuridicas->nombre=$request->get('nombre');
        $pjuridicas->apellido=$request->get('apellido');
        $pjuridicas->ciudad=$request->get('ciudad');
        $pjuridicas->departamento=$request->get('departamento');
        $pjuridicas->tipopjuridica=$request->get('tipopjuridica');
        $pjuridicas->save();
         Flash::success('Contratista Agregado Satisfactoriamente.');

        return redirect(route('pjuridicas.index'));
       
  }

  /**
   * Display the specified Personas.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function show($id)
  {

            $personas=DB::table('personas as p') 
            ->select('*')
            ->where('p.id','=',$id)
            ->first();    

            $pjuridicas=DB::table('pjuridicas as pj')
            ->select('*')
            ->where('pj.idpersonas','=',$id)
            ->first();

       return view('pjuridicas.show',["personas"=>$personas,"pjuridicas"=>$pjuridicas,compact('resi')]);
  }

  /**
   * Show the form for editing the specified Personas.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit($id)
  {
      $pjuridicas=DB::table('personas as p')
      ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
      ->select('p.id','p.direccion','p.telefono','p.documento','pj.nombre','pj.apellido','pj.ciudad','pj.departamento','pj.tipopjuridica','p.expedicion')
      ->where('p.id','=',$id)
      ->first();    
      return view('pjuridicas.edit')->with('pjuridicas', $pjuridicas);
  }

  /**
   * Update the specified Personas in storage.
   *
   * @param  int              $id
   * @param UpdatePersonasRequest $request
   *
   * @return Response
   */
  public function update($id, UpdatePjuridicasRequest $request)
  {
        $personas= personas::findOrFail($id);
        $personas->direccion=$request->get('direccion');
        $personas->telefono=$request->get('telefono');
        $personas->tipodocumento=$request->get('tipodocumento');
        $personas->documento=$request->get('documento');
        $personas->expedicion=$request->get('expedicion');
        $personas->estado='Activo';
        $personas->update();

        $pjuridicas=pjuridicas::where('idpersonas', $personas->id)->first();
        $pjuridicas->idpersonas=$personas->id;
        $pjuridicas->nombre=$request->get('nombre');
        $pjuridicas->apellido=$request->get('apellido');
        $pjuridicas->ciudad=$request->get('ciudad');
        $pjuridicas->departamento=$request->get('departamento');
        $pjuridicas->tipopjuridica=$request->get('tipopjuridica');
        $pjuridicas->update();
         Flash::success('Contratista Editado Satisfactoriamente.');

        return redirect(route('pjuridicas.index'));
  }

  /**
   * Remove the specified Personas from storage.
   *
   * @param  int $id
   *
   * @return Response
   */

   //con personas repository funciona
  public function destroy($id)
  {
      $pjuridicas = $this->PjuridicasRepository->findWithoutFail($id);

      if (empty($pjuridicas)) {
          Flash::error('Personas not found');

          return redirect(route('pjuridicas.index'));
      }

      $this->PjuridicasRepository->delete($id);

      Flash::success('Contratista eliminado Satisfactoriamente.');

      return redirect(route('pjuridicas.index'));
  }

}
