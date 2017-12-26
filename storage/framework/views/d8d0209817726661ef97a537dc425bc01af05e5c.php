
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->contratos); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
    </div>
</div>

<!-- Idtipoactividades Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Tipo de Actividad:</label>
    <div class="col-lg-10">
    <select name="idtipoactividades" class="form-control">
        <?php $__currentLoopData = $tipoactividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoactividades): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($tipoactividades->id); ?>"> <?php echo e($tipoactividades->tipoactividad); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
    </div>
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('titulo', 'Titulo:'); ?>

    <?php echo Form::text('titulo', null, ['class' => 'form-control']); ?>

</div>

<!-- Contenido Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('contenido', 'Contenido:'); ?>

    <?php echo Form::text('contenido', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('actividadescontratos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
