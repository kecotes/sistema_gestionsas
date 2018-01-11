<!-- Idcontratos Field -->
<div class="form-group col-sm-6">
<label>Contrato:</label>
<select name="idcontratos" class="form-control">
    <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->contratos); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</select>
</div>

<!-- uniontemporal Field -->
<div class="form-group col-sm-6">
    <label>Residente</label>
    <select name="idpersonas" class="form-control">
        <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($personas->id); ?>"> <?php echo e($personas->name); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('usuarioscontratados.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
