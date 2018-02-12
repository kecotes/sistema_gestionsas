
<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoradicional', 'Valora dicional:'); ?>

    <?php echo Form::text('valoradicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipoadicional', 'Valor anticipo adicional:'); ?>

    <?php echo Form::text('valoranticipoadicional', null, ['class' => 'form-control']); ?>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('adicciones.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
