<!-- Fechaexpedicion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechaexpedicion', 'Fechaexpedicion:'); ?>

    <?php echo Form::text('fechaexpedicion', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipopoliza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipopoliza', 'Tipopoliza:'); ?>

    <?php echo Form::text('tipopoliza', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- Idcontratos Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idcontratos', 'Idcontratos:'); ?>

    <?php echo Form::text('idcontratos', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('polizas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
