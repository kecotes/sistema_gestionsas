<table class="table table-responsive" id="correspondencias-table">
    <thead>
        <tr>
        <th>Tipo de Correspondencia</th>
        <th>Fecha</th>
        <th>Destinatario</th>
        <th>Remitente</th>
        <th>Asunto</th>
            <th colspan="3">Accion</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $correspondencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $correspondencias): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>    
                <?php if($correspondencias->tipo == "Enviada"): ?>
                    <td bgcolor="#82E0AA"><?php echo $correspondencias->tipo; ?></td>
                <?php else: ?>
                    <td bgcolor="yellow"><?php echo $correspondencias->tipo; ?></td>
                <?php endif; ?>
            <td><?php echo $correspondencias->fecha; ?></td>
            <td><?php echo $correspondencias->destinatario; ?></td>
            <td><?php echo $correspondencias->remitente; ?></td>
            <td><?php echo $correspondencias->asunto; ?></td>
            <td>
                <?php echo Form::open(['route' => ['correspondencias.destroy', $correspondencias->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('correspondencias.show', [$correspondencias->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('correspondencias.edit', [$correspondencias->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarCorrespondencia/<?php echo e($correspondencias->id); ?>" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>