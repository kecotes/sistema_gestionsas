<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>Listado de Residentes   <?php if(Auth::user()->tipoUsuario == 1): ?><a class="btn btn-success" href="<?php echo route('residentes.create'); ?>">Nuevo</a><?php endif; ?>
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('residentes'); ?>  
 </section>

    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <h1 class="pull-right">
                    <?php echo $__env->make('residentes.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                 </h1>

                    <?php echo $__env->make('residentes.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>