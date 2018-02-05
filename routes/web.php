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

    //Personal
    Route::get('/home', 'HomeController@index');
    Route::resource('usuarioscreados', 'UsuarioscreadosController');
    Route::resource('personas', 'PersonasController');
    Route::resource('archivospersonas', 'ArchivospersonasController');
    Route::resource('pnaturales', 'PnaturalesController');
    Route::resource('residentes', 'ResidentesController');
    Route::resource('useredit', 'UserEditController');

    //Personas Juridicas
    Route::resource('funcionarios', 'FuncionariosController');
    Route::resource('permisos', 'PermisosController');
    Route::resource('pjuridicas', 'PjuridicasController');
    Route::resource('unionestemporales', 'UnionestemporalesController');
    
    Route::resource('contratos', 'ContratosController');

    //Documentos de Contratacion
    Route::resource('usuarioscontratados', 'UsuarioscontratadosController');
    Route::resource('entidadescontratantes', 'EntidadescontratantesController');
    Route::resource('tiposcontratos', 'TiposcontratosController');
    Route::resource('subcontratos', 'SubcontratosController');
    Route::resource('numuniones', 'NumunionesController');
    Route::resource('polizas', 'PolizasController');
    Route::resource('archivospolizas', 'ArchivospolizasController');
    Route::resource('estadospolizas', 'EstadospolizasController');
    Route::resource('novedadesfechas', 'NovedadesfechasController');
    Route::resource('datosejecucionfisicofinancieras', 'DatosejecucionfisicofinancieraController');
    Route::resource('anexosfisicofinancieras', 'AnexosfisicofinancieraController');
    Route::resource('anexosejecucionfisicofinancieras', 'AnexosejecucionfisicofinancieraController');
    Route::resource('balancesfinancieros', 'BalancesfinancierosController');
    Route::resource('archivosbalancesfinancieros', 'ArchivosbalancesfinancierosController');


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
    Route::resource('archivosactividadescontratos', 'ArchivosactividadescontratosController');
    Route::resource('laboratorios', 'LaboratorioController');
    Route::resource('correspondencia', 'CorrespondenciaController');
    
    // Vista Create con id del contrato
    Route::get('createcontrolequipos/{id}', 'ControlEquiposController@createcontrolequipos');
    Route::get('createcontrolseguridad/{id}', 'ControlSeguridadController@createcontrolseguridad');
    Route::get('createactividadeseguimiento/{id}', 'ActividadeSeguimientoController@createactividadeseguimiento');
    Route::get('createestadotiempo/{id}', 'EstadoTiempoController@createestadotiempo');
    Route::get('createregistrofotografico/{id}', 'RegistroFotograficoController@createregistrofotografico');
    Route::get('createanalisisretrasos/{id}', 'AnalisisRetrasosController@createanalisisretrasos');
    Route::get('createejefisicofinancieras/{id}', 'EjefisicofinancierasController@createejefisicofinancieras');
    Route::get('createlaboratorios/{id}', 'LaboratorioController@createlaboratorios');

    
    //Generador de pdf
    Route::resource('/pdf','PdfController@index'); 
    Route::resource('excel','ExcelController');
    Route::resource('/excel','ExcelController@index'); 



//  Descargas 
Route::get('descargar/{id}','ContratosController@descargar');
Route::get('contratos/descargarb/{id}','ContratosController@descargarb');
Route::get('contratos/descargarc/{id}','ContratosController@descargarc');

Route::get('descargarBalances/{id}','BalancesfinancierosController@descargarBalances');

Route::get('descargarPoliza/{id}','PolizasController@descargarPoliza');


//Descargar formato inicial para cada contrato
Route::get('descargarYoli/{id}','ControlEquiposController@descargarYoli');
Route::get('descargarCsV/{id}','ControlSeguridadController@descargarCsV');
Route::get('noo/{id}','ActividadeSeguimientoController@noo');
Route::get('descargarEtV/{id}','EstadoTiempoController@descargarEtV');
Route::get('registrofoto/{id}','RegistroFotograficoController@registrofoto');
Route::get('descargarArV/{id}','AnalisisRetrasosController@descargarArV');
Route::get('eje/{id}','EjefisicofinancierasController@eje');
Route::get('khe/{id}','LaboratorioController@khe');

//Descargar archivos que se meustran en la lista
Route::get('descargarEje/{id}','EjefisicofinancierasController@descargarEje');

Route::get('crear_reporte_porventa/{tipo}','PdfController@crear_reporte_porventa');


Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');



Route::resource('actividadeseguimientos', 'ActividadeseguimientoController');
