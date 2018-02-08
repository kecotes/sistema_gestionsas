@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Crear adiccion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'balancesfinancieros.store', 'enctype' => 'multipart/form-data']) !!}

                        <div class="form-group col-sm-12">
                            <label class="col-lg-2 control-label">Contrato:</label>
                            <div class="col-lg-10">
                            <select name="idcontratos" class="form-control">
                                <option value="0">Buscar...</option>
                                @foreach ($contratos as $contratos)
                                        <option value="{{$contratos->id}}"> {{$contratos->nocontrato}} </option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <!-- Valoradicional Field -->
                        <div class="form-group col-sm-6">
                        {!! Form::label('valoradicional', 'Valor adicional:') !!}
                        {!! Form::text('valoradicional', null, ['class' => 'form-control','placeholder' => '*Sin puntos ni comas. Poner 0 si no hay valor adicional']) !!}
                        </div>

                        <!-- Valoranticipoadicional Field -->
                        <div class="form-group col-sm-6">
                        {!! Form::label('valoranticipoadicional', 'Valor del anticipo adicional:') !!}
                        {!! Form::text('valoranticipoadicional', null, ['class' => 'form-control','placeholder' => '*Sin puntos ni comas. Poner 0 si no hay anticipo adicional']) !!}
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="exampleInputFile">Adjuntar Archivo</label>
                            <input type="file" name="file">
                        </div>

                        <input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('balancesfinancieros.index') !!}" class="btn btn-default">Cancel</a>
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
