<!-- Entidadcontratante Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('entidadcontratante', 'Entidadcontratante:'); ?>

    <?php echo Form::text('entidadcontratante', null, ['class' => 'form-control']); ?>

</div>

<!-- Objetocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('objetocontrato', 'Objetocontrato:'); ?>

    <?php echo Form::text('objetocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Nocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nocontrato', 'Nocontrato:'); ?>

    <?php echo Form::text('nocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Ncontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ncontrato', 'Ncontrato:'); ?>

    <?php echo Form::text('ncontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Apodocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apodocontrato', 'Apodocontrato:'); ?>

    <?php echo Form::text('apodocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorcontratol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorcontratol', 'Valorcontratol:'); ?>

    <?php echo Form::text('valorcontratol', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorcontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorcontrato', 'Valorcontrato:'); ?>

    <?php echo Form::text('valorcontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipol', 'Valoranticipol:'); ?>

    <?php echo Form::text('valoranticipol', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipo', 'Valoranticipo:'); ?>

    <?php echo Form::text('valoranticipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porcentajeanticipo', 'Porcentajeanticipo:'); ?>

    <?php echo Form::text('porcentajeanticipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Formapago Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('formapago', 'Formapago:'); ?>

    <?php echo Form::text('formapago', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoradicional', 'Valoradicional:'); ?>

    <?php echo Form::text('valoradicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipoadicional', 'Valoranticipoadicional:'); ?>

    <?php echo Form::text('valoranticipoadicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('plazoinicial', 'Plazoinicial:'); ?>

    <?php echo Form::text('plazoinicial', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechainiciacion', 'Fechainiciacion:'); ?>

    <?php echo Form::text('fechainiciacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechafinalizacion', 'Fechafinalizacion:'); ?>

    <?php echo Form::text('fechafinalizacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipocontrato', 'Tipocontrato:'); ?>

    <?php echo Form::text('tipocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- Idpersonas Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('idpersonas', 'Idpersonas:'); ?>

    <?php echo Form::text('idpersonas', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('contratos.index'); ?>" class="btn btn-default">Cancel</a>
</div>
