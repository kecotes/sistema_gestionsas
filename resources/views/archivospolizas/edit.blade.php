@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Archivospolizas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($archivospolizas, ['route' => ['archivospolizas.update', $archivospolizas->id], 'method' => 'patch']) !!}

                        @include('archivospolizas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection