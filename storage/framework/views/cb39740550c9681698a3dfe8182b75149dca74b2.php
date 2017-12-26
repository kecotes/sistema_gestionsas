<!-- Item Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('item', 'Item:'); ?>

    <?php echo Form::text('item', null, ['class' => 'form-control']); ?>

</div>

<!-- Tema Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tema', 'Tema:'); ?>

    <?php echo Form::text('tema', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::text('descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Unidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('unidad', 'Unidad:'); ?>

    <?php echo Form::text('unidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Valunitario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valunitario', 'Valunitario:'); ?>

    <?php echo Form::text('valunitario', null, ['class' => 'form-control']); ?>

</div>

<!-- Proyectadocantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('proyectadocantidad', 'Proyectadocantidad:'); ?>

    <?php echo Form::text('proyectadocantidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Proyectadototalunitario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('proyectadototalunitario', 'Proyectadototalunitario:'); ?>

    <?php echo Form::text('proyectadototalunitario', null, ['class' => 'form-control']); ?>

</div>

<!-- Proyectadoporcentaje Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('proyectadoporcentaje', 'Proyectadoporcentaje:'); ?>

    <?php echo Form::text('proyectadoporcentaje', null, ['class' => 'form-control']); ?>

</div>

<!-- Ejecutadocantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ejecutadocantidad', 'Ejecutadocantidad:'); ?>

    <?php echo Form::text('ejecutadocantidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Ejecutadototalunitario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ejecutadototalunitario', 'Ejecutadototalunitario:'); ?>

    <?php echo Form::text('ejecutadototalunitario', null, ['class' => 'form-control']); ?>

</div>

<!-- Ejecutadoporcentaje Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ejecutadoporcentaje', 'Ejecutadoporcentaje:'); ?>

    <?php echo Form::text('ejecutadoporcentaje', null, ['class' => 'form-control']); ?>

</div>

<!-- Porejecutarcantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porejecutarcantidad', 'Porejecutarcantidad:'); ?>

    <?php echo Form::text('porejecutarcantidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Porejecutartotalunitario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porejecutartotalunitario', 'Porejecutartotalunitario:'); ?>

    <?php echo Form::text('porejecutartotalunitario', null, ['class' => 'form-control']); ?>

</div>

<!-- Porejecutarporcentaje Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porejecutarporcentaje', 'Porejecutarporcentaje:'); ?>

    <?php echo Form::text('porejecutarporcentaje', null, ['class' => 'form-control']); ?>

</div>

<!-- Iddatosejecucion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('iddatosejecucion', 'Iddatosejecucion:'); ?>

    <?php echo Form::text('iddatosejecucion', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('ejecucionfisicofinancieras.index'); ?>" class="btn btn-default">Cancel</a>
</div>
