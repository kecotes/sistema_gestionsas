<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpersonas', 'Idpersonas:') !!}
    {!! Form::text('idpersonas', null, ['class' => 'form-control']) !!}
</div>

<!-- Idusers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusers', 'Idusers:') !!}
    {!! Form::text('idusers', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarioscreados.index') !!}" class="btn btn-default">Cancel</a>
</div>
