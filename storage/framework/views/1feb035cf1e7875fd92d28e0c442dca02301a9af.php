<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Crear adiccion
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'balancesfinancieros.store', 'enctype' => 'multipart/form-data']); ?>


                        <div class="form-group col-sm-12">
                            <label class="col-lg-2 control-label">Contrato:</label>
                            <div class="col-lg-10">
                            <select name="idcontratos" class="form-control">
                                <option value="0">Buscar...</option>
                                <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                            </div>
                        </div>

                        <!-- Valoradicional Field -->
                        <div class="form-group col-sm-6">
                        <?php echo Form::label('valoradicional', 'Valor adicional:'); ?>

                        <?php echo Form::text('valoradicional', null, ['class' => 'form-control','placeholder' => '*Sin puntos ni comas. Poner 0 si no hay valor adicional']); ?>

                        </div>

                        <!-- Valoranticipoadicional Field -->
                        <div class="form-group col-sm-6">
                        <?php echo Form::label('valoranticipoadicional', 'Valor del anticipo adicional:'); ?>

                        <?php echo Form::text('valoranticipoadicional', null, ['class' => 'form-control','placeholder' => '*Sin puntos ni comas. Poner 0 si no hay anticipo adicional']); ?>

                        </div>

                        <div class="form-group col-sm-6">
                            <label for="exampleInputFile">Adjuntar Archivo</label>
                            <input type="file" name="file">
                        </div>

                        <input type="hidden" name="idresidentes" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="hidden" name="holi" value="he">

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

                            <a href="<?php echo route('balancesfinancieros.index'); ?>" class="btn btn-default">Cancel</a>
                        </div>


                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>