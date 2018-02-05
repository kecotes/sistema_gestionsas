<!-- Formulario de Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Contrato:</label>
<div class="col-lg-10">
<select name="idcontratos" class="form-control">
    <option value="">Buscar...</option>
    <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($contratos->id==$registrofotografico->idcontratos): ?>
            <option value="<?php echo e($contratos->id); ?>"selected> <?php echo e($contratos->contratos); ?> </option>
        <?php else: ?>
            <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->contratos); ?> </option>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</select>
</div>
</div>
<?php endif; ?>

<!-- Formulario de Residente -->
<?php if(Auth::user()->tipoUsuario == '2'): ?>
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Contrato:</label>
<div class="col-lg-10">
<select name="idcontratos" class="form-control">
    <option value="">Buscar...</option>
    <?php $__currentLoopData = $contratosRdt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratosRdt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($contratosRdt->id==$contratosRdt->idcontratos): ?>
            <option value="<?php echo e($contratosRdt->id); ?>"selected> <?php echo e($contratosRdt->contratos); ?> </option>
        <?php else: ?>
            <option value="<?php echo e($contratosRdt->id); ?>"> <?php echo e($contratosRdt->contratos); ?> </option>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</select>
</div>
</div>
<?php endif; ?>

<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="5"/>
<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">

<!-- Titulo Field -->
<div class="form-group col-sm-6">
<?php echo Form::label('titulo', 'Descripcion:'); ?>

<?php echo Form::text('titulo', null, ['class' => 'form-control']); ?>

</div>

<!-- Contenido Field -->
<div class="form-group col-sm-6">
<?php echo Form::label('descripcion', 'Observaciones:'); ?>

<?php echo Form::text('descripcion', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('registrofotografico.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
