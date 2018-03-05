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
                
                <!-- Novedades Fechas-->
                <?php $__currentLoopData = $novedadesfechas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $novedadesfechas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php
                    echo '<tr>';
                        switch ($novedadesfechas->agregar) {
                            case 0:
                            break;
                            case 2:
                            ?>
                        <td bgcolor="#82E0AA"><b>Fecha Inicio</b></td>
                        <td><?php echo $novedadesfechas->fechainiciacion; ?></td>
                        <?php break; 
                            case 3:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha Suspension</b></td>
                        <td><?php echo $novedadesfechas->fechasuspension; ?></td>
                        <?php break; 
                            case 4:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha Reinicio</b></td>
                        <td><?php echo $novedadesfechas->fechareinicio; ?></td>
                        <?php break; 
                            case 5:
                        ?>
                        <td bgcolor="#82E0AA"><b>Adicion en Tiempo (En Dias)</b></td>
                        <td><?php echo $novedadesfechas->adicciontiempo; ?></td>
                        <?php break; 
                            case 6:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha de Terminacion</b></td>
                        <td><?php echo $novedadesfechas->fechafinalizacion; ?></td>
                        <?php break; 
                            case 7:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha de Terminacion Segun Adicion</b></td>
                        <td><?php echo $novedadesfechas->fechafinalizacionadiccion; ?></td>         
                    </tr>
                    <?php } ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                  <td bgcolor="#82E0AA"><b>Fecha de Final de Terminacion</b></td>
                  <td><p><?php echo $novedadesfechas->fechafinalizacion; ?></p></td>
                </tr>
                <!-- Fin -->

                <tr>
                  <td bgcolor="#82E0AA"><b>Tipo de contrato</b></td>
                  <td><p><?php echo $tiposcontratos->nombre; ?></p></td>
                </tr>
                
             </table>
            </div><br>

          <!-- Polizas -->

               <div class="box-header">
                 <h3 class="box-title">SEGUIMIENTO A LAS GARANTÍAS</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Fecha de expedicion</th>
                  <th bgcolor="#82E0AA">Tipo de Poliza</th>
                  <th bgcolor="#82E0AA">No. de Poliza</th>
                  <th bgcolor="#82E0AA">Tipo de Certificado</th>
                  <th bgcolor="#82E0AA">Observaciones</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $polizas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $polizas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>                  
                    <td><p><?php echo $polizas->fechaexpedicion; ?></p></td>
                    <td><p><?php echo $polizas->tipopoliza; ?></p></td>
                    <td><p><?php echo $polizas->npoliza; ?></p></td>
                    <td><p><?php echo $polizas->tipocertificado; ?></p></td>
                    <td><p><?php echo $polizas->observaciones; ?></p></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
                </table>
              </div><br><br>


        <!-- Estados Polizas -->

        <div class="box-header">
                 <h3 class="box-title">ESTADOS DE POLIZAS</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Amparo</th>
                  <th bgcolor="#82E0AA">Vigencia Desde</th>
                  <th bgcolor="#82E0AA">Vigencia Hasta</th>
                  <th bgcolor="#82E0AA">Valor Asegurado</th>
                  <th bgcolor="#82E0AA">Estado Poliza</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $estadospolizas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estadospolizas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>                  
                    <td><p><?php echo $estadospolizas->amparo; ?></p></td>
                    <td><p><?php echo $estadospolizas->vigenciadesde; ?></p></td>
                    <td><p><?php echo $estadospolizas->vigenciahasta; ?></p></td>
                    <td><p><?php echo $estadospolizas->valorasegurado; ?></p></td>
                    <td><p><?php echo $estadospolizas->estadopoliza; ?></p></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
                </table>
              </div><br><br>


        <!-- Correspondencias -->
        
        <div class="box-header">
                 <h3 class="box-title">CORRESPONDENCIA ENVIADA</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Fecha</th>
                  <th bgcolor="#82E0AA">Destinatario</th>
                  <th bgcolor="#82E0AA">Remitente</th>
                  <th bgcolor="#82E0AA">Asunto</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $correspondenciasEnviada; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $correspondencias): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>                
                    <td><p><?php echo $correspondencias->fecha; ?></p></td>
                    <td><p><?php echo $correspondencias->destinatario; ?></p></td>
                    <td><p><?php echo $correspondencias->remitente; ?></p></td>
                    <td><p><?php echo $correspondencias->asunto; ?></p></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
                </table>
              </div>

              <div class="box-header">
                 <h3 class="box-title">CORRESPONDENCIA RECIBIDA</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Fecha</th>
                  <th bgcolor="#82E0AA">Destinatario</th>
                  <th bgcolor="#82E0AA">Remitente</th>
                  <th bgcolor="#82E0AA">Asunto</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $correspondenciasRecibida; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $correspondencias): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>                               
                    <td><p><?php echo $correspondencias->fecha; ?></p></td>
                    <td><p><?php echo $correspondencias->destinatario; ?></p></td>
                    <td><p><?php echo $correspondencias->remitente; ?></p></td>
                    <td><p><?php echo $correspondencias->asunto; ?></p></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
                </table>
              </div><br><br>


        <!-- Balance Financiero -->


      <?php if(Auth::user()->tipoUsuario == '1'): ?>
            <div class="box-header">
                 <h3 class="box-title">BALANCE FINANCIERO</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                  <th bgcolor="#82E0AA">Concepto</th>
                  <th bgcolor="#82E0AA">Valor</th>
                  <th bgcolor="#82E0AA">Descarga</th>
                </thead>
                <tbody>
                <tr>
                    <td><b>VALOR INCIAL DEL CONTRATO</b></td>                
                    <td><p><?php echo $contratos->valorcontrato; ?></p></td>
                </tr>
                <tr>
                    <td>Anticipo</td>
                    <td><p><?php echo $contratos->valoranticipo; ?></p></td>
                <tr>
                <tr>
                    <td>Valor Adiccional</td>
                    <td><p><?php echo $contratos->valoradicional; ?></p></td>
                <tr>
                <tr>
                    <td>Valor Anticipo Adiccional</td>
                    <td><p><?php echo $contratos->valoranticipoadicional; ?></p></td>
                <tr>
                <?php $__currentLoopData = $balancesfinancieros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balancesfinancieros): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
                  <?php if($balancesfinancieros->estado != "Acta parcial inicial"): ?>
                  </tr>
                      <!-- <td>Acta Parcial # <?php echo $i++; ?> </td> -->
                      <td><?php echo $balancesfinancieros->estado; ?></td> 
                      <td><p><?php echo $balancesfinancieros->actaparcial; ?></p></td>
                    <?php if($balancesfinancieros->archivo != ''): ?>
                      <td><a href="descargarc/<?php echo e($balancesfinancieros->id); ?>" target="_blank"><button class="btn btn-info">Descargar</button></a></td>
                    <?php endif; ?>
                  </tr>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tr>
                    <td><b>PENDIENTE POR PAGAR</b></td>
                    <td><b><?php echo $balancesfinancieros->pendientepagar; ?></b></td>
                </tr>
                </tbody>
                </table>
            </div><br><br>

             <!-- Archivos Contratos -->
             <div class="box-header">
                <h3 class="box-title">DOCUMENTOS ADJUNTOS DEL CONTRATO</h3>
              </div>
              <?php $__currentLoopData = $archivoscontratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivoscontratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                  <ul>
                    <li><?php echo $archivoscontratos->tipo; ?>  <a href="descargarb/<?php echo e($archivoscontratos->id); ?>"  target="_blank"><button class="btn  btn-info btn-xs">Descargar</button></a>
                  </ul>  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

          </table>
          <?php endif; ?>
          <br><br><br>

            <div class="box-header">
                 <h3 class="box-title">ACTVIDADES DE CONTRATO</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Descripcion</th>
                  <th bgcolor="#82E0AA">Tipo de Actividad</th>
                  <th bgcolor="#82E0AA">Residente</th>
                  <th bgcolor="#82E0AA">Fecha de Creacion</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $actividadescontratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividadescontratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php if($actividadescontratos->descripcion != 'admin' && $actividadescontratos->tipoactividad != 'informe' && $actividadescontratos->tipoactividad != 'Correspondencia' && $actividadescontratos->tipoactividad != 'Informe'): ?>                               
                    <td><p><?php echo $actividadescontratos->descripcion; ?></p></td>
                    
                        <td><?php echo $actividadescontratos->tipoactividad; ?></td>


                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                      <?php if($actividadescontratos->iduser == $user->id): ?>
                        <td><?php echo $user->name; ?></td>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                    <td><p><?php echo $actividadescontratos->created_at; ?></p></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
                </table>
              </div><br><br>
            
           