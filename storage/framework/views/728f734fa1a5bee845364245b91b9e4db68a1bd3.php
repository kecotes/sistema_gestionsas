
<!-- Destinatario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('destinatario', 'Destinatario:'); ?>

    <?php echo Form::text('destinatario', null, ['class' => 'form-control']); ?>

</div>

<!-- Remitente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('remitente', 'Remitente:'); ?>

    <?php echo Form::text('remitente', null, ['class' => 'form-control']); ?>

</div>

<!-- Asunto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('asunto', 'Asunto:'); ?>

    <?php echo Form::text('asunto', null, ['class' => 'form-control']); ?>

</div>


<!-- Fecha Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha', 'Fecha:'); ?>

    <?php echo Form::date('fecha', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
        <?php echo Form::label('tipo', 'Tipo de Correspondencia: '); ?>

        <?php echo Form::select('tipo', ['Enviada' => 'Enviada', 'Recibida' => 'Recibida'], null, ['class' => 'form-control']); ?>

    </div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('correspondencias.index'); ?>" class="btn btn-default">Cancel</a>
</div>
