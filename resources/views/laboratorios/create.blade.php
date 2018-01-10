@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Nuevo laboratorio, certificado y pruebas de campo
        <small></small>
      </h1>
            {!! Breadcrumbs::render('actividadescontratos.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'laboratorios.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('laboratorios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
