
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
    </div>
</div>

<!-- Amparo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('amparo', 'Amparo:'); ?>

    <?php echo Form::text('amparo', null, ['class' => 'form-control']); ?>

</div>

<!-- Vigenciadesde Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('vigenciadesde', 'Vigencia desde:'); ?>

    <?php echo Form::date('vigenciadesde', null, ['class' => 'form-control']); ?>

</div>

<!-- Vigenciahasta Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('vigenciahasta', 'Vigencia hasta:'); ?>

    <?php echo Form::date('vigenciahasta', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorasegurado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorasegurado', 'Valor asegurado:'); ?>

    <?php echo Form::text('valorasegurado', null, ['class' => 'form-control']); ?>

</div>

<!-- Estadopoliza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estadopoliza', 'Estado de poliza:'); ?>

    <?php echo Form::text('estadopoliza', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('estadospolizas.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
