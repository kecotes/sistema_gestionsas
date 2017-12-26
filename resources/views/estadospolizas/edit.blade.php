@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estados de Polizas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estadospolizas, ['route' => ['estadospolizas.update', $estadospolizas->id], 'method' => 'patch']) !!}

                        @include('estadospolizas.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection