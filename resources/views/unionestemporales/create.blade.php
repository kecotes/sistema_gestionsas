@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Crear Union temporal
        </h1>
        {!! Breadcrumbs::render('unionestemporales.create') !!} 
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'unionestemporales.store']) !!}

                        @include('unionestemporales.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
