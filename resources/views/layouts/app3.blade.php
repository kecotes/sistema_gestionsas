<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestion Negocios SAS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @yield('css')
</head>

  <body class="hold-transition skin-blue sidebar-mini">
  @if (!Auth::guest())
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="../../index2.html" class="navbar-brand"><b>Gestion</b>Negocios</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{!! url('/home') !!}">inicio <span class="sr-only">(current)</span></a></li>
              <!--<li><a href="#"></a></li>-->

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actividades Contratos <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="{{ Request::is('contratos*') ? 'active' : '' }}">
                      <a href="{!! route('contratos.create') !!}"><i class="fa fa-pencil-square-o"></i><span> Crear Contratos</span></a>
                  </li>
                  <li class="{{ Request::is('contratos*') ? 'active' : '' }}">
                      <a href="{!! route('contratos.index') !!}"><i class="fa fa-server"></i><span> Administrar Contratos</span></a>
                  </li>
                  <!--<li class="divider"></li>-->
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actividades Contratos <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="{{ Request::is('polizas*') ? 'active' : '' }}">
                      <a href="{!! route('polizas.index') !!}"><i class="fa fa-book"></i><span> Polizas</span></a>
                  </li>
                  <li class="{{ Request::is('estadospolizas*') ? 'active' : '' }}">
                      <a href="{!! route('estadospolizas.index') !!}"><i class="fa fa-server"></i><span> Estados de Polizas</span></a>
                  </li>
                  <li class="{{ Request::is('actividadescontratos*') ? 'active' : '' }}">
                      <a href="{!! route('actividadescontratos.index') !!}"><i class="fa fa-reorder"></i><span> Actividades de Contratos</span></a>
                  </li>
                  <li class="divider"></li>
                  <li class="{{ Request::is('datosejecucionfisicofinancieras*') ? 'active' : '' }}">
                      <a href="{!! route('datosejecucionfisicofinancieras.index') !!}"><i class="fa fa-check"></i><span> Ejecuciones Fisico Financieras</span></a>
                  </li>
                  <!--<li class="divider"></li>-->
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Datos Adic.<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="{{ Request::is('personas*') ? 'active' : '' }}">
                      <a href="{!! route('personas.index') !!}"><i class="fa fa-user-plus"></i><span> Funcionarios</span></a>
                  </li>
                  <li class="{{ Request::is('personas*') ? 'active' : '' }}">
                      <a href="{!! route('residentes.index') !!}"><i class="fa fa-user-plus"></i><span> Residentes</span></a>
                  </li>
                  <li class="{{ Request::is('pjuridicas*') ? 'active' : '' }}">
                      <a href="{!! route('pjuridicas.index') !!}"><i class="fa fa-user-plus"></i><span> Contratistas</span></a>
                  </li>
                  <li class="{{ Request::is('pjuridicas*') ? 'active' : '' }}">
                      <a href="{!! route('pjuridicas.index') !!}"><i class="fa fa-plus"></i><span> Uniones Temporales</span></a>
                  </li>
                  <li class="{{ Request::is('entidadescontratantes*') ? 'active' : '' }}">
                      <a href="{!! route('entidadescontratantes.index') !!}"><i class="fa fa-plus"></i><span> Entidades Contratantes</span></a>
                  </li>
                  <li class="{{ Request::is('tiposcontratos*') ? 'active' : '' }}">
                      <a href="{!! route('tiposcontratos.index') !!}"><i class="fa fa-plus"></i><span> Tipos de Contratos</span></a>
                  </li>
                  <!--<li class="divider"></li>-->
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Buscar">
              </div>
            </form>
          </div>
          <!-- /.navbar-collapse -->

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <!-- end message -->
                    </ul>
                    <!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                       class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                         class="img-circle" alt="User Image"/>
                      <p>
                          {!! Auth::user()->name !!}
                          <small>Miembro desde {!! Auth::user()->created_at->format('M. Y') !!}</small>
                      </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </div>
                    /.row
                  </li> -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                      <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Perfil</a>
                      </div>
                      <div class="pull-right">
                          <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              Salir
                          </a>
                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
      <div class="container">
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">
          <h1>
            Panel de Administracion
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Layout</a></li>
            <li class="active">Top Navigation</li>
          </ol>
        </section>-->

        <!-- Main content -->
        <section class="content">
          <!--<div class="callout callout-info">
            <h4>Tip!</h4>

            <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
              sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
              links instead.</p>
          </div>
          <div class="callout callout-danger">
            <h4>Warning!</h4>

            <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
              and the content will slightly differ than that of the normal layout.</p>
          </div>-->
          <div class="box box-default">
            <!--<div class="box-header with-border">
              <h3 class="box-title">Blank Box</h3>
            </div>-->
            <div class="box-body">
              @yield('content')
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
      </div>
      <!-- /.container -->
    </footer>
  </div>
  @else
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                          data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{!! url('/') !!}">
                      InfyOm Generator
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      <li><a href="{!! url('/home') !!}">Home</a></li>
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      <li><a href="{!! url('/login') !!}">Login</a></li>
                      <li><a href="{!! url('/register') !!}">Register</a></li>
                  </ul>
              </div>
          </div>
      </nav>

      <div id="page-content-wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      @yield('content')
                  </div>
              </div>
          </div>
      </div>
      @endif
  <!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>

    @yield('scripts')
</body>
</html>
