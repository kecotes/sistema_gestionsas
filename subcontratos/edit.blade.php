@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Subcontratos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subcontratos, ['route' => ['subcontratos.update', $subcontratos->id], 'method' => 'patch']) !!}

                        @include('subcontratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection