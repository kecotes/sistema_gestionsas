<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Informacion del Contrato
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
              <table class="table table-hover">
                <tr>
                  <td bgcolor="#82E0AA"><b>Entidad Contratante</b></td>
                  <td><p><?php echo $entidadescontratantes->nombre; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Objeto del Contrato</b></td>
                  <td><p><?php echo $contratos->objetocontrato; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Contrato No.</b></td>
                  <td><p><?php echo $contratos->nocontrato; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Apodo del Contrato</b></td>
                  <td><p><?php echo $contratos->apodocontrato; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor del contrato (en letras)</b></td>
                  <td><p><?php echo $contratos->valorcontrato; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor del anticipo (en letras)</b></td>
                  <td><p><?php echo $contratos->valoranticipol; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor del anticipo</b></td>
                  <td><p><?php echo $contratos->valoranticipo; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Porcentaje de anticipo</b></td>
                  <td><p><?php echo $contratos->porcentajeanticipo; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Forma de pago</b></td>
                  <td><p><?php echo $contratos->formapago; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor adicional</b></td>
                  <td><p><?php echo $contratos->valoradicional; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor de anticipo adicional</b></td>
                  <td><p><?php echo $contratos->valoranticipoadicional; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Plazo inicial</b></td>
                  <td><p><?php echo $contratos->plazoinicial; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Fecha de inicio</b></td>
                  <td><p><?php echo $contratos->fechainiciacion; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Fecha de finalizacion</b></td>
                  <td><p><?php echo $contratos->fechafinalizacion; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Tipo de contrato</b></td>
                  <td><p><?php echo $tiposcontratos->nombre; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Residente encargado</b></td>
                  <td><p><?php echo $residentes->nombre; ?></p></td>
                </tr>
              </table>
            </div><br>
            <!-- /.box-body -->
                <a href="<?php echo route('contratos.index'); ?>" class="btn btn-default">Atras</a>

          </div>
          <!-- /.box -->
          
        </div>                     
        
    </div>

    </div>

   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>