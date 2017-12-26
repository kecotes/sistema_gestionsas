
<!-- entidadcontratante Field -->
<div class="form-group col-sm-6">
    <label>Entidad contratante</label>
    <select name="identidadescontratantes" class="form-control">
        <?php $__currentLoopData = $entidadescontratantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidadescontratantes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($entidadescontratantes->id==$contratos->identidadescontratantes): ?>
				<option value="<?php echo e($entidadescontratantes->id); ?>"selected> <?php echo e($entidadescontratantes->nombre); ?> </option>
			<?php else: ?>
                <option value="<?php echo e($entidadescontratantes->id); ?>"> <?php echo e($entidadescontratantes->nombre); ?> </option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('objetocontrato', 'Objeto del contrato:'); ?>

    <?php echo Form::text('objetocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Nocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nocontrato', 'Nombre del contrato:'); ?>

    <?php echo Form::text('nocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Ncontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ncontrato', 'Numero del contrato:'); ?>

    <?php echo Form::text('ncontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Apodocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apodocontrato', 'Apodo del contrato:'); ?>

    <?php echo Form::text('apodocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorcontratol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorcontratol', 'Valor del contrato (en letras):'); ?>

    <?php echo Form::text('valorcontratol', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorcontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorcontrato', 'Valor del contrato:'); ?>

    <?php echo Form::text('valorcontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipol', 'Valor del anticipo (en letras):'); ?>

    <?php echo Form::text('valoranticipol', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipo', 'Valor del anticipo:'); ?>

    <?php echo Form::text('valoranticipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porcentajeanticipo', 'Porcentaje del anticipo:'); ?>

    <?php echo Form::text('porcentajeanticipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Formapago Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('formapago', 'Forma de pago:'); ?>

    <?php echo Form::text('formapago', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoradicional', 'Valora dicional:'); ?>

    <?php echo Form::text('valoradicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipoadicional', 'Valor ddel anticipo adicional:'); ?>

    <?php echo Form::text('valoranticipoadicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('plazoinicial', 'Plazo inicial:'); ?>

    <?php echo Form::text('plazoinicial', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechainiciacion', 'Fecha iniciacion:'); ?>

    <?php echo Form::date('fechainiciacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechafinalizacion', 'Fecha finalizacion:'); ?>

    <?php echo Form::date('fechafinalizacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- tiposcontratos Field -->
<div class="form-group col-sm-6">
    <label>Tipo del contrato</label>
    <select name="idtiposcontratos" class="form-control">
        <?php $__currentLoopData = $tiposcontratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiposcontratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($tiposcontratos->id==$contratos->idtiposcontratos): ?>
				<option value="<?php echo e($tiposcontratos->id); ?>"selected> <?php echo e($tiposcontratos->nombre); ?> </option>
			<?php else: ?>
                <option value="<?php echo e($tiposcontratos->id); ?>"> <?php echo e($tiposcontratos->nombre); ?> </option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- Residentes Field -->
<div class="form-group col-sm-6">
    <label>Residentes encargado</label>
    <select name="idresidentes" class="form-control">
        <?php $__currentLoopData = $residentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $residentes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($residentes->id==$contratos->idpersonas): ?>
				<option value="<?php echo e($residentes->id); ?>"selected> <?php echo e($residentes->nombre); ?> </option>
			<?php else: ?>
                <option value="<?php echo e($residentes->id); ?>"> <?php echo e($residentes->nombre); ?> </option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('contratos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
