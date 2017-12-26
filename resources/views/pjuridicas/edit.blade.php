@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Contratista
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pjuridicas, ['route' => ['pjuridicas.update', $pjuridicas->id], 'method' => 'patch']) !!}

                        @include('pjuridicas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection