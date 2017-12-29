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

class UserEditController extends Controller
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

  public function edit($id)
  {
      $user=User::all();
      return view('useredit.edit')->with('user', $user);
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


}
