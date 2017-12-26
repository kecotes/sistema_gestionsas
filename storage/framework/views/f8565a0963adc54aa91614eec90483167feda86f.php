<!-- Amparo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('amparo', 'Amparo:'); ?>

    <?php echo Form::text('amparo', null, ['class' => 'form-control']); ?>

</div>

<!-- Vigenciadesde Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('vigenciadesde', 'Vigenciadesde:'); ?>

    <?php echo Form::text('vigenciadesde', null, ['class' => 'form-control']); ?>

</div>

<!-- Vigenciahasta Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('vigenciahasta', 'Vigenciahasta:'); ?>

    <?php echo Form::text('vigenciahasta', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorasegurado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorasegurado', 'Valorasegurado:'); ?>

    <?php echo Form::text('valorasegurado', null, ['class' => 'form-control']); ?>

</div>

<!-- Estadopoliza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estadopoliza', 'Estadopoliza:'); ?>

    <?php echo Form::text('estadopoliza', null, ['class' => 'form-control']); ?>

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

    <a href="<?php echo route('estadospolizas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
