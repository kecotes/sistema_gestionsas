<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipopnatural Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipopnatural', 'Tipopnatural:') !!}
    {!! Form::text('tipopnatural', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpersonas', 'Idpersonas:') !!}
    {!! Form::text('idpersonas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pnaturales.index') !!}" class="btn btn-default">Cancel</a>
</div>
