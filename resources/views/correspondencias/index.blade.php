@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Listado de Correspondencias  <a class="btn btn-success" href="{!! route('correspondencias.create') !!}">Nuevo</a>
        <small></small>
      </h1>
            {!! Breadcrumbs::render('correspondencias') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            <h1 class="pull-right">
                    @include('correspondencias.search')
                 </h1>
                    @include('correspondencias.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

