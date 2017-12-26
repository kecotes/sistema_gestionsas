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

<!-- Tipopnatural Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipopnatural', 'Tipopnatural:'); ?>

    <?php echo Form::text('tipopnatural', null, ['class' => 'form-control']); ?>

</div>

<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idpersonas', 'Idpersonas:'); ?>

    <?php echo Form::text('idpersonas', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('pnaturales.index'); ?>" class="btn btn-default">Cancel</a>
</div>
