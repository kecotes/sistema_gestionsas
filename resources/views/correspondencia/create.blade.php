@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Nueva Correspondencia
        <small></small>
      </h1>
            {!! Breadcrumbs::render('correspondencia.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'correspondencia.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('correspondencia.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
