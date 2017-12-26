<!-- Administracion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('administracion', 'Administracion:') !!}
    {!! Form::text('administracion', null, ['class' => 'form-control']) !!}
</div>

<!-- Administracionporcentaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('administracionporcentaje', 'Administracionporcentaje:') !!}
    {!! Form::text('administracionporcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Imprevisto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imprevisto', 'Imprevisto:') !!}
    {!! Form::text('imprevisto', null, ['class' => 'form-control']) !!}
</div>

<!-- Imprevistoporcentaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imprevistoporcentaje', 'Imprevistoporcentaje:') !!}
    {!! Form::text('imprevistoporcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Iddatosejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddatosejecucion', 'Iddatosejecucion:') !!}
    {!! Form::text('iddatosejecucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('anexosejecucionfisicofinancieras.index') !!}" class="btn btn-default">Cancel</a>
</div>
