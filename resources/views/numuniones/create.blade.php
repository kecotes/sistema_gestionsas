@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Añadir Contratista a su Union Temporal
        </h1>
        {!! Breadcrumbs::render('numuniones.create') !!} 
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'numuniones.store']) !!}

                        @include('numuniones.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
