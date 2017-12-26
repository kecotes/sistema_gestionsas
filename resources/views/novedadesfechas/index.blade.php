@extends('layouts.app')

@section('content')
    <section class="content-header">
    
      <h1>Listado de las Novedades de Fechas  @if(Auth::user()->tipoUsuario == 1)<a class="btn btn-success" href="{!! route('novedadesfechas.create') !!}">Nuevo</a>@endif
        <small></small>
      </h1>
            {!! Breadcrumbs::render('novedadesfechas') !!}  
 </section>
    
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
             <h1 class="pull-right">
                    @include('novedadesfechas.search')
                 </h1>
                    @include('novedadesfechas.table')
            </div>
        </div>
    </div>
@endsection

