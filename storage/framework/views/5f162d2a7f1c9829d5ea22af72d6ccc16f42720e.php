<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Tipodocumento</th>
        <th>Documento</th>
        <th>Expedicion</th>
        <th>Estado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $personas->direccion; ?></td>
            <td><?php echo $personas->telefono; ?></td>
            <td><?php echo $personas->tipodocumento; ?></td>
            <td><?php echo $personas->documento; ?></td>
            <td><?php echo $personas->expedicion; ?></td>
            <td><?php echo $personas->estado; ?></td>
            <td>
                <?php echo Form::open(['route' => ['personas.destroy', $personas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('personas.show', [$personas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('personas.edit', [$personas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>