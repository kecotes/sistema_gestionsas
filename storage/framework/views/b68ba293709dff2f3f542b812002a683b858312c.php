<?php $__env->startSection('content'); ?>
<div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">REPORTE - FICHA TECNICA DEL CONTRATO</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead><tr>
                      <th>Numero del Contrato</th>
                      <th>Apodo del Contrato</th>
                      <th>ver</th>
                    </tr></thead>
                    <tbody>
                    <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                      <td><?php echo e($contratos->ncontrato); ?></td>
                      <td><?php echo e($contratos->apodocontrato); ?></td>
                      <td><a href="crear_reporte_porventa/<?php echo e($contratos->id); ?>" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
 </div>

 <?php echo Form::close(); ?>  
    <?php $__env->startPush('scripts'); ?>
   
    <?php $__env->stopPush(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>