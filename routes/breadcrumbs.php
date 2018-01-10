<?php

// Inicio
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', url('/'));
});

// Contratos
Breadcrumbs::register('contratos', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contratos', route('contratos.index'));
});

// Contratos.create
Breadcrumbs::register('contratos.create', function($breadcrumbs)
{
    $breadcrumbs->parent('contratos');
    $breadcrumbs->push('Nuevo Contrato', route('contratos.create'));
});

// Contratos.show
Breadcrumbs::register('contratos.show', function($breadcrumbs)
{
    $contratos = App\Models\contratos::find($id);
    $breadcrumbs->parent('contratos');
    $breadcrumbs->push($contratos->nocontrato, route('contratos.show',$contratos->id));
});

// Residentes
Breadcrumbs::register('residentes', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Personal', route('residentes.index'));
});

// Residentes.create
Breadcrumbs::register('residentes.create', function($breadcrumbs)
{
    $breadcrumbs->parent('residentes');
    $breadcrumbs->push('Nuevo Residente', route('residentes.create'));
});

// Residentes.show
Breadcrumbs::register('residentes.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('residentes');
    $breadcrumbs->push($resi->direccion, route('residentes.show',$resi->id));
});

// Contratistas
Breadcrumbs::register('pjuridicas', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contratistas', route('pjuridicas.index'));
});

// Contratistas.create
Breadcrumbs::register('pjuridicas.create', function($breadcrumbs)
{
    $breadcrumbs->parent('pjuridicas');
    $breadcrumbs->push('Nuevo Contratistas', route('pjuridicas.create'));
});

// Contratistas.show
Breadcrumbs::register('pjuridicas.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('pjuridicas');
    $breadcrumbs->push($resi->direccion, route('pjuridicas.show',$resi->id));
});

// Unionestemporales
Breadcrumbs::register('unionestemporales', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Uniones temporales', route('unionestemporales.index'));
});

// Contratistas.create
Breadcrumbs::register('unionestemporales.create', function($breadcrumbs)
{
    $breadcrumbs->parent('unionestemporales');
    $breadcrumbs->push('Nueva Union Temporal', route('unionestemporales.create'));
});

// Contratistas.show
Breadcrumbs::register('unionestemporales.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('unionestemporales');
    $breadcrumbs->push($resi->direccion, route('unionestemporales.show',$resi->id));
});


// Numuniones
Breadcrumbs::register('numuniones', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Relacion Contratista y Union Temporal', route('numuniones.index'));
});

// Numuniones.create
Breadcrumbs::register('numuniones.create', function($breadcrumbs)
{
    $breadcrumbs->parent('numuniones');
    $breadcrumbs->push('Nueva Relacion Contratista y Union Temporal', route('numuniones.create'));
});

// Numuniones.show
Breadcrumbs::register('numuniones.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('numuniones');
    $breadcrumbs->push($resi->direccion, route('numuniones.show',$resi->id));
});


// Novedadesfechas
Breadcrumbs::register('novedadesfechas', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Novedad Fecha', route('novedadesfechas.index'));
});

// Novedadesfechas.create
Breadcrumbs::register('novedadesfechas.create', function($breadcrumbs)
{
    $breadcrumbs->parent('novedadesfechas');
    $breadcrumbs->push('Nueva Novedad Fecha', route('novedadesfechas.create'));
});

// Novedadesfechas.show
Breadcrumbs::register('novedadesfechas.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('novedadesfechas');
    $breadcrumbs->push($resi->direccion, route('novedadesfechas.show',$resi->id));
});


// Polizas
Breadcrumbs::register('polizas', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Polizas', route('polizas.index'));
});

// Polizas.create
Breadcrumbs::register('polizas.create', function($breadcrumbs)
{
    $breadcrumbs->parent('polizas');
    $breadcrumbs->push('Nueva Poliza', route('polizas.create'));
});

// Polizas.show
Breadcrumbs::register('polizas.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('polizas');
    $breadcrumbs->push($resi->direccion, route('polizas.show',$resi->id));
});


// Estadospolizas
Breadcrumbs::register('estadospolizas', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Estados de  Polizas', route('estadospolizas.index'));
});

// Estadospolizas.create
Breadcrumbs::register('estadospolizas.create', function($breadcrumbs)
{
    $breadcrumbs->parent('estadospolizas');
    $breadcrumbs->push('Nueva Estado de Poliza', route('estadospolizas.create'));
});

// Estadospolizas.show
Breadcrumbs::register('estadospolizas.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('estadospolizas');
    $breadcrumbs->push($resi->direccion, route('estadospolizas.show',$resi->id));
});


// Actividadescontratos
Breadcrumbs::register('actividadescontratos', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Actividades del Contratos', route('actividadescontratos.index'));
});

// Actividadescontratos.create
Breadcrumbs::register('actividadescontratos.create', function($breadcrumbs)
{
    $breadcrumbs->parent('actividadescontratos');
    $breadcrumbs->push('Nueva Actividad del Contratos', route('actividadescontratos.create'));
});

// Actividadescontratos.show
Breadcrumbs::register('actividadescontratos.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('actividadescontratos');
    $breadcrumbs->push($resi->direccion, route('actividadescontratos.show',$resi->id));
});


// Balancesfinancieros
Breadcrumbs::register('balancesfinancieros', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Balances Financieros', route('balancesfinancieros.index'));
});

// Balancesfinancieros.create
Breadcrumbs::register('balancesfinancieros.create', function($breadcrumbs)
{
    $breadcrumbs->parent('balancesfinancieros');
    $breadcrumbs->push('Nuevo Balance Financiero', route('balancesfinancieros.create'));
});

// Balancesfinancieros.show
Breadcrumbs::register('balancesfinancieros.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('balancesfinancieros');
    $breadcrumbs->push($resi->direccion, route('balancesfinancieros.show',$resi->id));
});


// Tiposcontratos
Breadcrumbs::register('tiposcontratos', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tipos de Contrato', route('tiposcontratos.index'));
});

// Tiposcontratos.create
Breadcrumbs::register('tiposcontratos.create', function($breadcrumbs)
{
    $breadcrumbs->parent('tiposcontratos');
    $breadcrumbs->push('Nuevo Tipo de Contrato', route('tiposcontratos.create'));
});

// Tiposcontratos.show
Breadcrumbs::register('tiposcontratos.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('tiposcontratos');
    $breadcrumbs->push($resi->direccion, route('tiposcontratos.show',$resi->id));
});



// Entidadescontratantes
Breadcrumbs::register('entidadescontratantes', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Entidades Contratantes', route('tiposcontratos.index'));
});

// Entidadescontratantes.create
Breadcrumbs::register('entidadescontratantes.create', function($breadcrumbs)
{
    $breadcrumbs->parent('entidadescontratantes');
    $breadcrumbs->push('Nueva Entidad Contratantes', route('entidadescontratantes.create'));
});

// Entidadescontratantes.show
Breadcrumbs::register('entidadescontratantes.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('entidadescontratantes');
    $breadcrumbs->push($resi->direccion, route('entidadescontratantes.show',$resi->id));
});


// Correspondencia
Breadcrumbs::register('correspondencia', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Correspondencia', route('correspondencia.index'));
});

// Correspondencia.create
Breadcrumbs::register('correspondencia.create', function($breadcrumbs)
{
    $breadcrumbs->parent('correspondencia');
    $breadcrumbs->push('Nueva Correspondencia', route('correspondencia.create'));
});

// Correspondencia.show
Breadcrumbs::register('correspondencia.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('correspondencia');
    $breadcrumbs->push($resi->direccion, route('correspondencia.show',$resi->id));
});


// Laboratorio
Breadcrumbs::register('laboratorio', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Laboratorio, certificado y pruebas de campo', route('laboratorio.index'));
});

// Laboratorio.create
Breadcrumbs::register('laboratorio.create', function($breadcrumbs)
{
    $breadcrumbs->parent('laboratorio');
    $breadcrumbs->push('Nuevo Laboratorio, certificado y pruebas de campo', route('laboratorio.create'));
});

// Laboratorio.show
Breadcrumbs::register('laboratorio.show', function($breadcrumbs)
{
    $resi = App\Models\personas::find($resi);
    $breadcrumbs->parent('laboratorio');
    $breadcrumbs->push($resi->direccion, route('laboratorio.show',$resi->id));
});