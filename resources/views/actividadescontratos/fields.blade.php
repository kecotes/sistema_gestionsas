
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        @foreach ($contratos as $contratos)
                <option value="{{$contratos->id}}"> {{$contratos->contratos}} </option>
        @endforeach
    </select>
    </div>
</div>

<!-- Idtipoactividades Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Tipo de Actividad:</label>
    <div class="col-lg-10">
    <select name="idtipoactividades" class="form-control">
        @foreach ($tipoactividades as $tipoactividades)
                <option value="{{$tipoactividades->id}}"> {{$tipoactividades->tipoactividad}} </option>
        @endforeach
    </select>
    </div>
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Contenido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contenido', 'Contenido:') !!}
    {!! Form::text('contenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actividadescontratos.index') !!}" class="btn btn-default">Cancel</a>
</div>
