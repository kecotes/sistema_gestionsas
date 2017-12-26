@extends('layouts.app')

@section('content')
<section class="content-header">
<h1>Ejecuciones Fisico Financieras  <a class="btn btn-success" href="{!! route('ejecucionfisicofinancieras.create') !!}">Nuevo</a>
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
                    @include('ejecucionfisicofinancieras.table')
            </div>
            {{$ejecucionfisicofinancieras->render()}} 
        </div>
    </div>
@endsection

