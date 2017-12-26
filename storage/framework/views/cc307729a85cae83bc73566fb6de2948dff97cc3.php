<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('pjuridicas.create'); ?>  
 </section>
    <section class="content-header">
        <h1>
            Crear Contratista
        </h1>
    </section>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

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