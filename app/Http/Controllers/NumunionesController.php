<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNumunionesRequest;
use App\Http\Requests\UpdateNumunionesRequest;
use App\Repositories\NumunionesRepository;
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


class NumunionesController extends AppBaseController
{
    /** @var  NumunionesRepository */
    private $numunionesRepository;

    public function __construct(NumunionesRepository $numunionesRepo)
    {
        $this->numunionesRepository = $numunionesRepo;
    }

    /**
     * Display a listing of the Numuniones.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $uniontemporales = DB::table('pjuridicas as pj')
        ->join('numuniones as nu','pj.id','=','nu.idpjuridicas')
        ->join('unionestemporales as ut','nu.idunionestemporales','=','ut.id')
        ->select('ut.id','pj.nombre')->get();

        $contratistas=DB::table('pjuridicas as pj')->get();
        
        $this->numunionesRepository->pushCriteria(new RequestCriteria($request));
        $numuniones = $this->numunionesRepository->all();

        return view('numuniones.index',["numuniones"=>$numuniones,"uniontemporales"=>$uniontemporales,"contratistas"=>$contratistas]);
    }

    /**
     * Show the form for creating a new Numuniones.
     *
     * @return Response
     */
    public function create()
    {

       $unionestemporales=DB::table('personas as p')
      ->join('pjuridicas as pj','p.id','=','pj.idpersonas')
      ->join('numuniones as nu','pj.id','=','nu.idpjuridicas')
      ->join('unionestemporales as ut','nu.idunionestemporales','=','ut.id')
      ->where('pj.tipopjuridica','=','unionestemporales')->whereNull('p.deleted_at')->get();

        $contratista=DB::table('personas as p')
        ->join('pjuridicas as pj','p.id','=','pj.idpersonas')->where('pj.tipopjuridica','=','contratista')->whereNull('p.deleted_at')->get();

    return view('numuniones.create',["contratista"=>$contratista,"unionestemporales"=>$unionestemporales]);
    }

    /**
     * Store a newly created Numuniones in storage.
     *
     * @param CreateNumunionesRequest $request
     *
     * @return Response
     */
    public function store(CreateNumunionesRequest $request)
    {
        $numuniones= New numuniones();
        $numuniones->porcentaje=$request->get('porcentaje');
        $numuniones->idpjuridicas=$request->get('contratista');
        $numuniones->idunionestemporales=$request->get('unionestemporales');
        $numuniones->save();

        Flash::success('Relacion entre Contratista y Union Temporal  Agregada Satisfactoriamente.');

        return redirect(route('numuniones.index'));
    }

    /**
     * Display the specified Numuniones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $numuniones = $this->numunionesRepository->findWithoutFail($id);

        if (empty($numuniones)) {
            Flash::error('Numuniones not found');

            return redirect(route('numuniones.index'));
        }

        return view('numuniones.show')->with('numuniones', $numuniones);
    }

    /**
     * Show the form for editing the specified Numuniones.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $numuniones = $this->numunionesRepository->findWithoutFail($id);

        if (empty($numuniones)) {
            Flash::error('Numuniones not found');

            return redirect(route('numuniones.index'));
        }

        return view('numuniones.edit')->with('numuniones', $numuniones);
    }

    /**
     * Update the specified Numuniones in storage.
     *
     * @param  int              $id
     * @param UpdateNumunionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNumunionesRequest $request)
    {
        $numuniones = $this->numunionesRepository->findWithoutFail($id);

        if (empty($numuniones)) {
            Flash::error('Numuniones not found');

            return redirect(route('numuniones.index'));
        }

        $numuniones = $this->numunionesRepository->update($request->all(), $id);

        Flash::success('Numuniones updated successfully.');

        return redirect(route('numuniones.index'));
    }

    /**
     * Remove the specified Numuniones from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $numuniones = $this->numunionesRepository->findWithoutFail($id);

        if (empty($numuniones)) {
            Flash::error('Numuniones not found');

            return redirect(route('numuniones.index'));
        }

        $this->numunionesRepository->delete($id);

        Flash::success('Numuniones deleted successfully.');

        return redirect(route('numuniones.index'));
    }
}
