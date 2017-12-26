<table class="table table-responsive" id="funcionarios-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipofuncionario</th>
        <th>Usuario</th>
        <th>Idpnaturales</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionarios): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $funcionarios->nombre; ?></td>
            <td><?php echo $funcionarios->apellido; ?></td>
            <td><?php echo $funcionarios->tipofuncionario; ?></td>
            <td><?php echo $funcionarios->usuario; ?></td>
            <td><?php echo $funcionarios->idpnaturales; ?></td>
            <td>
                <?php echo Form::open(['route' => ['funcionarios.destroy', $funcionarios->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('funcionarios.show', [$funcionarios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('funcionarios.edit', [$funcionarios->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>