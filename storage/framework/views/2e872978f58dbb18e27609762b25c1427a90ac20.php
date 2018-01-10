<table class="table table-responsive" id="tiposcontratos-table">
    <thead>
        <th>Tipo de Contrato</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tiposcontratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiposcontratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $tiposcontratos->nombre; ?></td>
            <td>
                <?php echo Form::open(['route' => ['tiposcontratos.destroy', $tiposcontratos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('tiposcontratos.show', [$tiposcontratos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('tiposcontratos.edit', [$tiposcontratos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>