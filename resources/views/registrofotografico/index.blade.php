@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Registro Fotografico @if($query != null) <a class="btn btn-success" href="createregistrofotografico/{{ $query }}">Nuevo</a>  
       @if($contratoid != null) <a class="btn btn-info" href="registrofoto/{{ $contratoid->id }}">Descargar ultima version</a> @endif @endif
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
                    @include('registrofotografico.search')
                 </h1>
                    @include('registrofotografico.table')
            </div>
            {{$registrofotografico->render()}} 
        </div>
    </div>
@endsection

