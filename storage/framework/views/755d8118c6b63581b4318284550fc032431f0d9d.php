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
    <?php $__currentLoopData = $controlseguridad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $controlseguridad): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($controlseguridad->descripcion != 'admin'): ?>
        <tr>
        <td><?php echo $controlseguridad->titulo; ?></td>
        <td><?php echo $controlseguridad->descripcion; ?></td>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($controlseguridad->iduser == $user->id): ?>
            <td><?php echo $user->name; ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <td><?php echo $controlseguridad->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['controlseguridad.destroy', $controlseguridad->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('controlseguridad.show', [$controlseguridad->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('controlseguridad.edit', [$controlseguridad->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($controlseguridad->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
<table class="table table-responsive" id="controlseguridad-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $controlseguridad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $controlseguridad): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($controlseguridad->descripcion != 'admin') && ($controlseguridad->iduser == $idusers)) { 
        ?> 

        <tr>
        <td><?php echo $controlseguridad->titulo; ?></td>
        <td><?php echo $controlseguridad->descripcion; ?></td>
        <td><?php echo $controlseguridad->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['controlseguridad.destroy', $controlseguridad->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('controlseguridad.show', [$controlseguridad->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('controlseguridad.edit', [$controlseguridad->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($controlseguridad->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
