<!-- Tipopermiso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipopermiso', 'Tipopermiso:') !!}
    {!! Form::text('tipopermiso', null, ['class' => 'form-control']) !!}
</div>

<!-- Idfuncionarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfuncionarios', 'Idfuncionarios:') !!}
    {!! Form::text('idfuncionarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('permisos.index') !!}" class="btn btn-default">Cancel</a>
</div>
