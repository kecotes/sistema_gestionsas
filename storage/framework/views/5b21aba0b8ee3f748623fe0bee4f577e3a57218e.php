<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>
            Crear Contratista
        </h1>
        <?php echo Breadcrumbs::render('pjuridicas.create'); ?> 
    </section>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">
<<<<<<< HEAD
            
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Informacion</h4>
                *Todos los campos son obligatorios, dejar tres rayas ( --- ) si no se tiene la informacion en el momento.
            </div>
=======
>>>>>>> 09008b5a2ccac7b724849fb424ed165022bbbcfb

            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'pjuridicas.store']); ?>


                        <?php echo $__env->make('pjuridicas.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>