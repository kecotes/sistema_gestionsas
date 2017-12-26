@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Listado de los Estados de Polizas  <a class="btn btn-success" href="{!! route('estadospolizas.create') !!}">Nuevo</a>
        <small></small>
      </h1>
            {!! Breadcrumbs::render('estadospolizas') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            <h1 class="pull-right">
                    @include('estadospolizas.search')
                 </h1>
                    @include('estadospolizas.table')
            </div>
        </div>
    </div>
@endsection

