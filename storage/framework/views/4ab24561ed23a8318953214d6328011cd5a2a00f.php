<table class="table table-responsive" id="balancesfinancieros-table">
    <thead>
        <th>Actaparcial</th>
        <th>Pendientepagar</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th>Idtipoactividades</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $balancesfinancieros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balancesfinancieros): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $balancesfinancieros->actaparcial; ?></td>
            <td><?php echo $balancesfinancieros->pendientepagar; ?></td>
            <td><?php echo $balancesfinancieros->estado; ?></td>
            <td><?php echo $balancesfinancieros->idcontratos; ?></td>
            <td><?php echo $balancesfinancieros->idtipoactividades; ?></td>
            <td>
                <?php echo Form::open(['route' => ['balancesfinancieros.destroy', $balancesfinancieros->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('balancesfinancieros.show', [$balancesfinancieros->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('balancesfinancieros.edit', [$balancesfinancieros->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>