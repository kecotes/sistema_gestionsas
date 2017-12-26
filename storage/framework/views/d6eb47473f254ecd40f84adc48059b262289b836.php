<!-- Tipopermiso Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipopermiso', 'Tipopermiso:'); ?>

    <?php echo Form::text('tipopermiso', null, ['class' => 'form-control']); ?>

</div>

<!-- Idfuncionarios Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idfuncionarios', 'Idfuncionarios:'); ?>

    <?php echo Form::text('idfuncionarios', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('permisos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
