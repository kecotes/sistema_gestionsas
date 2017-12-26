
<!-- Nombre Field -->
<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo $entidadescontratantes->nombre; ?></p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <p><?php echo $entidadescontratantes->telefono; ?></p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <p><?php echo $entidadescontratantes->direccion; ?></p>
</div>

<!-- Ciudad Field -->
<div class="form-group">
    <?php echo Form::label('ciudad', 'Ciudad:'); ?>

    <p><?php echo $entidadescontratantes->ciudad; ?></p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    <?php echo Form::label('departamento', 'Departamento:'); ?>

    <p><?php echo $entidadescontratantes->departamento; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha de creacion:'); ?>

    <p><?php echo $entidadescontratantes->created_at; ?></p>
</div>

