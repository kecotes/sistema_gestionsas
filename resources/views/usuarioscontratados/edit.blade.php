@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuarioscontratados
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usuarioscontratados, ['route' => ['usuarioscontratados.update', $usuarioscontratados->id], 'method' => 'patch']) !!}

                        @include('usuarioscontratados.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection