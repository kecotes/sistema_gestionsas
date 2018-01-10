@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Contratista y sus Uniones Temporales   <a class="btn btn-success" href="{!! route('numuniones.create') !!}">Nuevo</a>
        <small></small>
      </h1>
            {!! Breadcrumbs::render('numuniones') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="callout callout-info">
                <h4>¿Que funcion cumple esto?</h4>

                <p>Sirve para añadir un contratista a su Union temporal, dando click en nuevo lo podras hacer. El listado de abajo pertenece a una lista de datos del sistema propio</p>
              </div>
            <div class="box-body">
                    @include('numuniones.table')
            </div>
        </div>
    </div>
@endsection

