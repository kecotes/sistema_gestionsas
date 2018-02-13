<table class="table table-responsive" id="polizas-table">
    <thead>
        <th>Fecha de expedicion</th>
        <th>Tipo de poliza</th>
        <th>Numero de poliza</th>
        <th>Tipo de certificado</th>
        <th>Observaciones</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $polizas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $polizas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $polizas->fechaexpedicion; ?></td>
            <td><?php echo $polizas->tipopoliza; ?></td>
            <td><?php echo $polizas->npoliza; ?></td>
            <td><?php echo $polizas->tipocertificado; ?></td>
            <td><?php echo $polizas->observaciones; ?></td>
            <td>
                <?php echo Form::open(['route' => ['polizas.destroy', $polizas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <!-- <a href="<?php echo route('polizas.show', [$polizas->id]); ?>" class='btn btn-default'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="<?php echo route('polizas.edit', [$polizas->id]); ?>" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo route('estadospolizas.index'); ?>" class='btn btn-default'><i class="fa fa-mail-forward"></i></a> 
                    <a href="descargarPoliza/<?php echo e($polizas->idpolizasarch); ?>" class='btn btn-default' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>