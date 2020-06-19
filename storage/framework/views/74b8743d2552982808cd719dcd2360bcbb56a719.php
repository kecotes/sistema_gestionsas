<?php $__env->startSection('content'); ?>
<section class="content-header">
      <h1>Crear nuevo Contrato
        <small></small>
      </h1>
            <?php echo Breadcrumbs::render('contratos.create'); ?>  
 </section>

    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="box box-primary">

            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Atencion!</h4>
             Hola Administrador, quiero darte aviso que antes de que ingreses todos los datos del Contrato verifica si esta la Entidad Contratante que vas a utilizar, de no ser asi agrega una <a href="<?php echo route('entidadescontratantes.create'); ?>">Nueva Entidad Contratante</a>, de ser nesesario tambien agrega un <a href="<?php echo route('residentes.create'); ?>">Nuevo Residente</a> y un <a href="<?php echo route('tiposcontratos.create'); ?>">Nuevo Tipo de Contrato</a>
            </div>
            <div class="box-header">
            </div>

            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'contratos.store', 'enctype' => 'multipart/form-data']); ?>


                        <?php echo $__env->make('contratos.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>