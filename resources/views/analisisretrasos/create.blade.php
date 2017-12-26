@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Nuevo Analisis Retrasos
        <small></small>
      </h1>
            {!! Breadcrumbs::render('actividadescontratos.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'analisisretrasos.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('analisisretrasos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
