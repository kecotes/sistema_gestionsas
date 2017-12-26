<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>Listado de Relaciones entre Contratista y Union Temporal   <a class="btn btn-primary" href="<?php echo route('numuniones.create'); ?>">Nuevo</a>
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('numuniones'); ?>  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('numuniones.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>