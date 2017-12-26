@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Listado de Balances Financieros  <a class="btn btn-success" href="{!! route('balancesfinancieros.create') !!}">Nuevo</a>
    </h1>
        {!! Breadcrumbs::render('balancesfinancieros') !!}  
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    @include('balancesfinancieros.search')
                 </h1>
                    @include('balancesfinancieros.table')
            </div>
        </div>
    </div>
@endsection

