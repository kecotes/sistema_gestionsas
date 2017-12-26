<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUnionestemporalesRequest;
use App\Http\Requests\UpdateUnionestemporalesRequest;
use App\Repositories\UnionestemporalesRepository;
use App\Repositories\PersonasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

use App\Models\Personas;
use App\Models\Pjuridicas;
use App\Models\Unionestemporales;
use App\Models\Numuniones;

class UnionestemporalesController extends AppBaseController
{
    /** @var  UnionestemporalesRepository */
    private $unionestemporalesRepository;

    public function __construct(UnionestemporalesRepository $unionestemporalesRepo, personasRepository $personasasRepo)
    {
        $this->unionestemporalesRepository = $unionestemporalesRepo;
         $this->personasRepository = $personasasRepo;
    }

    /**
     * Display a listing of the Unionestemporales.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request){

      $query=trim($request->GET('searchText'));

      $unionestemporales=DB::table('personas as p')
      ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
      ->join('numuniones as nu','pj.id','=','nu.idpjuridicas')
      ->join('unionestemporales as ut','nu.idunionestemporales','=','ut.id')
      ->select('p.id','p.direccion','p.telefono','p.documento','pj.nombre','pj.apellido','pj.ciudad','pj.departamento','pj.tipopjuridica')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
     ->where('pj.tipopjuridica','=','unionestemporales')
      ->whereNull('p.deleted_at')
      ->orderBy('p.id','desc')
      ->groupBy('p.id','p.direccion','p.telefono','p.documento','pj.nombre','pj.apellido','pj.ciudad','pj.departamento','pj.tipopjuridica')
      ->paginate(7);
      return view('unionestemporales.index',["unionestemporales"=>$unionestemporales,"searchText"=>$query]);
  }

  /**
   * Show the form for creating a new Personas.
   *
   * @return Response
   */
  public function create(){
      $contratista=DB::table('personas as p')
        ->join('pjuridicas as pj','p.id','=','pj.idpersonas')->where('pj.tipopjuridica','=','contratista')->whereNull('p.deleted_at')->get();
    return view('unionestemporales.create',["contratista"=>$contratista]);
  }

  /**
   * Store a newly created Personas in storage.
   *
   * @param CreatePersonasRequest $request
   *
   * @return Response
   */
  public function store(CreateUnionestemporalesRequest $request){

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
        $pjuridicas->apellido='---';
        $pjuridicas->ciudad=$request->get('ciudad');
        $pjuridicas->departamento=$request->get('departamento');
        $pjuridicas->tipopjuridica='unionestemporales';
        $pjuridicas->save();

        $unionestemporales=New unionestemporales();
        $unionestemporales->save();

        $numuniones=New numuniones();
        $numuniones->porcentaje='0';
        $numuniones->idpjuridicas=$pjuridicas->id;
        $numuniones->idunionestemporales=$unionestemporales->id;
        $numuniones->save();

         Flash::success('Union Temporal Agregada Satisfactoriamente.');

        return redirect(route('unionestemporales.index'));
       
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


      $unionestemporales=DB::table('personas as p')
      ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
      ->join('numuniones as nu','pj.id','=','nu.idpjuridicas')
      ->join('unionestemporales as ut','nu.idunionestemporales','=','ut.id')
      ->select('*')
      ->where('p.id','=',$id)
       ->first();    

       return view('unionestemporales.show',["unionestemporales"=>$unionestemporales,compact('resi')]);
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
      $unionestemporales=DB::table('personas as p')
      ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
      ->join('numuniones as nu','pj.id','=','nu.idpjuridicas')
      ->join('unionestemporales as ut','nu.idunionestemporales','=','ut.id')
      ->select('p.id','p.direccion','p.telefono','p.documento','pj.nombre','pj.apellido','pj.ciudad','pj.departamento','pj.tipopjuridica','p.expedicion')
      ->where('p.id','=',$id)
      ->first();

      $contratista=DB::table('personas as p')
        ->join('pjuridicas as pj','p.id','=','pj.idpersonas')->where('pj.tipopjuridica','=','contratista')->whereNull('p.deleted_at')->get();

    return view('unionestemporales.edit',["contratista"=>$contratista,"unionestemporales"=> $unionestemporales]);    
  }

  /**
   * Update the specified Personas in storage.
   *
   * @param  int              $id
   * @param UpdatePersonasRequest $request
   *
   * @return Response
   */
  public function update($id, UpdateUnionestemporalesRequest $request)
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
        $pjuridicas->ciudad=$request->get('ciudad');
        $pjuridicas->departamento=$request->get('departamento');
        $pjuridicas->update();

        //Si descomento esto se editara el contratista pero tambien el numuniones y toca restablecer en la bd al que pertenece
        $numuniones=numuniones::where('idpjuridicas', $pjuridicas->id)->first();
        //$numuniones->idpjuridicas=$request->get('iduni');
        $numuniones->update();

        $unionestemporales=unionestemporales::where('id', $numuniones->idunionestemporales)->first();
        $unionestemporales->save();

         Flash::success('Union Temporal Editado Satisfactoriamente.');

        return redirect(route('unionestemporales.index'));
  }

  /**
   * Remove the specified Personas from storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function destroy($id)
  {
      $pjuridicas = $this->personasRepository->findWithoutFail($id);

      if (empty($pjuridicas)) {
          Flash::error('Personas not found');

          return redirect(route('pjuridicas.index'));
      }

      $this->personasRepository->delete($id);

      Flash::success('Union Temporal eliminada Satisfactoriamente.');

      return redirect(route('unionestemporales.index'));
  }

}
