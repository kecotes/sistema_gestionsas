
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">
    Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </div>
</div>

<!-- Fechaexpedicion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechaexpedicion', 'Fecha Expedicion:'); ?>

    <?php echo Form::date('fechaexpedicion', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipopoliza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipopoliza', 'Tipo de Poliza:'); ?>

    <?php echo Form::text('tipopoliza', null, ['class' => 'form-control']); ?>

</div>

<!-- Npoliza Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('npoliza', 'No. de Poliza:'); ?>

    <?php echo Form::text('npoliza', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipocertificado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipocertificado', 'Tipo de Certificado:'); ?>

    <?php echo Form::text('tipocertificado', null, ['class' => 'form-control']); ?>

</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('observaciones', 'Observaciones:'); ?>

    <?php echo Form::text('observaciones', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('polizas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
