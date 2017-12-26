<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('plazoinicial', 'Plazoinicial:'); ?>

    <?php echo Form::text('plazoinicial', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechainiciacion', 'Fechainiciacion:'); ?>

    <?php echo Form::date('fechainiciacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechafinalizacion', 'Fechafinalizacion:'); ?>

    <?php echo Form::date('fechafinalizacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechasuspension Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechasuspension', 'Fechasuspension:'); ?>

    <?php echo Form::date('fechasuspension', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechareinicio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechareinicio', 'Fechareinicio:'); ?>

    <?php echo Form::date('fechareinicio', null, ['class' => 'form-control']); ?>

</div>

<!-- Adicciontiempo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('adicciontiempo', 'Adicciontiempo:'); ?>

    <?php echo Form::text('adicciontiempo', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechafinalizacionadiccion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechafinalizacionadiccion', 'Fechafinalizacionadiccion:'); ?>

    <?php echo Form::date('fechafinalizacionadiccion', null, ['class' => 'form-control']); ?>

</div>

<!-- Agregar Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('agregar', 'Agregar:'); ?>

    <?php echo Form::text('agregar', null, ['class' => 'form-control']); ?>

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

    <a href="<?php echo route('novedadesfechas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
