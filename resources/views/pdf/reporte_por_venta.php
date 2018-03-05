<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte Por Pais</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

table {
    background-color:#FFFFF0;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 2px solid #FFF5EE;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}

.bg-red {
    background-color: #dd4b39 !important;
}


</style>
    
</head>
<body>



<div class="col-md-12">
<section class="content-header">
      
     <img src="img/gn.png" width="700px" height="100px"> <center><h1>Gestion y Negocios Administrativos S.AS</h1>
       <h3> NIT: 900278213-0</h3>
     <h3>Tel: 7280643 - Cel: 3172410383</h3> </center>
      
      <br><br><br><br>
      <?php foreach($data as $contratos){ ?><center><h3><?= $contratos->nocontrato; ?></h3></center><?php  } ?>
       <small>Generado en la fecha: <?=  $date; ?> </small>
      
 </section>


                <div class="box-body">
                  <table class="table table-hover">

                  <?php foreach($data as $contratos){ ?>
                        
                      <tr><th bgcolor="#82E0AA" style="width: 40px">Nombre del Contrato</th><td style="width: 10px" ><?= $contratos->nocontrato; ?></td></tr>
                      <tr><th bgcolor="#82E0AA" style="width: 40px">Objeto del Contrato</th><td style="width: 10px" ><?= $contratos->objetocontrato; ?></td></tr>
                      <tr><th bgcolor="#82E0AA" style="width: 40px">Apodo del Contrato</th><td style="width: 10px" ><?= $contratos->apodocontrato; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Valor del Contrato</th><td style="width: 10px" ><?= $contratos->valorcontrato; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Valor del Contrato (en letras)</th><td style="width: 10px" ><?= $contratos->valorcontratol; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Valor del valoranticipo </th><td style="width: 10px" ><?= $contratos->valoranticipo; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Valor del valoranticipo (en letras)</th><td style="width: 10px" ><?= $contratos->valoranticipol; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Forma de Pago</th><td style="width: 10px" ><?= $contratos->formapago; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Valor Adicional Contrato</th><td style="width: 10px" ><?= $contratos->valoradicional; ?></td></tr>
                     <tr><th bgcolor="#82E0AA" style="width: 40px">Plazo Inicial</th><td style="width: 10px" ><?= $contratos->plazoinicial; ?></td></tr>
                      <tr><th bgcolor="#82E0AA" style="width: 40px">Fecha de inicio</th><td style="width: 10px" ><?= $contratos->fechainiciacion; ?></td></tr>
                      <tr><th bgcolor="#82E0AA" style="width: 40px">Fecha de Finalizcion </th><td style="width: 10px" ><?= $contratos->fechafinalizacion; ?></td></tr>
                      <tr><th bgcolor="#82E0AA" style="width: 40px">Estado</th><td style="width: 10px" ><?= $contratos->estado; ?></td></tr>              
                    
                    <?php  } ?>


                  </table>
                  </div>

                  
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
                        <?php foreach($poli as $polizas){ ?>   
                        <tr>             
                            <td><p><?= $polizas->fechaexpedicion; ?></p></td>
                            <td><p><?= $polizas->tipopoliza; ?></p></td>
                            <td><p><?= $polizas->npoliza; ?></p></td>
                            <td><p><?= $polizas->tipocertificado; ?></p></td>
                            <td><p><?=$polizas->observaciones; ?></p></td>
                        </tr>
                        <?php  } ?>
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
                        <th bgcolor="#82E0AA">Estado Polizaa</th>
                        </thead>
                        <tbody>
                        <?php foreach($estadospolizas as $estadospolizas){ ?>
                        <tr>                   
                            <td><p><?=  $estadospolizas->amparo; ?></p></td>
                            <td><p><?=  $estadospolizas->vigenciadesde; ?></p></td>
                            <td><p><?=  $estadospolizas->vigenciahasta; ?></p></td>
                            <td><p><?=  $estadospolizas->valorasegurado; ?></p></td>
                            <td><p><?=  $estadospolizas->estadopoliza; ?></p></td>
                        </tr>
                        <?php } ?>
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
                <?php foreach($correspondenciasEnviada as $correspondencias){ ?> 
                <tr>               
                    <td><p><?=  $correspondencias->fecha; ?></p></td>
                    <td><p><?=  $correspondencias->destinatario; ?></p></td>
                    <td><p><?=  $correspondencias->remitente; ?></p></td>
                    <td><p><?=  $correspondencias->asunto; ?></p></td>
                </tr>
                <?php } ?>
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
                <?php foreach($correspondenciasRecibida as $correspondencias){ ?>  
                <tr>                             
                    <td><p><?=  $correspondencias->fecha; ?></p></td>
                    <td><p><?=  $correspondencias->destinatario; ?></p></td>
                    <td><p><?=  $correspondencias->remitente; ?></p></td>
                    <td><p><?=  $correspondencias->asunto; ?></p></td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
              </div><br><br>


            <div class="box-header">
                 <h3 class="box-title">BALANCE FINANCIERO</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                  <th bgcolor="#82E0AA" style="width: 40px">Concepto</th>
                  <th bgcolor="#82E0AA" style="width: 40px">Valor</th>
                </thead>
                <tbody>
                <tr></tr>
                <tr>
                    <td style="width: 40px"><b>VALOR INCIAL DEL CONTRATO</b></td>                
                    <td style="width: 40px"><p><?= $contratos->valorcontrato; ?></p></td>
                </tr>
                <tr>
                    <td style="width: 40px">Anticipo</td>
                    <td style="width: 40px"><p><?= $contratos->valoranticipo; ?></p></td>
                </tr>
                <tr>
                    <td style="width: 40px">Valor Adiccional</td>
                    <td style="width: 40px"><p><?= $contratos->valoradicional; ?><</p></td>
                </tr>
                <tr>
                    <td style="width: 40px">Valor Anticipo Adiccional</td>
                    <td style="width: 40px"><p><?= $contratos->valoranticipoadicional; ?><</p></td>
                </tr>
                <?php foreach($balancesfinancieros as $balancesfinancieros){ ?>  
                <?php if($balancesfinancieros->estado != "Acta parcial inicial"){ ?>
                  <tr>
                      <!-- <td>Acta Parcial # {!! $i++ !!} </td> -->
                      <td style="width: 40px"><?= $balancesfinancieros->estado;  ?><</td> 
                      <td style="width: 40px"><p><?= $balancesfinancieros->actaparcial;  ?><</p></td>
                  </tr>
                  <?php } ?>
                <?php } ?>
                <tr>
                    <td style="width: 40px"><b>PENDIENTE POR PAGAR</b></td>
                    <td style="width: 40px"><b><?= $balancesfinancieros->pendientepagar;  ?><</b></td>
                </tr>
                </tbody>
                </table>
            </div><br><br>

              
            </div>


  
</body>
</html>


