<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        <option value="0">Buscar...</option>
        <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
    </div>
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Descripcion de la Adiccion:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control' , 'placeholder' => '*Ej: Adicíon 1']); ?>

</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoradicional', 'Valora dicional:'); ?>

    <?php echo Form::text('valoradicional', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']); ?>

</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipoadicional', 'Valor anticipo adicional:'); ?>

    <?php echo Form::text('valoranticipoadicional', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('adicciones.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
