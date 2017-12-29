<?php $__env->startSection('content'); ?>
    <section class="content-header">
      <h1>Nuevo Control de Equipos
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('actividadescontratos.create'); ?>  
 </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'estadotiempo.store', 'enctype' => 'multipart/form-data']); ?>


                        <?php echo $__env->make('estadotiempo.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>