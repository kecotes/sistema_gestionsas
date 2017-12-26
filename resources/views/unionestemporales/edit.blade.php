@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Union Temporal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($unionestemporales, ['route' => ['unionestemporales.update', $unionestemporales->id], 'method' => 'patch']) !!}

                        @include('unionestemporales.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection