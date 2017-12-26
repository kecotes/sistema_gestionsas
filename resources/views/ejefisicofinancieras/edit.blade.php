@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ejecucion fisico financiera
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ejefisicofinancieras, ['route' => ['ejefisicofinancieras.update', $ejefisicofinancieras->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('ejefisicofinancieras.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection