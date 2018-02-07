<table class="table table-responsive" id="balancesfinancieros-table">
    <thead>
        <th>Concepto</th>
        <th>Valor</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $balancesfinancieros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balancesfinancieros): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php if($balancesfinancieros->estado != 'Acta parcial inicial'): ?>
        <tr>
            <td><?php echo $balancesfinancieros->estado; ?></td>
            <td><?php echo $balancesfinancieros->actaparcial; ?></td>
            <td>
                <?php echo Form::open(['route' => ['balancesfinancieros.destroy', $balancesfinancieros->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('balancesfinancieros.show', [$balancesfinancieros->id]); ?>" class='btn btn-default'><i class="glyphicon glyphicon-eye-open"></i></a> 
                    <a href="<?php echo route('balancesfinancieros.edit', [$balancesfinancieros->id]); ?>" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarBalances/<?php echo e($balancesfinancieros->idbalancesarch); ?>" class='btn btn-default btn' target="_blank"><i class="glyphicon glyphicon-download"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
</br></br>
    <b>Pendiente por pagar:<b> <h2><b><?php echo $ultimo_pendientepagar->pendientepagar; ?></b></h2>
    <br>