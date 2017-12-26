@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Listado de Uniones Temporales   <a class="btn btn-success" href="{!! route('unionestemporales.create') !!}">Nuevo</a>
        <small></small>
      </h1>
            {!! Breadcrumbs::render('unionestemporales') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('unionestemporales.table')
            </div>
        </div>
    </div>
@endsection

