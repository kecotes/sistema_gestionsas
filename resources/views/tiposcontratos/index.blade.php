@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Tipos de Contratos   <a class="btn btn-success" href="{!! route('tiposcontratos.create') !!}">Nuevo</a>
        <small></small>
      </h1>
            {!! Breadcrumbs::render('tiposcontratos') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('tiposcontratos.table')
            </div>
        </div>
    </div>
@endsection

