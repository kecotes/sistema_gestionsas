@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Numuniones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($numuniones, ['route' => ['numuniones.update', $numuniones->id], 'method' => 'patch']) !!}

                        @include('numuniones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection