<!--   Pnaturales   -->


<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellido', 'Apellido:'); ?>

    <?php echo Form::text('apellido', null, ['class' => 'form-control']); ?>

</div>


<!--   Funcionarios   -->


<!-- Usuario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('usuario', 'Usuario:'); ?>

    <?php echo Form::text('usuario', null, ['class' => 'form-control']); ?>

</div>

<!-- Contrasena Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('contrasena', 'Contrasena:'); ?>

    <?php echo Form::text('contrasena', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipofuncionario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipofuncionario', 'Tipo funcionario:'); ?>

    <?php echo Form::select('tipofuncionario', ['admin' => 'Administrador', 'residente' => 'Residente', 'secretario' => 'Secretario'], null, ['class' => 'form-control']); ?>

</div>

<!--   Permisos   -->


<!-- Tipopermiso Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipopermiso', 'Tipo de permiso:'); ?>

    <?php echo Form::select('tipopermiso', ['normal' => 'Limitado','todo' => 'Global'], null, ['class' => 'form-control']); ?>

</div>


<!--   Personas   -->


<!-- Direccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipodocumento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipodocumento', 'Tipo de Documento:'); ?>

    <?php echo Form::select('tipodocumento', ['cc' => 'CC','nit' => 'NIT','tp'=>'Tarjeta Profesional'], null, ['class' => 'form-control']); ?>

</div>


<!-- Documento Field -->
<div class="form-group col-sm-6">
  <?php echo Form::label('documento', 'Documento:'); ?>

  <?php echo Form::text('documento', null, ['class' => 'form-control']); ?>

</div>

<!-- Expedicion Field -->
<div class="form-group col-sm-6">
  <?php echo Form::label('expedicion', 'Expedicion:'); ?>

  <?php echo Form::text('expedicion', null, ['class' => 'form-control']); ?>

</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('residentes.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
