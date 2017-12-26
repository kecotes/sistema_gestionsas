@extends('layouts.app')

@section('content')
<section class="content-header">
<h1>Ejecuciones Fisico Financieras  <a class="btn btn-success" href="{!! route('ejefisicofinancieras.create') !!}">Nuevo</a><a class="btn btn-info" href="descargarEjeV/{{ $ultimaVersion->id }}">Descargar ultima version</a>
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
                    @include('ejefisicofinancieras.search')
                 </h1>
                 <!-- <center><h3>{{ $contratosh1->nocontrato }}</h3></center> -->
                    @include('ejefisicofinancieras.table')
            </div>
            {{$ejefisicofinancieras->render()}} 
        </div>
    </div>
@endsection

