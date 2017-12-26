@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Control de Equipos <a class="btn btn-success" href="{!! route('analisisretrasos.create') !!}">Nuevo</a><a class="btn btn-info" href="descargarEjeV/{{ $ultimaVersion->id }}">Descargar ultima version</a>
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
                    @include('analisisretrasos.search')
                 </h1>
                    @include('analisisretrasos.table')
            </div>
            {{$analisisretrasos->render()}} 
        </div>
    </div>
@endsection

