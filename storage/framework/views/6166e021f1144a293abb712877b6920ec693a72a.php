<!-- Archivo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('archivo', 'Archivo:'); ?>

    <?php echo Form::text('archivo', null, ['class' => 'form-control']); ?>

</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('titulo', 'Titulo:'); ?>

    <?php echo Form::text('titulo', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::text('descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idpersonas', 'Idpersonas:'); ?>

    <?php echo Form::text('idpersonas', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('archivospersonas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
