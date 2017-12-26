<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use  App\Models\contratos;
use App\Models\Tiposcontratos;
use App\Models\Entidadescontratantes;
use App\Models\Pnaturales;

class ExcelController extends Controller
{
    public function index()
 {
 
        Excel::create('Laravel Excel', function($excel) {
 
            $excel->sheet('contratos', function($sheet) {
 
                $contratos = contratos::all();
 
                $sheet->fromArray($contratos);
 
            });
        })->export('xls');
 
 }
}
