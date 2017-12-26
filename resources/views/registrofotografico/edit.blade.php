@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Registro Fotografico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($registrofotografico, ['route' => ['registrofotografico.update', $registrofotografico->id], 'method' => 'patch']) !!}

                        @include('registrofotografico.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection