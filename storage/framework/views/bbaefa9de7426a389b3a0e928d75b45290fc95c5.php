<table class="table table-responsive" id="adicciones-table">
    <thead>
        <tr>
            <th>Valor adicional</th>
        <th>Valor anticipo adicional</th>

            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $adicciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adicciones): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $adicciones->valoradicional; ?></td>
            <td><?php echo $adicciones->valoranticipoadicional; ?></td>
            <td>
                <?php echo Form::open(['route' => ['adicciones.destroy', $adicciones->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('adicciones.show', [$adicciones->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('adicciones.edit', [$adicciones->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <!-- <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?> -->
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>