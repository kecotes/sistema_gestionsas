<table class="table table-responsive" id="polizas-table">
    <thead>
        <th>Fechaexpedicion</th>
        <th>Tipopoliza</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $polizas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $polizas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $polizas->fechaexpedicion; ?></td>
            <td><?php echo $polizas->tipopoliza; ?></td>
            <td><?php echo $polizas->estado; ?></td>
            <td><?php echo $polizas->idcontratos; ?></td>
            <td>
                <?php echo Form::open(['route' => ['polizas.destroy', $polizas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('polizas.show', [$polizas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('polizas.edit', [$polizas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>