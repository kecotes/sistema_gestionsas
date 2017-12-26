@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Datosejecucionfisicofinanciera
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('datosejecucionfisicofinancieras.show_fields')
                    <a href="{!! route('datosejecucionfisicofinancieras.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
