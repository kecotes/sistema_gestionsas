<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>Registro Fotografico <?php if($query != null): ?> <a class="btn btn-success" href="createregistrofotografico/<?php echo e($query); ?>">Nuevo</a> <?php endif; ?> 
       <?php if($contratoid != null): ?> <a class="btn btn-info" href="registrofoto/<?php echo e($contratoid->id); ?>">Descargar ultima version</a> <?php endif; ?>
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
                    <?php echo $__env->make('registrofotografico.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                 </h1>
                    <?php echo $__env->make('registrofotografico.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php echo e($registrofotografico->render()); ?> 
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>