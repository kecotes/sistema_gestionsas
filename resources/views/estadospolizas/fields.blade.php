
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        @foreach ($contratos as $contratos)
                <option value="{{$contratos->id}}"> {{$contratos->nocontrato}} </option>
        @endforeach
    </select>
    </div>
</div>

<!-- Amparo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amparo', 'Amparo:') !!}
    {!! Form::text('amparo', null, ['class' => 'form-control']) !!}
</div>

<!-- Vigenciadesde Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vigenciadesde', 'Vigencia desde:') !!}
    {!! Form::date('vigenciadesde', null, ['class' => 'form-control']) !!}
</div>

<!-- Vigenciahasta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vigenciahasta', 'Vigencia hasta:') !!}
    {!! Form::date('vigenciahasta', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorasegurado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorasegurado', 'Valor asegurado:') !!}
    {!! Form::text('valorasegurado', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']) !!}
</div>

<!-- Estadopoliza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadopoliza', 'Estado de poliza:') !!}
    {!! Form::text('estadopoliza', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('estadospolizas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
