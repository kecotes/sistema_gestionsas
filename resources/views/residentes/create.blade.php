@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Crear Residente
        </h1>
        {!! Breadcrumbs::render('residentes.create') !!} 
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'residentes.store', 'enctype' => 'multipart/form-data'] ) !!}

                        @include('residentes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
