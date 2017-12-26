<!--   Pjuridicas   -->


<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>


<!--   Personas   -->

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipodocumento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipodocumento', 'Tipo de Documento:') !!}
    {!! Form::select('tipodocumento', ['cc' => 'CC','nit' => 'NIT','tp'=>'Tarjeta Profesional'], null, ['class' => 'form-control']) !!}
</div>


<!-- Documento Field -->
<div class="form-group col-sm-6">
  {!! Form::label('documento', 'Documento:') !!}
  {!! Form::text('documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Expedicion Field -->
<div class="form-group col-sm-6">
  {!! Form::label('expedicion', 'Lugar de Expedicion:') !!}
  {!! Form::text('expedicion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Field -->
<!--
<div class="form-group col-sm-6">
    <label>Union Temporal</label>
    <select name="iduni" class="form-control">
        @foreach ($contratista as $contratista)
                <option value="{{$contratista->id}}"> {{$contratista->nombre}} </option>
        @endforeach
    </select>
</div> -->
<input type="hidden" name="porcentaje" value="0">


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('unionestemporales.index') !!}" class="btn btn-default">Cancelar</a>
</div>
