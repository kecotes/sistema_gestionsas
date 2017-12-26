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
    <?php echo Form::label('tipodocumento', 'Tipodocumento:'); ?>

    <?php echo Form::text('tipodocumento', null, ['class' => 'form-control']); ?>

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

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('personas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
