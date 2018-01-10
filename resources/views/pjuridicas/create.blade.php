@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Crear Contratista
        </h1>
        {!! Breadcrumbs::render('pjuridicas.create') !!} 
    </section>

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informacion</h4>
                *Todos los campos son obligatorios, dejar tres rayas ( --- ) si no se tiene la informacion en el momento.
            </div>

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'pjuridicas.store']) !!}

                        @include('pjuridicas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
