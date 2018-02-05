@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Actividades de Seguimiento @if($query != null) <a class="btn btn-success" href="createactividadeseguimiento/{{ $query }}">Nuevo</a>
       @if($contratoid != null) <a class="btn btn-info" href="noo/{{ $contratoid->id }}">Descargar ultima version</a> @endif @endif
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
                    @include('actividadeseguimiento.search')
                 </h1>
                    @include('actividadeseguimiento.table')
            </div>
            {{$actividadeseguimiento->render()}} 
        </div>
    </div>
@endsection

