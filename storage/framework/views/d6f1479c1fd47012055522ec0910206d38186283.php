<!--   Pjuridicas   -->


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
  <?php echo Form::label('expedicion', 'Lugar de Expedicion:'); ?>

  <?php echo Form::text('expedicion', null, ['class' => 'form-control']); ?>

</div>



<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ciudad', 'Ciudad:'); ?>

    <?php echo Form::text('ciudad', null, ['class' => 'form-control']); ?>

</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('departamento', 'Departamento:'); ?>

    <?php echo Form::text('departamento', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipopjuridica Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipopjuridica', 'Tipo de persona juridica:'); ?>

    <?php echo Form::select('tipopjuridica', ['contratista' => 'Contratista', 'representante' => 'Representante legal'], null, ['class' => 'form-control']); ?>

</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('pjuridicas.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
