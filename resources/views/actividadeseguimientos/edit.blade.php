@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actividadeseguimiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actividadeseguimiento, ['route' => ['actividadeseguimientos.update', $actividadeseguimiento->id], 'method' => 'patch']) !!}

                        @include('actividadeseguimientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection