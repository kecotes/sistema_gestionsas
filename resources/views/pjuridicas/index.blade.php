@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Listado de Contratistas   <a class="btn btn-success" href="{!! route('pjuridicas.create') !!}">Nuevo</a>
        <small></small>
      </h1>
            {!! Breadcrumbs::render('pjuridicas') !!}  
 </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('pjuridicas.table')
            </div>
        </div>
    </div>
@endsection

