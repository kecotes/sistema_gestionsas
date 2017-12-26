<!-- Actaparcial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('actaparcial', 'Actaparcial:'); ?>

    <?php echo Form::text('actaparcial', null, ['class' => 'form-control']); ?>

</div>

<!-- Pendientepagar Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pendientepagar', 'Pendientepagar:'); ?>

    <?php echo Form::text('pendientepagar', null, ['class' => 'form-control']); ?>

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

<!-- Idtipoactividades Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idtipoactividades', 'Idtipoactividades:'); ?>

    <?php echo Form::text('idtipoactividades', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('balancesfinancieros.index'); ?>" class="btn btn-default">Cancel</a>
</div>
