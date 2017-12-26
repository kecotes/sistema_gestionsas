<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>Ejecuciones Fisico Financieras  <a class="btn btn-success" href="<?php echo route('ejecucionfisicofinancieras.create'); ?>">Nuevo</a>
  <small></small>
</h1>
      <?php echo Breadcrumbs::render('actividadescontratos'); ?>  
</section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('ejecucionfisicofinancieras.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php echo e($ejecucionfisicofinancieras->render()); ?> 
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>