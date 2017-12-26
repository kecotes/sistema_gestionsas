@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contratosprue
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contratosprue, ['route' => ['contratosprues.update', $contratosprue->id], 'method' => 'patch']) !!}

                        @include('contratosprues.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection