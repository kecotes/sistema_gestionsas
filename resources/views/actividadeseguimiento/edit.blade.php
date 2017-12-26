@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actividades de Seguimiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actividadeseguimiento, ['route' => ['actividadeseguimiento.update', $actividadeseguimiento->id], 'method' => 'patch']) !!}

                        @include('actividadeseguimiento.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection