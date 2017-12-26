@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Crear Novedad en Fecha
        <small></small>
      </h1>
            {!! Breadcrumbs::render('novedadesfechas.create') !!}  
 </section>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'novedadesfechas.store']) !!}

                        @include('novedadesfechas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
