<!-- Idcontratos Field -->
<div class="form-group col-sm-10">
    <label class="col-lg-2 control-label">Contrato:</label>
    <div class="col-lg-8">
    <select name="idcontratos" class="form-control">
        <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
    </div>
</div>

<div class="form-group col-sm-10">
    <label class="col-lg-2 control-label" >Tipo de Novedad en fecha:</label>
    <div class="col-lg-8">
    <select name="agregar" class="form-control" >
    <option value="1"></option>
    <option value="2">Fecha Inicio</option>
    <option value="3">Fecha Suspension </option>
    <option value="4">Fecha Reinicio</option>
    <option value="5">Adicion en Tiempo (En Dias)</option>
    <option value="6">Fecha de Terminacion</option>
    <option value="7">Fecha de Terminacion Segun Adicion</option>
    </select>
    </div>
</div>

<!-- Valor Field -->
<div class="form-group col-sm-10">
    <?php echo Form::label('valor', 'Valor:', ['class' => 'col-lg-2 control-label']); ?>

     <div class="col-lg-8">
    <?php echo Form::text('valor', null, ['class' => 'form-control', 'placeholder '=>'Insertar la fecha AAAA-MM-DD (Ej. 2017-12-31) ']); ?>

    <p>*Si es una Adiccion en tiempo digitar solamente el valor en dias</p>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('novedadesfechas.index'); ?>" class="btn btn-default">Cancel</a>
</div>
