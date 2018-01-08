<table class="table table-responsive" id="entidadescontratantes-table">
    <thead>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Departamento</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $entidadescontratantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidadescontratantes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $entidadescontratantes->nombre; ?></td>
            <td><?php echo $entidadescontratantes->telefono; ?></td>
            <td><?php echo $entidadescontratantes->direccion; ?></td>
            <td><?php echo $entidadescontratantes->ciudad; ?></td>
            <td><?php echo $entidadescontratantes->departamento; ?></td>
            <td>
                <?php echo Form::open(['route' => ['entidadescontratantes.destroy', $entidadescontratantes->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('entidadescontratantes.show', [$entidadescontratantes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('entidadescontratantes.edit', [$entidadescontratantes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>