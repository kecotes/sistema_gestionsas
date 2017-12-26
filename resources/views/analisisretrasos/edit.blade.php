@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Analisis Retrasos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($analisisretrasos, ['route' => ['analisisretrasos.update', $analisisretrasos->id], 'method' => 'patch']) !!}

                        @include('analisisretrasos.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection