@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Archivoscontratos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($archivoscontratos, ['route' => ['archivoscontratos.update', $archivoscontratos->id], 'method' => 'patch']) !!}

                        @include('archivoscontratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection