
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
<input type="hidden" name="idactividad" value="3"/>

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

<!-- Residentes Field -->
<div class="form-group col-sm-6">
    <label>Residentes encargado</label>
    <select name="idresidentes" class="form-control">
        <?php $__currentLoopData = $residentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $residentes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($residentes->id); ?>"> <?php echo e($residentes->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('controlequipos.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
