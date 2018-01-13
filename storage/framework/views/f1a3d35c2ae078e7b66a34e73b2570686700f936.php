<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>Estado de Tiempo <a class="btn btn-success" href="<?php echo route('estadotiempo.create'); ?>">Nuevo</a> <?php if($contratoid != null): ?> <a class="btn btn-info" href="descargarEtV/<?php echo e($contratoid->id); ?>">Descargar ultima version</a> <?php endif; ?>
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
                <h1 class="pull-right">
                    <?php echo $__env->make('estadotiempo.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                 </h1>
                    <?php echo $__env->make('estadotiempo.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php echo e($estadotiempo->render()); ?> 
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>