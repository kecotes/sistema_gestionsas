@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Entidad Contratantes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($entidadescontratantes, ['route' => ['entidadescontratantes.update', $entidadescontratantes->id], 'method' => 'patch']) !!}

                        @include('entidadescontratantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection