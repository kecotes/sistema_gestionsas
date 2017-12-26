@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ejecucionfisicofinanciera
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ejecucionfisicofinanciera, ['route' => ['ejecucionfisicofinancieras.update', $ejecucionfisicofinanciera->id], 'method' => 'patch']) !!}

                        @include('ejecucionfisicofinancieras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection