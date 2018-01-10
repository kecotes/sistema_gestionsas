<!--   Pjuridicas   -->


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

<!-- Tipopjuridica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipopjuridica', 'Tipo de persona juridica:') !!}
    {!! Form::select('tipopjuridica', ['contratista' => 'Contratista', 'representante' => 'Representante legal'], null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('pjuridicas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
