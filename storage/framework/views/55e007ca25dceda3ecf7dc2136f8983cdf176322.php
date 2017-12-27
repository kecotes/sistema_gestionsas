
<!-- Titulo Field -->
<div class="form-group">
<?php echo Form::label('titulo', 'Descripcion:'); ?>

<p><?php echo $actividadescontratos->titulo; ?></p>
</div>

<!-- Contenido Field -->
<div class="form-group">
<?php echo Form::label('descripcion', 'Observaciones:'); ?>

<p><?php echo $actividadescontratos->descripcion; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
<?php echo Form::label('created_at', 'Fecha de Creacion:'); ?>

<p><?php echo $actividadescontratos->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $actividadescontratos->updated_at; ?></p>
</div>

