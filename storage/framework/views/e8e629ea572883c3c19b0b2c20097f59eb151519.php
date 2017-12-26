<!-- Formulario de Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Contrato:</label>
<div class="col-lg-10">
<select name="idcontratos" class="form-control">
    <option value="">Buscar...</option>
    <?php $__currentLoopData = $contratosADM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratosADM): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($contratosADM->id); ?>"> <?php echo e($contratosADM->contratos); ?> </option>
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
            <option value="<?php echo e($contratosRdt->id); ?>"> <?php echo e($contratosRdt->contratos); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</select>
</div>
</div>
<?php endif; ?>


<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="3"/>
<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">

<!-- Titulo Field -->
<div class="form-group col-sm-6">
<?php echo Form::label('titulo', 'Descripcion:'); ?>

<?php echo Form::text('titulo', null, ['class' => 'form-control']); ?>

</div>

<!-- Contenido Field -->
<div class="form-group col-sm-6">
<?php echo Form::label('contenido', 'Observaciones:'); ?>

<?php echo Form::text('contenido', null, ['class' => 'form-control']); ?>

</div>

<!-- Formulario de Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
    <div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar primera Version</label>
    <input type="file" name="file">
    <p>*Si va a subir la primera version no puede adjuntar un archivo normal</p>
    </div>

    <input type="hidden" name="descripcionArch" value="admin"/>
<?php endif; ?>

<!-- Formulario de Residente -->
<?php if(Auth::user()->tipoUsuario == '2'): ?>
    <div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
    </div>
<?php endif; ?>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('controlequipos.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
