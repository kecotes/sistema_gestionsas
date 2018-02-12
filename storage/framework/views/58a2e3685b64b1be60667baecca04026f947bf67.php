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

<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="8"/>
<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">

<!-- Titulo Field -->
<div class="form-group col-sm-6">
<?php echo Form::label('titulo', 'Descripcion:'); ?>

<?php echo Form::text('titulo', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
<?php echo Form::label('contenido', 'Tipo de Correspondencia'); ?>

<?php echo Form::select('contenido', ['Correspondencia Enviada' => 'Correspondencia Enviada', 'Correspondencia Recibida' => 'Correspondencia Recibida'], null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
<label for="exampleInputFile">Adjuntar Archivo</label>
<input type="file" name="file">
<p>**Campo Requerido**</p>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('correspondencia.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
