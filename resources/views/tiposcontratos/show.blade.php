@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ver Tipo de contratos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tiposcontratos.show_fields')
                    <a href="{!! route('tiposcontratos.index') !!}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
