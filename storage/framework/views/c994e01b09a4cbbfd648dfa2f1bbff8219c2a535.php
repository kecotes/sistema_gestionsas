<table class="table table-responsive" id="numuniones-table">
    <thead>
        <th>Contratista</th>
        <th>Union Temporal</th>
        <th>Porcentaje</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $numuniones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $numuniones): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $numuniones->idpjuridicas; ?></td>
            <td><?php echo $numuniones->idunionestemporales; ?></td>
            <td><?php echo $numuniones->porcentaje; ?></td>
            <td>
                <?php echo Form::open(['route' => ['numuniones.destroy', $numuniones->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('numuniones.show', [$numuniones->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('numuniones.edit', [$numuniones->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>