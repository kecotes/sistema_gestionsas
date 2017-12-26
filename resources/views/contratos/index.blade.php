@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Administrar Contratos
        <small></small>
      </h1>
            {!! Breadcrumbs::render('contratos') !!}  
 </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    @include('contratos.search')
                 </h1>
                    @include('contratos.table')
            </div>
            {{$contratos->render()}} 
        </div>
    </div>
@endsection

