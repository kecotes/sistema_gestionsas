<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Contratos;
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


      public function crearPDF($datos,$vistaurl,$tipo)
    {
            $uh=1;
        $data = $datos;
        $contratos=DB::table('personas as p')
      ->join('contratos as c','p.id','=','c.idpersonas')
      ->join('entidadescontratantes as ec','ec.id','=','c.identidadescontrates')
      ->join('tiposcontratos as tc','tc.id','=','c.idtiposcontratos')
      ->where('c.id','=',$tipo);

        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date', 'contratos'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reporte',["contratos"=>$contratos]);
    }

    public function crear_reporte_porventa($tipo){
     //$persona->idventa=$venta->idventa;
     $vistaurl="pdf.reporte_por_venta";
     $contratos=Contratos::all();
     return $this->crearPDF($contratos, $vistaurl,$tipo);
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
