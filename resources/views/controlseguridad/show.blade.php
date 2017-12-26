@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Control de Seguridad
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('controlseguridad.show_fields')
                    <a href="{!! route('controlseguridad.index') !!}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
