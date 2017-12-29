@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Control de Seguridad <a class="btn btn-success" href="{!! route('controlseguridad.create') !!}">Nuevo</a> @if($contratoid != null) <a class="btn btn-info" href="descargarCsV/{{ $contratoid->id }}">Descargar ultima version</a> @endif
        <small></small>
      </h1>
            {!! Breadcrumbs::render('actividadescontratos') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    @include('controlseguridad.search')
                 </h1>
                    @include('controlseguridad.table')
            </div>
            {{$controlseguridad->render()}} 
        </div>
    </div>
@endsection

