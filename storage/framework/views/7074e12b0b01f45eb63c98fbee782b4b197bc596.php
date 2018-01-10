<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
<<<<<<< HEAD
            Añadir Contratista a su Union Temporal
=======
            Crear Relacion entre Contratista y Union Temporal
>>>>>>> 09008b5a2ccac7b724849fb424ed165022bbbcfb
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