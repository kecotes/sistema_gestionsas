<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Informacion del Contrato <a href="<?php echo route('contratos.index'); ?>" class="btn btn-default">Atras</a>    
        </h1>
    </section>
    <div class="content">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">FICHA TÉCNICA DEL CONTRATO DE OBRA OBJETO DE INTERVENTORÍA</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <?php echo $__env->make('contratos.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>                     
            <!-- /.box-body -->   
      </div>
    </div>
  </div>

   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>