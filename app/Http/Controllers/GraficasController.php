<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Actividadescontratos;
use App\Models\Tipoactividades;
use App\Models\Contratos;
use App\Models\Tiposcontratos;
use App\Models\Entidadescontratantes;
use App\Models\Pnaturales;
use App\Models\Personas;
use App\Models\Pjuridicas;
use App\Models\Unionestemporales;
use App\Models\Archivoscontratos;
use App\Models\Novedadesfechas;
use App\Models\Balancesfinancieros;
use App\Models\Archivosbalancesfinancieros;
use App\Models\Correspondencias;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getUltimoDiaMes($elAnio,$elMes) {
     return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }



    public function registros_mes($anio,$mes)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $usuarios=User::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($usuarios);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;     
        }

        foreach($usuarios as $usuario){
        $diasel=intval(date("d",strtotime($usuario->created_at) ) );
        $registros[$diasel]++;    
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return   json_encode($data);
    }


    public function total_publicaciones(){
        $tipospublicacion=Tipoactividades::all();
        $ctp=count($tipospublicacion);
        $publicaciones=Actividadescontratos::all();
        $ct =count($publicaciones);
        
        for($i=0;$i<=$ctp-1;$i++){
         $idTP=$tipospublicacion[$i]->id;
         $numerodepubli[$idTP]=0;
        }

        for($i=0;$i<=$ct-1;$i++){
         $idTP=$publicaciones[$i]->idtipoactividades;
         $numerodepubli[$idTP]++;
           
        }

        $data=array("totaltipos"=>$ctp,"tipos"=>$tipospublicacion, "numerodepubli"=>$numerodepubli);
        return json_encode($data);
    }


    public function index()
    {
        $contratos=Contratos::all();
        $ctpc=count($contratos);

        $correspondencias=Correspondencias::whereNull('deleted_at')->get();
        $ccrr=count($correspondencias);

        $users=User::whereNull('deleted_at')->get();
        $ctur=count($users);

        $actividadescontratos=Actividadescontratos::whereNull('deleted_at')->get();
        $ctac=count($actividadescontratos);


        $anio=date("Y");
        $mes=date("m");
        return view("home")
               ->with("anio",$anio)
               ->with("mes",$mes)
               ->with("ctpc",$ctpc)
               ->with("ccrr",$ccrr)
               ->with("ctur",$ctur)
               ->with("ctac",$ctac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
