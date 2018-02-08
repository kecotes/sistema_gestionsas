@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Adicíon
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($adicciones, ['route' => ['adicciones.update', $adicciones->id], 'method' => 'patch']) !!}

                        @include('adicciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection