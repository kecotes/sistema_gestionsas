@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actividadescontratos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actividadescontratos, ['route' => ['actividadescontratos.update', $actividadescontratos->id], 'method' => 'patch']) !!}

                        @include('actividadescontratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection