<ul class="sidebar-menu">
        <li class="header">Menu de Navegacion</li>
        <li class="active treeview">
          <a href="#">
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
            <li><a href="{!! route('contratos.index') !!}"><i class="fa fa-circle-o"></i> Contratos</a></li>
            <!-- <li>
              <a href="#"><i class="fa fa-circle-o"></i> Novedades del Contrato
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!! route('novedadesfechas.index') !!}"><i class="fa fa-circle-o"></i> Novedades en Fechas</a></li>
                </ul>
            </li>-->

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
            
          <li><a href="{!! route('controlequipos.index') !!}"><i class="fa fa-truck"></i> Control Equipos</a></li>
          <li><a href="{!! route('controlseguridad.index') !!}"><i class="fa fa-unlock-alt"></i> Control Seguridad</a></li>
          <li><a href="{!! route('actividadeseguimiento.index') !!}"><i class="fa fa-user-secret"></i> Actividades Seguimiento</a></li>
          <li><a href="{!! route('estadotiempo.index') !!}"><i class="fa fa-clock-o"></i> Estado Tiempo</a></li>
          <li><a href="{!! route('registrofotografico.index') !!}"><i class="fa fa-file-image-o"></i> Registro Fotografico</a></li>
          <li><a href="{!! route('analisisretrasos.index') !!}"><i class="fa fa-line-chart"></i> Analisis Retrasos</a></li>
      <li><a href="{!! route('ejefisicofinancieras.index') !!}"><i class="fa fa-file-excel-o"></i> Ejecuciones Fisico Financieras</a></li>
      <li><a href="{!! route('laboratorios.index') !!}"><i class="fa fa-flask"></i> Laboratorio, certificado y p.</a></li>
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
            <li><a href="{!! route('residentes.index') !!}"><i class="fa fa-user"></i> Residentes de la obra</a></li>
          </ul>
        </li>

        
