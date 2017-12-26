<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('img/descarga.png')); ?>" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php if(Auth::guest()): ?>
                <p>InfyOm</p>
                <?php else: ?>
                    <p><?php echo e(Auth::user()->name); ?></p>
                <?php endif; ?>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
        <?php if(Auth::user()->tipoUsuario == 1): ?>
            <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <?php if(Auth::user()->tipoUsuario == 2): ?>
            <?php echo $__env->make('layouts.menu2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>