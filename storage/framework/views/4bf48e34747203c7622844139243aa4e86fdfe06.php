<table class="table table-responsive" id="actividadescontratos-table">
    <thead>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Estado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $controlequipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $controlequipos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $controlequipos->titulo; ?></td>
            <td><?php echo $controlequipos->contenido; ?></td>
            <td><?php echo $controlequipos->estado; ?></td>
            <td>
                <?php echo Form::open(['route' => ['controlequipos.destroy', $controlequipos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('controlequipos.show', [$controlequipos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('controlequipos.edit', [$controlequipos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>