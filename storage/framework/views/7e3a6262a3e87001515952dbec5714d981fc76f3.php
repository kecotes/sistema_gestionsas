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
    <?php $__currentLoopData = $ejefisicofinancieras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ejefisicofinancieras): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($ejefisicofinancieras->descripcion != 'admin'): ?>
        <tr>
        <td><?php echo $ejefisicofinancieras->titulo; ?></td>
        <td><?php echo $ejefisicofinancieras->descripcion; ?></td>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <?php if($ejefisicofinancieras->iduser == $user->id): ?>
            <td><?php echo $user->name; ?></td>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <td><?php echo $ejefisicofinancieras->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['ejefisicofinancieras.destroy', $ejefisicofinancieras->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('ejefisicofinancieras.show', [$ejefisicofinancieras->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('ejefisicofinancieras.edit', [$ejefisicofinancieras->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($ejefisicofinancieras->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $ejefisicofinancieras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ejefisicofinancieras): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($ejefisicofinancieras->descripcion != 'admin') && ($ejefisicofinancieras->iduser == $idusers)) { 
        ?> 

        <tr>
        <td><?php echo $ejefisicofinancieras->titulo; ?></td>
        <td><?php echo $ejefisicofinancieras->descripcion; ?></td>
        <td><?php echo $ejefisicofinancieras->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['ejefisicofinancieras.destroy', $ejefisicofinancieras->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('ejefisicofinancieras.show', [$ejefisicofinancieras->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('ejefisicofinancieras.edit', [$ejefisicofinancieras->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($ejefisicofinancieras->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
