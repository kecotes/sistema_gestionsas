<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Contratos;
use  App\Models\Polizas;
use App\Models\Tiposcontratos;
use App\Models\Entidadescontratantes;
use App\Models\Pnaturales;

use DB;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class PdfController extends Controller
{
    public function index()
    {
        $contratos = Contratos::all();
        return view("pdf.index")->with('contratos', $contratos);
    } 


    public function crearPDF($datos, $polizas, $estadospolizas, $correspondenciasEnviada, $correspondenciasRecibida, $balancesfinancieros, $vistaurl,$tipo)
    {
            $uh=1;
        $data = $datos;
        $poli =$polizas;
        

        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'poli', 'estadospolizas', 'correspondenciasEnviada', 'correspondenciasRecibida', 'balancesfinancieros', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reporte',["data"=>$data]);
    }

    public function crear_reporte_porventa($tipo){
     //$persona->idventa=$venta->idventa;
     $vistaurl="pdf.reporte_por_venta";
     $contratos=DB::table('contratos')
      ->where('id','=',$tipo)->get();

      $polizas=DB::table('polizas')
      ->where('idcontratos','=',$tipo)->get();

      $estadospolizas=DB::table('estadospolizas')->where('idcontratos','=',$tipo)->whereNull('deleted_at')->get();

      $correspondenciasEnviada=DB::table('personas as p')
        ->join('contratos as c','p.id','=','c.idpersonas')
        ->join('correspondencias as co','c.id','=','co.idcontratos')
        ->select('co.id','co.tipo','co.destinatario','co.remitente','co.archivo','co.fecha','co.asunto')
        ->where('idcontratos','=',$tipo)
        ->where('tipo','=','Enviada')
        ->whereNull('co.deleted_at')->get();

        $correspondenciasRecibida=DB::table('personas as p')
        ->join('contratos as c','p.id','=','c.idpersonas')
        ->join('correspondencias as co','c.id','=','co.idcontratos')
        ->select('co.id','co.tipo','co.destinatario','co.remitente','co.archivo','co.fecha','co.asunto')
        ->where('idcontratos','=',$tipo)
        ->where('tipo','=','Recibida')
        ->whereNull('co.deleted_at')->get();

        $balancesfinancieros=DB::table('balancesfinancieros as bf')
      ->join('archivosbalancesfinancieros as abf','bf.id','=','abf.idbalancesfinancieros')
      ->select('bf.id','abf.id as idarchbalances','abf.archivo','bf.actaparcial','bf.estado','bf.pendientepagar')
      ->where('idcontratos','=',$tipo)->whereNull('bf.deleted_at')->get();

     return $this->crearPDF($contratos, $polizas, $estadospolizas, $correspondenciasEnviada, $correspondenciasRecibida, $balancesfinancieros, $vistaurl, $tipo);
//venta = datos;
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
