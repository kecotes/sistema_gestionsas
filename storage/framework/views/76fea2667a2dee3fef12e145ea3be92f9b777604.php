

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
<?php echo Form::label('descripcion', 'Observaciones:'); ?>

<?php echo Form::text('descripcion', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('actividadeseguimiento.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
