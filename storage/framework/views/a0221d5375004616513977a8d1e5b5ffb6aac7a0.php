<table class="table table-responsive" id="unionestemporales-table">
    <thead>
        <th>Nombre</th>
        <th>Nit</th>
        <th>Porcentaje</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $unionestemporales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unionestemporales): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $unionestemporales->nombre; ?></td>
            <td><?php echo $unionestemporales->documento; ?></td>
            <td><?php echo $unionestemporales->porcentaje; ?></td>

            <td>
                <?php echo Form::open(['route' => ['unionestemporales.destroy', $unionestemporales->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('unionestemporales.show', [$unionestemporales->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('unionestemporales.edit', [$unionestemporales->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>