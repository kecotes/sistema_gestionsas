<!-- Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item', 'Item:') !!}
    {!! Form::text('item', null, ['class' => 'form-control']) !!}
</div>

<!-- Tema Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tema', 'Tema:') !!}
    {!! Form::text('tema', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ejecucionacumitem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ejecucionacumitem', 'Ejecucionacumitem:') !!}
    {!! Form::text('ejecucionacumitem', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcontratos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcontratos', 'Idcontratos:') !!}
    {!! Form::text('idcontratos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('datosejecucionfisicofinancieras.index') !!}" class="btn btn-default">Cancel</a>
</div>
