@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Actividades del Contrato  <a class="btn btn-success" href="{!! route('actividadescontratos.create') !!}">Nuevo</a>
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
                    @include('actividadescontratos.table')
            </div>
        </div>
    </div>
@endsection

