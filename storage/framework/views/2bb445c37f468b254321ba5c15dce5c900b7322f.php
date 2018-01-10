<table class="table table-responsive" id="pjuridicas-table">
    <thead>
        <th>Nombre</th>
        <th>Tipo de Identificacion</th>
        <th>No</th>
        <th>Expedida</th>
        <th>Tipo de persona juridica</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pjuridicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pjuridicas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $pjuridicas->nombre; ?></td>
            <td><?php echo $pjuridicas->tipodocumento; ?></td>
            <td><?php echo $pjuridicas->documento; ?></td>
            <td><?php echo $pjuridicas->expedicion; ?></td>
            <td><?php echo $pjuridicas->tipopjuridica; ?></td>
            <td>
                <?php echo Form::open(['route' => ['pjuridicas.destroy', $pjuridicas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('pjuridicas.show', [$pjuridicas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('pjuridicas.edit', [$pjuridicas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>