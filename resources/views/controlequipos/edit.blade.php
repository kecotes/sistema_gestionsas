@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Control de Equipos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($controlequipos, ['route' => ['controlequipos.update', $controlequipos->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('controlequipos.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection