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
                   {!! Form::model($estadotiempo, ['route' => ['estadotiempo.update', $estadotiempo->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('estadotiempo.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection