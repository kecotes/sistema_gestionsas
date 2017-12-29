
<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Correo:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Contrasena Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrasena', 'Contrasena:') !!}
    {!! Form::text('contrasena', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('residentes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
