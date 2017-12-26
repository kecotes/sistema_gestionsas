@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ejecucion fisico financiera
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ejefisicofinancieras.show_fields')
                    <a href="{!! route('ejefisicofinancieras.index') !!}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
