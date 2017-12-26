<ul class="sidebar-menu">
        <li class="header">Menu de Navegacion</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Inicio</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Contratos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo route('contratos.create'); ?>"><i class="fa fa-circle-o"></i> Nuevo Contrato</a></li>
            <li><a href="<?php echo route('contratos.index'); ?>"><i class="fa fa-circle-o"></i> Administrar Contratos</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Novedades del Contrato
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Novedades en Fechas</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Actas Parciales</a></li>
                </ul>
            </li>

          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Actividades Contratos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo route('polizas.index'); ?>"><i class="fa fa-circle-o"></i> Polizas</a></li>
            <li><a href="<?php echo route('estadospolizas.index'); ?>"><i class="fa fa-circle-o"></i> Estados de Polizas</a></li>
            <li><a href="<?php echo route('actividadescontratos.index'); ?>"><i class="fa fa-circle-o"></i> Actividades de Contratos</a></li>
            <li><a href="<?php echo route('datosejecucionfisicofinancieras.index'); ?>"><i class="fa fa-circle-o"></i> Ejecuciones Fisico Financieras</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Datos Adic.</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo route('pjuridicas.index'); ?>"><i class="fa fa-circle-o"></i> Contratistas</a></li>
            <li><a href="<?php echo route('unionestemporales.index'); ?>"><i class="fa fa-circle-o"></i> Uniones Temporales</a></li>
            <li><a href="<?php echo route('residentes.index'); ?>"><i class="fa fa-circle-o"></i> Residentes</a></li>
            <li><a href="<?php echo route('entidadescontratantes.index'); ?>"><i class="fa fa-circle-o"></i> Entidades Contratantes</a></li>
            <li><a href="<?php echo route('tiposcontratos.index'); ?>"><i class="fa fa-circle-o"></i> Tipos de Contratos</a></li>
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
            <li><a href="<?php echo e(URL::to('pdf')); ?>"><i class="fa fa-circle-o"></i> PDF</a></li>
            <li><a href="<?php echo e(URL::to('excel')); ?>"><i class="fa fa-circle-o"></i> EXCEL</a></li>
          </ul>
        </li>
        
