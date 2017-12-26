<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Documento</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $residentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $residentes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $residentes->nombre; ?></td>
            <td><?php echo $residentes->apellido; ?></td>
            <td><?php echo $residentes->direccion; ?></td>
            <td><?php echo $residentes->telefono; ?></td>
            <td><?php echo $residentes->documento; ?></td>
            <td>
                <?php echo Form::open(['route' => ['residentes.destroy', $residentes->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('residentes.show', [$residentes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('residentes.edit', [$residentes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que desea eliminar?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
