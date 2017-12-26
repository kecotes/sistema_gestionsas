@extends('layouts.app')

@section('content')
    <section class="content-header">
      <h1>Nuevo Control de Equipos
        <small></small>
      </h1>
            {!! Breadcrumbs::render('actividadescontratos.create') !!}  
 </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'estadotiempo.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('estadotiempo.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
