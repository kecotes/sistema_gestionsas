@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Archivosbalancesfinancieros
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($archivosbalancesfinancieros, ['route' => ['archivosbalancesfinancieros.update', $archivosbalancesfinancieros->id], 'method' => 'patch']) !!}

                        @include('archivosbalancesfinancieros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection