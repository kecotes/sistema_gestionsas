
<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoradicional', 'Valora dicional:') !!}
    {!! Form::text('valoradicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipoadicional', 'Valor anticipo adicional:') !!}
    {!! Form::text('valoranticipoadicional', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('adicciones.index') !!}" class="btn btn-default">Cancelar</a>
</div>
