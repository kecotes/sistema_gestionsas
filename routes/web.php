<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});


Auth::routes();

//rutas accessibles solo si el usuario esta autenticado y ha ingresado al sistema


    Route::get('/home', 'HomeController@index');
    Route::resource('usuarioscreados', 'UsuarioscreadosController');
    Route::resource('personas', 'PersonasController');
    Route::resource('archivospersonas', 'ArchivospersonasController');
    Route::resource('pnaturales', 'PnaturalesController');
    
    Route::resource('contratos', 'ContratosController');

    Route::resource('archivosactividadescontratos', 'ArchivosactividadescontratosController');
    Route::resource('novedadesfechas', 'NovedadesfechasController');
    Route::resource('datosejecucionfisicofinancieras', 'DatosejecucionfisicofinancieraController');
    Route::resource('anexosfisicofinancieras', 'AnexosfisicofinancieraController');
    Route::resource('anexosejecucionfisicofinancieras', 'AnexosejecucionfisicofinancieraController');
    Route::resource('residentes', 'ResidentesController');

    //Actividades contratos
    Route::resource('tipoactividades', 'TipoactividadesController');
    Route::resource('actividadescontratos', 'ActividadescontratosController');
    Route::resource('controlequipos', 'ControlEquiposController');
    Route::resource('controlseguridad', 'ControlSeguridadController');
    Route::resource('actividadeseguimiento', 'ActividadeSeguimientoController');
    Route::resource('estadotiempo', 'EstadoTiempoController');
    Route::resource('registrofotografico', 'RegistroFotograficoController');
    Route::resource('analisisretrasos', 'AnalisisRetrasosController');
    Route::resource('ejefisicofinancieras', 'EjefisicofinancierasController');
    

    Route::resource('funcionarios', 'FuncionariosController');
    Route::resource('permisos', 'PermisosController');
    Route::resource('pjuridicas', 'PjuridicasController');
    Route::resource('unionestemporales', 'UnionestemporalesController');


    Route::resource('entidadescontratantes', 'EntidadescontratantesController');
    Route::resource('tiposcontratos', 'TiposcontratosController');
    Route::resource('subcontratos', 'SubcontratosController');
    Route::resource('numuniones', 'NumunionesController');
    Route::resource('polizas', 'PolizasController');
    Route::resource('archivospolizas', 'ArchivospolizasController');
    Route::resource('estadospolizas', 'EstadospolizasController');


    Route::resource('balancesfinancieros', 'BalancesfinancierosController');
    Route::resource('archivosbalancesfinancieros', 'ArchivosbalancesfinancierosController');

    Route::resource('/pdf','PdfController@index'); 
    Route::resource('excel','ExcelController');
    Route::resource('/excel','ExcelController@index'); 

//  Descargas
Route::get('crear_reporte_porventa/{tipo}','PdfController@crear_reporte_porventa'); 
Route::get('descargar/{id}','ContratosController@descargar');
Route::get('contratos/descargarb/{id}','ContratosController@descargarb');
Route::get('contratos/descargarc/{id}','ContratosController@descargarc');
Route::get('descargarBalances/{id}','BalancesfinancierosController@descargarBalances');

//Route::get('show.descargar/{id}','ContratosController@descargar');  
Route::get('descargarEje/{id}','EjefisicofinancierasController@descargarEje'); 
Route::get('descargarEjeV/{id}','EjefisicofinancierasController@descargarEjeV');
Route::get('descargarPoliza/{id}','PolizasController@descargarPoliza');









Route::resource('usuarioscontratados', 'UsuarioscontratadosController');