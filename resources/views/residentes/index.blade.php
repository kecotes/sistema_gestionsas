@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Listado del Personal  @if(Auth::user()->tipoUsuario == 1)<a class="btn btn-success" href="{!! route('residentes.create') !!}">Nuevo</a>@endif
        <small></small>
      </h1>
            {!! Breadcrumbs::render('residentes') !!}  
 </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    @include('residentes.search')
                 </h1>

                    @include('residentes.table')
            </div>
        </div>
    </div>
@endsection
