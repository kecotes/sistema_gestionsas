@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Control de Seguridad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($controlseguridad, ['route' => ['controlseguridad.update', $controlseguridad->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('controlseguridad.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection