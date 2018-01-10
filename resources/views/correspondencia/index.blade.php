@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Correspondencia<a class="btn btn-success" href="{!! route('correspondencia.create') !!}">Nueva</a> 
        <small></small>
      </h1>
            {!! Breadcrumbs::render('correspondencia') !!}  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    @include('correspondencia.search')
                 </h1>
                    @include('correspondencia.table')
            </div>
            {{$correspondencia->render()}} 
        </div>
    </div>
@endsection

