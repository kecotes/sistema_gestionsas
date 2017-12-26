@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Registro Fotografico
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('registrofotografico.show_fields')
                    <a href="{!! route('registrofotografico.index') !!}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
