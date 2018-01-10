<!-- Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $correspondencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $correspondencia): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
        <td><?php echo $correspondencia->titulo; ?></td>
        <td><?php echo $correspondencia->descripcion; ?></td>
        <td><?php echo $correspondencia->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['correspondencia.destroy', $correspondencia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('correspondencia.show', [$correspondencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('correspondencia.edit', [$correspondencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/<?php echo e($correspondencia->idejecuarch); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta usted seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php endif; ?>
