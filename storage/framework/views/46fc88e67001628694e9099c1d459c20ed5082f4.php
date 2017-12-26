<table class="table table-responsive" id="permisos-table">
    <thead>
        <th>Tipopermiso</th>
        <th>Idfuncionarios</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permisos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $permisos->tipopermiso; ?></td>
            <td><?php echo $permisos->idfuncionarios; ?></td>
            <td>
                <?php echo Form::open(['route' => ['permisos.destroy', $permisos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('permisos.show', [$permisos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('permisos.edit', [$permisos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>