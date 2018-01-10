
<dl>

<dt>Copia de Contrato</dt>
<dd><input type="file" name="file"></dd><br>

<dt>Acta de Inicio</dt>
<dd><input type="file" name="file2"></dd><br>

<dt>CDP</dt>
<dd><input type="file" name="file3"></dd><br>

</dl>
<<<<<<< HEAD
  
=======

>>>>>>> 09008b5a2ccac7b724849fb424ed165022bbbcfb

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('contratos.index'); ?>" class="btn btn-default">Cancelar</a>
</div>
