<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Contratos
        </h1>
   </section>
   <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::model($contratos, ['route' => ['contratos.update', $contratos->id], 'method' => 'patch']); ?>

            <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                <?php echo $__env->make('contratos.fields_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            </div>
            <?php echo Form::close(); ?>

   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>