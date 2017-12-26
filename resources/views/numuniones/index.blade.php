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
            <div class="box-body">
                    @include('numuniones.table')
            </div>
        </div>
    </div>
@endsection

