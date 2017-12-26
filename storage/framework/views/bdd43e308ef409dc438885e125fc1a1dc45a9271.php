<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Crear Relacion entre Contratista y Union Temporal
        </h1>
        <?php echo Breadcrumbs::render('numuniones.create'); ?> 
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'numuniones.store']); ?>


                        <?php echo $__env->make('numuniones.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>