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
