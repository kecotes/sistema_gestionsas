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

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Descripcion de la Adiccion:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control' , 'placeholder' => '*Ej: Adicíon 1']) !!}
</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoradicional', 'Valora dicional:') !!}
    {!! Form::text('valoradicional', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']) !!}
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipoadicional', 'Valor anticipo adicional:') !!}
    {!! Form::text('valoranticipoadicional', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('adicciones.index') !!}" class="btn btn-default">Cancelar</a>
</div>
