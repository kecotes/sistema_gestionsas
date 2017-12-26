
<!-- entidadcontratante Field -->
<div class="form-group col-sm-6">
    <label>Entidad contratante</label>
    <select name="identidadescontratantes" class="form-control">
        @foreach ($entidadescontratantes as $entidadescontratantes)
            @if ($entidadescontratantes->id==$contratos->identidadescontratantes)
				<option value="{{$entidadescontratantes->id}}"selected> {{$entidadescontratantes->nombre}} </option>
			@else
                <option value="{{$entidadescontratantes->id}}"> {{$entidadescontratantes->nombre}} </option>
            @endif
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('objetocontrato', 'Objeto del contrato:') !!}
    {!! Form::text('objetocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Nocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nocontrato', 'Nombre del contrato:') !!}
    {!! Form::text('nocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Ncontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ncontrato', 'Numero del contrato:') !!}
    {!! Form::text('ncontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Apodocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apodocontrato', 'Apodo del contrato:') !!}
    {!! Form::text('apodocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorcontratol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorcontratol', 'Valor del contrato (en letras):') !!}
    {!! Form::text('valorcontratol', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorcontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorcontrato', 'Valor del contrato:') !!}
    {!! Form::text('valorcontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipol', 'Valor del anticipo (en letras):') !!}
    {!! Form::text('valoranticipol', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipo', 'Valor del anticipo:') !!}
    {!! Form::text('valoranticipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porcentajeanticipo', 'Porcentaje del anticipo:') !!}
    {!! Form::text('porcentajeanticipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Formapago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formapago', 'Forma de pago:') !!}
    {!! Form::text('formapago', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoradicional', 'Valora dicional:') !!}
    {!! Form::text('valoradicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipoadicional', 'Valor ddel anticipo adicional:') !!}
    {!! Form::text('valoranticipoadicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plazoinicial', 'Plazo inicial:') !!}
    {!! Form::text('plazoinicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechainiciacion', 'Fecha iniciacion:') !!}
    {!! Form::date('fechainiciacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafinalizacion', 'Fecha finalizacion:') !!}
    {!! Form::date('fechafinalizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- tiposcontratos Field -->
<div class="form-group col-sm-6">
    <label>Tipo del contrato</label>
    <select name="idtiposcontratos" class="form-control">
        @foreach ($tiposcontratos as $tiposcontratos)
            @if ($tiposcontratos->id==$contratos->idtiposcontratos)
				<option value="{{$tiposcontratos->id}}"selected> {{$tiposcontratos->nombre}} </option>
			@else
                <option value="{{$tiposcontratos->id}}"> {{$tiposcontratos->nombre}} </option>
            @endif
        @endforeach
    </select>
</div>

<!-- Residentes Field -->
<div class="form-group col-sm-6">
    <label>Residentes encargado</label>
    <select name="idresidentes" class="form-control">
        @foreach ($residentes as $residentes)
            @if ($residentes->id==$contratos->idpersonas)
				<option value="{{$residentes->id}}"selected> {{$residentes->nombre}} </option>
			@else
                <option value="{{$residentes->id}}"> {{$residentes->nombre}} </option>
            @endif
        @endforeach
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contratos.index') !!}" class="btn btn-default">Cancel</a>
</div>
