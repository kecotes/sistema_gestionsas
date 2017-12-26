@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Archivosactividadescontratos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($archivosactividadescontratos, ['route' => ['archivosactividadescontratos.update', $archivosactividadescontratos->id], 'method' => 'patch']) !!}

                        @include('archivosactividadescontratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection