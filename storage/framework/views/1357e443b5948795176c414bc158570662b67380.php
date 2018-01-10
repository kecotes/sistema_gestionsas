<!-- contratista Field -->
<div class="form-group col-sm-6">
    <label>Contratista</label>
    <select name="contratista" class="form-control">
        <?php $__currentLoopData = $contratista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratista->id); ?>"> <?php echo e($contratista->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- uniontemporal Field -->
<div class="form-group col-sm-6">
    <label>Union Temporal</label>
    <select name="unionestemporales" class="form-control">
        <?php $__currentLoopData = $unionestemporales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unionestemporales): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($unionestemporales->id); ?>"> <?php echo e($unionestemporales->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porcentaje', 'Porcentaje:'); ?>

    <?php echo Form::text('porcentaje', null, ['class' => 'form-control']); ?>

<<<<<<< HEAD
    <span class="help-block">*Valor en decimales (Ej. 0.20 que equivale al 20%)</span>
=======
>>>>>>> 09008b5a2ccac7b724849fb424ed165022bbbcfb
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('numuniones.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
