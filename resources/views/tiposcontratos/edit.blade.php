@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Tipo de contrato
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tiposcontratos, ['route' => ['tiposcontratos.update', $tiposcontratos->id], 'method' => 'patch']) !!}

                        @include('tiposcontratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection