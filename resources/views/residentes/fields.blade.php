<!--   Pnaturales   -->


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


<!--   Funcionarios   -->


<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Correo:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Contrasena Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrasena', 'Contrasena:') !!}
    {!! Form::text('contrasena', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipofuncionario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipofuncionario', 'Tipo funcionario:') !!}
    {!! Form::select('tipofuncionario', ['1' => 'Administrador', '2' => 'Residente'], null, ['class' => 'form-control']) !!}
</div>

<!--   Permisos   -->


<!-- Tipopermiso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipopermiso', 'Tipo de permiso:') !!}
    {!! Form::select('tipopermiso', ['normal' => 'Limitado','todo' => 'Global'], null, ['class' => 'form-control']) !!}
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

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Imagen</label>
    <input type="file" name="file">
    </div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('residentes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
