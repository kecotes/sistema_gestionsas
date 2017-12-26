
<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Tipo de Contrato:'); ?>

    <p><?php echo $tiposcontratos->nombre; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha de Creacion:'); ?>

    <p><?php echo $tiposcontratos->created_at; ?></p>
</div>


