<!-- Formulario de Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>

<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Informe:</label>
<div class="col-lg-10">
<select name="idinformes" class="form-control">
    <option value="0">Buscar...</option>
    <?php $__currentLoopData = $informesADM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informesADM): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <option value="<?php echo e($informesADM->id); ?>"> <?php echo e($informesADM->titulo); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</select>
</div>
</div>
<?php endif; ?>

<!-- Formulario de Residente -->
<?php if(Auth::user()->tipoUsuario == '2'): ?>

<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Informe:</label>
<div class="col-lg-10">
<select name="idinformes" class="form-control">
    <option value="">Buscar...</option>
    <?php $__currentLoopData = $informesRdt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informesRdt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <option value="<?php echo e($informesRdt->id); ?>"> <?php echo e($informesRdt->titulo); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</select>
</div>
</div>
<?php endif; ?>


<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="4"/>
<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">
<input type="hidden" name="idcontratos" value="<?php echo e($idcontrato); ?>">

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
<?php echo Form::label('decision', '¿Que desea hacer?'); ?>

<?php echo Form::select('decision', ['archivo' => 'Subir Archivo Actividad Seguimiento', 'formato' => 'Subir Archivo Formato inicial'], null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
<label for="exampleInputFile">Adjuntar</label>
    <input type="file" name="file">
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
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('estadotiempo.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
