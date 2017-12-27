<table class="table table-responsive" id="usuarioscontratados-table">
    <thead>
        <tr>
            <th>Residente</th>
            <th>Contrato</th>
            <th colspan="3">Accion</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $usuarioscontratados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarioscontratados): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php if($usuarioscontratados->idpersonas == $persona->id): ?>
                <td><?php echo $persona->name; ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contrato): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php if($usuarioscontratados->idcontratos == $contrato->id): ?>
                <td><?php echo $contrato->contratos; ?></td>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            <td>
                <?php echo Form::open(['route' => ['usuarioscontratados.destroy', $usuarioscontratados->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <!-- <a href="<?php echo route('usuarioscontratados.show', [$usuarioscontratados->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <!-- <a href="<?php echo route('usuarioscontratados.edit', [$usuarioscontratados->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>