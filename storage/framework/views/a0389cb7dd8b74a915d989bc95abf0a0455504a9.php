<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">
    Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
    </div>
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Descripcion del Acta Parcial:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- Actaparcial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('actaparcial', 'Valor:'); ?>

    <?php echo Form::text('actaparcial', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']); ?>

</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">
<input type="hidden" name="pendiente" value="<?php echo e($pendiente->pendientepagar); ?>">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('balancesfinancieros.index'); ?>" class="btn btn-default">Cancel</a>
</div>
