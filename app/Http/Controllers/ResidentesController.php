<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResidentesRequest;
use App\Http\Requests\UpdatePersonasRequest;
use App\Http\Requests\UpdateResidentesRequest;
use App\Http\Requests\CreatePnaturalesRequest;
use App\Http\Requests\CreateFuncionariosRequest;
use App\Repositories\PersonasRepository;
use App\Repositories\ResidentesRepository;
use App\Repositories\PnaturalesRepository;
use App\Repositories\FuncionariosRepository;
use App\Repositories\PermisosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Validator;
use App\User;
use App\Models\Usuarioscreados;
use App\Models\Personas;
use App\Models\Residentes;
use App\Models\Pnaturales;
use App\Models\Funcionarios;
use App\Models\Permisos;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
//use App\Http\Requests;

class ResidentesController extends Controller
{

  public function __construct(PersonasRepository $personasRepo, ResidentesRepository $residentesRepo, PnaturalesRepository $pnaturalesRepo,  FuncionariosRepository $funcionariosRepo, PermisosRepository $permisosRepo)
  {
    $this->personasRepository = $personasRepo;
    $this->residentesRepository = $residentesRepo;
    $this->pnaturalesRepository = $pnaturalesRepo;
    $this->permisosRepository = $permisosRepo;
    $this->funcionariosRepository = $funcionariosRepo;
  }

  /**
   * Display a listing of the Personas.
   *
   * @param Request $request
   * @return Response
   */

  public function index(Request $request){

      $query=trim($request->GET('searchText'));

      $residentes=DB::table('personas as p')
      ->join('pnaturales as pn','p.id','=','pn.idpersonas')
      ->join('funcionarios as f','pn.id','=','f.idpnaturales')
      ->select('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')
      ->where('pn.nombre','LIKE','%'.$query.'%')
     // ->where('p.deleted_at', 'IS NOT',' NULL') muchos intentos xP
      ->whereNull('p.deleted_at')
      ->orderBy('p.id','desc')
      ->groupBy('p.id','p.direccion','p.telefono','p.documento','pn.nombre','pn.apellido')
      ->paginate(7);
      return view('residentes.index',["residentes"=>$residentes,"searchText"=>$query]);

  }

  /**
   * Show the form for creating a new Personas.
   *
   * @return Response
   */
  public function create(){
    return view('residentes.create');
  }

  /**
   * Store a newly created Personas in storage.
   *
   * @param CreatePersonasRequest $request
   *
   * @return Response
   */
  public function store(CreateResidentesRequest $request, CreatePnaturalesRequest $request1){

        $user=new user();
        $user->name=$request->get('nombre');
        $user->email=$request->get('usuario');
        $user->password=bcrypt($request->get('contrasena'));
        $user->tipoUsuario=$request->get('tipofuncionario');
        $user->save();
    
        $residentes=new personas();
        $residentes->direccion=$request->get('direccion');
        $residentes->telefono=$request->get('telefono');
        $residentes->tipodocumento=$request->get('tipodocumento');
        $residentes->documento=$request->get('documento');
        $residentes->expedicion=$request->get('expedicion');
        $residentes->estado='Activo';
        $residentes->save();

        $usuarioscreados=new usuarioscreados();
        $usuarioscreados->idpersonas=$residentes->id;
        $usuarioscreados->idusers=$user->id;
        $usuarioscreados->save();

        $pnaturales=new pnaturales();
        $pnaturales->idpersonas=$residentes->id;
        $pnaturales->tipopnatural='1';
        $pnaturales->nombre=$request1->get('nombre');
        $pnaturales->apellido=$request1->get('apellido');
        $pnaturales->save();

        $funcionarios=new funcionarios();
        $funcionarios->idpnaturales=$pnaturales->id;
        $funcionarios->nombre='';
        $funcionarios->apellido='';
        $funcionarios->tipofuncionario=$request->get('tipofuncionario');
        $funcionarios->usuario=$request->get('usuario');
        $funcionarios->contrasena=$request->get('contrasena');
        $funcionarios->save();

        $permisos=new permisos();
        $permisos->idfuncionarios=$funcionarios->id;
        $permisos->tipopermiso=$request->get('tipopermiso');
        $permisos->save();
         Flash::success('Residente Agregado Satisfactoriamente.');

        return redirect(route('residentes.index'));
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

            $residentes=DB::table('personas as p') 
            ->select('*')
            ->where('p.id','=',$id)
            ->first();    

            $pnaturales=DB::table('pnaturales as pn')
            ->join('funcionarios as f','pn.id','=','f.idpnaturales')
            ->select('pn.nombre','pn.apellido','pn.tipopnatural','f.usuario','f.contrasena','f.tipofuncionario')
            ->where('pn.idpersonas','=',$id)
            ->first();

       return view('residentes.show',["residentes"=>$residentes,"pnaturales"=>$pnaturales,compact('resi')]);
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
      $residentes=DB::table('personas as p')
      ->join('pnaturales as pn','p.id','=','pn.idpersonas')
      ->join('funcionarios as f','pn.id','=','f.idpnaturales')
      ->join('permisos as per','f.id','=','per.idfuncionarios')
      ->select('p.id','p.direccion','p.telefono','p.tipodocumento','p.expedicion','p.documento','pn.nombre','pn.apellido','pn.tipopnatural','f.usuario','f.contrasena','f.tipofuncionario','per.tipopermiso')
      ->where('p.id','=',$id)
      ->first();    
      return view('residentes.edit')->with('residentes', $residentes);
  }

  /**
   * Update the specified Personas in storage.
   *
   * @param  int              $id
   * @param UpdatePersonasRequest $request
   *
   * @return Response
   */
  public function update($id, UpdateResidentesRequest $request)
  {

        $residentes=personas::findOrFail($id);
        $residentes->direccion=$request->get('direccion');
        $residentes->telefono=$request->get('telefono');
        $residentes->tipodocumento=$request->get('tipodocumento');
        $residentes->documento=$request->get('documento');
        $residentes->expedicion=$request->get('expedicion');
        $residentes->update();

        $pnaturales=pnaturales::where('idpersonas', $residentes->id)->first();
        $pnaturales->tipopnatural='Funcionario';
        $pnaturales->nombre=$request->get('nombre');
        $pnaturales->apellido=$request->get('apellido');
        $pnaturales->update();

        $funcionarios=funcionarios::where('idpnaturales', $pnaturales->id)->first();
        $funcionarios->idpnaturales=$pnaturales->id;
        $funcionarios->tipofuncionario=$request->get('tipofuncionario');
        $funcionarios->usuario=$request->get('usuario');
        $funcionarios->contrasena=$request->get('contrasena');
        $funcionarios->update();

        $permisos=permisos::where('idfuncionarios', $funcionarios->id)->first();
        $permisos->idfuncionarios=$funcionarios->id;
        $permisos->tipopermiso=$request->get('tipopermiso');
        $permisos->update();
    
      Flash::success('Residente Editado satisfactoriamente.');
      return redirect(route('residentes.index'));
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
      $personas = $this->personasRepository->findWithoutFail($id);

      if (empty($personas)) {
          Flash::error('Personas not found');

          return redirect(route('personas.index'));
      }

      $this->personasRepository->delete($id);

      Flash::success('Residente eliminado Satisfactoriamente.');

      return redirect(route('residentes.index'));
  }

}
