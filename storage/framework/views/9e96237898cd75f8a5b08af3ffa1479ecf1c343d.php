<table class="table table-responsive" id="pnaturales-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipopnatural</th>
        <th>Idpersonas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pnaturales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pnaturales): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $pnaturales->nombre; ?></td>
            <td><?php echo $pnaturales->apellido; ?></td>
            <td><?php echo $pnaturales->tipopnatural; ?></td>
            <td><?php echo $pnaturales->idpersonas; ?></td>
            <td>
                <?php echo Form::open(['route' => ['pnaturales.destroy', $pnaturales->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('pnaturales.show', [$pnaturales->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('pnaturales.edit', [$pnaturales->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>