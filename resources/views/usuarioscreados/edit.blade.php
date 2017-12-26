@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuarioscreados
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usuarioscreados, ['route' => ['usuarioscreados.update', $usuarioscreados->id], 'method' => 'patch']) !!}

                        @include('usuarioscreados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection