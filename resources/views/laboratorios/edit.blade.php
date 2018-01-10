@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
         Laboratorios, certificado y pruebas de campo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($laboratorios, ['route' => ['laboratorios.update', $laboratorios->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('laboratorios.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection