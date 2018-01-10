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
    <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laboratorios): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($laboratorios->descripcion != 'admin'): ?>
        <tr>
        <td><?php echo $laboratorios->titulo; ?></td>
        <td><?php echo $laboratorios->descripcion; ?></td>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($laboratorios->iduser == $user->id): ?>
            <td><?php echo $user->name; ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <td><?php echo $laboratorios->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['laboratorios.destroy', $laboratorios->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('laboratorios.show', [$laboratorios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('laboratorios.edit', [$laboratorios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($laboratorios->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
    <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laboratorios): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($laboratorios->descripcion != 'admin') && ($laboratorios->iduser == $idusers)) { 
        ?> 

        <tr>
        <td><?php echo $laboratorios->titulo; ?></td>
        <td><?php echo $laboratorios->descripcion; ?></td>
        <td><?php echo $laboratorios->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['laboratorios.destroy', $laboratorios->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('laboratorios.show', [$laboratorios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('laboratorios.edit', [$laboratorios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($laboratorios->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
