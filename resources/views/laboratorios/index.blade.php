@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Laboratorios, certificado y pruebas de campo <a class="btn btn-success" href="{!! route('laboratorios.create') !!}">Nuevo</a> @if($contratoid != null) <a class="btn btn-info" href="descargarLab/{{ $contratoid->id }}">Descargar ultima version</a> @endif
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

