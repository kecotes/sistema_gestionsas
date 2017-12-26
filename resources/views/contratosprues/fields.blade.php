<!-- Entidadcontratante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidadcontratante', 'Entidadcontratante:') !!}
    {!! Form::text('entidadcontratante', null, ['class' => 'form-control']) !!}
</div>

<!-- Objetocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objetocontrato', 'Objetocontrato:') !!}
    {!! Form::text('objetocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Nocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nocontrato', 'Nocontrato:') !!}
    {!! Form::text('nocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Ncontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ncontrato', 'Ncontrato:') !!}
    {!! Form::text('ncontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Apodocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apodocontrato', 'Apodocontrato:') !!}
    {!! Form::text('apodocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorcontratol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorcontratol', 'Valorcontratol:') !!}
    {!! Form::text('valorcontratol', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorcontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorcontrato', 'Valorcontrato:') !!}
    {!! Form::text('valorcontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipol', 'Valoranticipol:') !!}
    {!! Form::text('valoranticipol', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipo', 'Valoranticipo:') !!}
    {!! Form::text('valoranticipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porcentajeanticipo', 'Porcentajeanticipo:') !!}
    {!! Form::text('porcentajeanticipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Formapago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formapago', 'Formapago:') !!}
    {!! Form::text('formapago', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoradicional', 'Valoradicional:') !!}
    {!! Form::text('valoradicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipoadicional', 'Valoranticipoadicional:') !!}
    {!! Form::text('valoranticipoadicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plazoinicial', 'Plazoinicial:') !!}
    {!! Form::text('plazoinicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechainiciacion', 'Fechainiciacion:') !!}
    {!! Form::text('fechainiciacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafinalizacion', 'Fechafinalizacion:') !!}
    {!! Form::text('fechafinalizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipocontrato', 'Tipocontrato:') !!}
    {!! Form::text('tipocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpersonas', 'Idpersonas:') !!}
    {!! Form::text('idpersonas', null, ['class' => 'form-control']) !!}
</div>

<!-- Identidadescontratantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identidadescontratantes', 'Identidadescontratantes:') !!}
    {!! Form::text('identidadescontratantes', null, ['class' => 'form-control']) !!}
</div>

<!-- Idtiposcontratos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtiposcontratos', 'Idtiposcontratos:') !!}
    {!! Form::text('idtiposcontratos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contratosprues.index') !!}" class="btn btn-default">Cancel</a>
</div>
