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

<!-- Representante Field -->
<!--
<div class="form-group col-sm-6">
    <label>Union Temporal</label>
    <select name="iduni" class="form-control">
        <?php $__currentLoopData = $contratista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratista->id); ?>"> <?php echo e($contratista->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div> -->
<input type="hidden" name="porcentaje" value="0">


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('unionestemporales.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
