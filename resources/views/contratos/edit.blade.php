@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contratos
        </h1>
   </section>
   <div class="content">
        @include('adminlte-templates::common.errors')
            {!! Form::model($contratos, ['route' => ['contratos.update', $contratos->id], 'method' => 'patch']) !!}
            <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                @include('contratos.fields_edit')
                </div>
            </div>
            </div>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Archivos de Contratacion</h3>
              <div class="box-body">
                @include('contratos.fields_edit_archivos')
              </div>
            </div>
          </div>

        {!! Form::close() !!}
   </div>
@endsection