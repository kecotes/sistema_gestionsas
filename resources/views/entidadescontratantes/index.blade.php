@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Listado de Entidades Contratantes   <a class="btn btn-success" href="{!! route('entidadescontratantes.create') !!}">Nuevo</a>
            <small></small>
        </h1>
                {!! Breadcrumbs::render('entidadescontratantes') !!}  
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('entidadescontratantes.table')
            </div>
        </div>
    </div>
@endsection

