
<!-- Actaparcial Field -->
<div class="form-group">
    <?php echo Form::label('actaparcial', 'Actaparcial:'); ?>

    <p><?php echo $balancesfinancieros->actaparcial; ?></p>
</div>

<!-- Pendientepagar Field -->
<div class="form-group">
    <?php echo Form::label('pendientepagar', 'Pendientepagar:'); ?>

    <p><?php echo $balancesfinancieros->pendientepagar; ?></p>
</div>

<!-- Estado Field -->
<div class="form-group">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <p><?php echo $balancesfinancieros->estado; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Fecha de Creacion:'); ?>

    <p><?php echo $balancesfinancieros->created_at; ?></p>
</div>
