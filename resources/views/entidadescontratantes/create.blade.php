@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entidad Contratante
        </h1>
        {!! Breadcrumbs::render('entidadescontratantes.create') !!} 
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'entidadescontratantes.store']) !!}

                        @include('entidadescontratantes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
