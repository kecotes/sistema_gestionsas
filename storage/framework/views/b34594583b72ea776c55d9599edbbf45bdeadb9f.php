<table class="table table-responsive" id="archivospersonas-table">
    <thead>
        <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Idpersonas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $archivospersonas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivospersonas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $archivospersonas->archivo; ?></td>
            <td><?php echo $archivospersonas->titulo; ?></td>
            <td><?php echo $archivospersonas->descripcion; ?></td>
            <td><?php echo $archivospersonas->idpersonas; ?></td>
            <td>
                <?php echo Form::open(['route' => ['archivospersonas.destroy', $archivospersonas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('archivospersonas.show', [$archivospersonas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('archivospersonas.edit', [$archivospersonas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>