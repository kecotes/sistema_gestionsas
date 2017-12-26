@extends('layouts.app')

@section('content')
   <section class="content-header">
      <h1>Crear Nuevo Estado de Polizas
        <small></small>
      </h1>
            {!! Breadcrumbs::render('estadospolizas.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'estadospolizas.store']) !!}

                        @include('estadospolizas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
