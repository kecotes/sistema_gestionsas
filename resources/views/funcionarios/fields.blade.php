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

<!-- Tipofuncionario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipofuncionario', 'Tipofuncionario:') !!}
    {!! Form::select('tipofuncionario', ['tech' => 'Technology', 'ls' => 'LifeStyle', 'edu' => 'Education', 'game' => 'Games'], null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpnaturales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpnaturales', 'Idpnaturales:') !!}
    {!! Form::text('idpnaturales', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('funcionarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
