@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Laboratorios, certificado y pruebas de campo @if($query != null) <a class="btn btn-success" href="createlaboratorios/{{ $query }}">Nuevo</a> 
       @if($contratoid != null) <a class="btn btn-info" href="khe/{{ $contratoid->id }}">Descargar ultima version</a> @endif @endif
        <small></small>
      </h1>

 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    @include('laboratorios.search')
                 </h1>
                    @include('laboratorios.table')
            </div>
            {{$laboratorios->render()}} 
        </div>
    </div>
@endsection

