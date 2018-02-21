@extends('layouts.app')

@section('content')
<section class="content-header">
      <h1>Crear Nueva Correspondencia
        <small></small>
      </h1>
            {!! Breadcrumbs::render('correspondencias.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'correspondencias.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('correspondencias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
