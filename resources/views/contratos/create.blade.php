@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Crear nuevo Contrato
        <small></small>
      </h1>
            {!! Breadcrumbs::render('contratos.create') !!}  
 </section>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Atencion!</h4>
             Hola Administrador, quiero darte aviso que antes de que ingreses todos los datos del Contrato verifica si esta la Entidad Contratante que vas a utilizar, de no ser asi agrega una <a href="{!! route('entidadescontratantes.create') !!}">Nueva Entidad Contratante</a>, de ser nesesario tambien agrega un <a href="{!! route('residentes.create') !!}">Nuevo Residente</a> y un <a href="{!! route('tiposcontratos.create') !!}">Nuevo Tipo de Contrato</a>
            </div>
            <div class="box-header">
            </div>

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'contratos.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('contratos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
