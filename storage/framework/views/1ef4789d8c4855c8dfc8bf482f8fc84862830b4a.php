<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>Tipos de Contratos   <a class="btn btn-success" href="<?php echo route('tiposcontratos.create'); ?>">Nuevo</a>
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('tiposcontratos'); ?>  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('tiposcontratos.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>