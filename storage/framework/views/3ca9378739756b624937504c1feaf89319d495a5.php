<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>Contratista y sus Uniones Temporales   <a class="btn btn-success" href="<?php echo route('numuniones.create'); ?>">Nuevo</a>
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('numuniones'); ?>  
 </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="callout callout-info">
                <h4>¿Que funcion cumple esto?</h4>

                <p>Sirve para añadir un contratista a su Union temporal, dando click en nuevo lo podras hacer. El listado de abajo pertenece a una lista de datos del sistema propio</p>
              </div>
            <div class="box-body">
                    <?php echo $__env->make('numuniones.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>