<!--   Pjuridicas   -->


<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

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
    <?php echo Form::label('tipopjuridica', 'Tipo:'); ?>

    <?php echo Form::select('tipopjuridica', ['unionestemporales' => 'Union Temporal'], null, ['class' => 'form-control']); ?>

</div>

<!-- Porcentaje Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porcentaje', 'Porcentaje:'); ?>

    <?php echo Form::text('porcentaje', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('unionestemporales.index'); ?>" class="btn btn-default">Cancel</a>
</div>
