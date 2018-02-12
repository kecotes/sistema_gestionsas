<ul class="sidebar-menu">
<li class="header">Menu de Navegacion</li>
<li class="active treeview">
  <a href="/">
    <i class="fa fa-dashboard"></i> <span>Inicio</span>
  </a>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-folder-open"></i>
    <span>Contratos</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo route('contratos.create'); ?>"><i class="fa fa-folder"></i> Nuevo Contrato</a></li>
    <li><a href="<?php echo route('contratos.index'); ?>"><i class="fa fa-file-text"></i> Administrar Contratos</a></li>
    <li><a href="<?php echo route('usuarioscontratados.index'); ?>"><i class="fa fa-user"></i> Personal Contratado</a></li>
    <li><a href="<?php echo route('polizas.index'); ?>"><i class="fa fa-file"></i> Polizas</a></li>
    <li><a href="<?php echo route('estadospolizas.index'); ?>"><i class="fa fa-file-o"></i> Estados de Polizas</a></li>
    <li><a href="<?php echo route('correspondencia.index'); ?>"><i class="fa fa-envelope-square"></i> Correspondencia</a></li>
    <li>
      <a href="#"><i class="fa fa-newspaper-o"></i> Novedades del Contrato
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo route('novedadesfechas.index'); ?>"><i class="fa fa-clock-o"></i> Novedades en Fechas</a></li>
        <li><a href="<?php echo route('balancesfinancieros.index'); ?>"><i class="fa fa-money"></i> Blances Financieros</a></li>
        <li><a href="<?php echo route('adicciones.index'); ?>"><i class="fa fa-money"></i> Adiciones</a></li>
        </ul>
    </li>

  </ul>
</li>
 <li class="treeview">
  <a href="#">
    <i class="fa fa-bullhorn"></i>
    <span>Actividades Contratos</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    
        <li><a href="<?php echo route('controlequipos.index'); ?>"><i class="fa fa-truck"></i> Control Equipos</a></li>
        <li><a href="<?php echo route('controlseguridad.index'); ?>"><i class="fa fa-unlock-alt"></i> Control Seguridad</a></li>
        <li><a href="<?php echo route('actividadeseguimiento.index'); ?>"><i class="fa fa-user-secret"></i> Actividades Seguimiento</a></li>
        <li><a href="<?php echo route('estadotiempo.index'); ?>"><i class="fa fa-clock-o"></i> Estado Tiempo</a></li>
        <li><a href="<?php echo route('registrofotografico.index'); ?>"><i class="fa fa-file-image-o"></i> Registro Fotografico</a></li>
        <li><a href="<?php echo route('analisisretrasos.index'); ?>"><i class="fa fa-line-chart"></i> Analisis Retrasos</a></li>
    <li><a href="<?php echo route('ejefisicofinancieras.index'); ?>"><i class="fa fa-file-excel-o"></i> Ejecuciones Fisico Financieras</a></li>
    <li><a href="<?php echo route('laboratorios.index'); ?>"><i class="fa fa-flask"></i> Laboratorio, certificado y p.</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-group"></i>
    <span>Datos Adic.</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo route('pjuridicas.index'); ?>"><i class="fa fa-institution"></i> Contratistas</a></li>
    <li><a href="<?php echo route('unionestemporales.index'); ?>"><i class="fa fa-cubes"></i> Uniones Temporales</a></li>
     <li><a href="<?php echo route('numuniones.index'); ?>"><i class="fa fa-comments"></i> Relacion Contratista y Uniones</a></li>
    <li><a href="<?php echo route('residentes.index'); ?>"><i class="fa fa-user"></i> Personal</a></li>
    <li><a href="<?php echo route('entidadescontratantes.index'); ?>"><i class="fa fa-flag"></i> Entidades Contratantes</a></li>
    <li><a href="<?php echo route('tiposcontratos.index'); ?>"><i class="fa fa-file-text"></i> Tipos de Contratos</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Reportes</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo e(URL::to('pdf')); ?>"><i class="fa fa-file-pdf-o"></i> PDF</a></li>
    <!--<li><a href="<?php echo e(URL::to('excel')); ?>"><i class="fa fa-file-excel-o"></i> EXCEL</a></li> -->
  </ul>
</li>

