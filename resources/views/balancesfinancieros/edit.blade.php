@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Balance financiero
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($balancesfinancieros, ['route' => ['balancesfinancieros.update', $balancesfinancieros->id], 'method' => 'patch', 'files'=>'true']) !!}

                        @include('balancesfinancieros.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection