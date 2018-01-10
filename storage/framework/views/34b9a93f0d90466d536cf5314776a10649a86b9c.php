<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::text('direccion', null, ['class' => 'form-control']); ?>

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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('entidadescontratantes.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
