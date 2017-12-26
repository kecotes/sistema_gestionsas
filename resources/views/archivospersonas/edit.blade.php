@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Archivospersonas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($archivospersonas, ['route' => ['archivospersonas.update', $archivospersonas->id], 'method' => 'patch']) !!}

                        @include('archivospersonas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection