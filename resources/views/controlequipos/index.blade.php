@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Control de Equipos <a class="btn btn-success" href="{!! route('controlequipos.create') !!}">Nuevo</a> @if($contratoid != null) <a class="btn btn-info" href="descargarCeV/{{ $contratoid->id }}">Descargar ultima version</a> @endif
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
                    @include('controlequipos.search')
                 </h1>
                    @include('controlequipos.table')
            </div>
            {{$controlequipos->render()}} 
        </div>
    </div>
@endsection

