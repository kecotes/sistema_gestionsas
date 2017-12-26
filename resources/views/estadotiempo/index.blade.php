@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Estado de Tiempo <a class="btn btn-success" href="{!! route('estadotiempo.create') !!}">Nuevo</a><a class="btn btn-info" href="descargarEjeV/{{ $ultimaVersion->id }}">Descargar ultima version</a>
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
                    @include('estadotiempo.search')
                 </h1>
                    @include('estadotiempo.table')
            </div>
            {{$estadotiempo->render()}} 
        </div>
    </div>
@endsection

