@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Tipos de Contratos
        </h1>
        {!! Breadcrumbs::render('tiposcontratos.create') !!}  
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tiposcontratos.store']) !!}

                        @include('tiposcontratos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
