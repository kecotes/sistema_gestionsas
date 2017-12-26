<!-- Tipoactividad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoactividad', 'Tipoactividad:') !!}
    {!! Form::text('tipoactividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoactividades.index') !!}" class="btn btn-default">Cancel</a>
</div>
