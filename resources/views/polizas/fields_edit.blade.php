
<input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">

<!-- Fechaexpedicion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaexpedicion', 'Fecha Expedicion:') !!}
    {!! Form::date('fechaexpedicion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipopoliza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipopoliza', 'Tipo de Poliza:') !!}
    {!! Form::text('tipopoliza', null, ['class' => 'form-control']) !!}
</div>

<!-- Npoliza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('npoliza', 'No. de Poliza:') !!}
    {!! Form::text('npoliza', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipocertificado', 'Tipo de Certificado:') !!}
    {!! Form::text('tipocertificado', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('polizas.index') !!}" class="btn btn-default">Cancel</a>
</div>
