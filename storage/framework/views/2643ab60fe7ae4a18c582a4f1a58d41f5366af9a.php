<!-- Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Residente</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $controlequipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $controlequipos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($controlequipos->descripcion != 'admin'): ?>
        <tr>
        <td><?php echo $controlequipos->titulo; ?></td>
        <td><?php echo $controlequipos->descripcion; ?></td>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($controlequipos->iduser == $user->id): ?>
            <td><?php echo $user->name; ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <td><?php echo $controlequipos->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['controlequipos.destroy', $controlequipos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('controlequipos.show', [$controlequipos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('controlequipos.edit', [$controlequipos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($controlequipos->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta usted seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php endif; ?>

<!-- Resiente -->
<?php if(Auth::user()->tipoUsuario == '2'): ?>
<table class="table table-responsive" id="controlequipos-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $controlequipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $controlequipos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($controlequipos->descripcion != 'admin') && ($controlequipos->iduser == $idusers)) { 
        ?> 

        <tr>
        <td><?php echo $controlequipos->titulo; ?></td>
        <td><?php echo $controlequipos->descripcion; ?></td>
        <td><?php echo $controlequipos->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['controlequipos.destroy', $controlequipos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('controlequipos.show', [$controlequipos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('controlequipos.edit', [$controlequipos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($controlequipos->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta usted seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
        <?php } ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php endif; ?>
