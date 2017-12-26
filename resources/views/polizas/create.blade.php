@extends('layouts.app')

@section('content')
   <section class="content-header">
      <h1>Crear Nueva Poliza
        <small></small>
      </h1>
            {!! Breadcrumbs::render('polizas.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'polizas.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('polizas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
