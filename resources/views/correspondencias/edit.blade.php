@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Correspondencias
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($correspondencias, ['route' => ['correspondencias.update', $correspondencias->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('correspondencias.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection