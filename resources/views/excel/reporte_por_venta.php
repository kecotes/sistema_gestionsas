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
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
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
      
      <center><h1>Gestion y Negocios Administrativos S.AS</h1>
       <h3> NIT: 900278213-0</h3>
     <h3>Tel: 7280643 - Cel: 3172410383</h3> </center>
      
      <br><br><br><br>
      <h1>Reportes de los Contratos</h1>
       <h3> <small>Generado en la fecha: <?=  $date; ?> </small></h3>
      
 </section>

              <div class="box">

                <div class="box-body">
                  <table class="table table-bordered">
                  <thead>
                     <tr>
                      <th style="width: 40px">Nombre del Contrato</th>
                      <th style="width: 40px">Objeto del Contrato</th>
                      <th style="width: 40px">Apodo del Contrato</th>
                      <th style="width: 40px">Valor del Contrato</th>
                      <th style="width: 40px">Forma de Pago</th>
                      <th style="width: 40px">Fecha de inicio</th>
                      <th style="width: 40px">Fecha de Finalizcion </th>
                      <th style="width: 40px">Estado</th>
                    </tr>
                  </thead>
                    <tbody>
                  <?php foreach($data as $contratos){ ?>
                 
                    <tr>
                      <td style="width: 10px" ><?= $contratos-> nocontrato; ?></td>
                      <td style="width: 10px" ><?= $contratos-> objetocontrato; ?></td>
                      <td style="width: 10px" ><?= $contratos-> apodocontrato; ?></td>
                      <td style="width: 10px" ><?= $contratos-> valorcontrato; ?></td>
                      <td style="width: 10px" ><?= $contratos-> formapago; ?></td>
                      <td style="width: 10px" ><?= $contratos-> fechainiciacion; ?></td>
                      <td style="width: 10px" ><?= $contratos-> fechafinalizacion; ?></td>
                      <td style="width: 10px" ><?= $contratos-> estado; ?></td>
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
            </div>


  
</body>
</html>


