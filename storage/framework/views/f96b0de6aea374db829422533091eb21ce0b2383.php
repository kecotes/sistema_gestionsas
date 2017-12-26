<table class="table table-responsive" id="actividadescontratos-table">
    <thead>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th>Idtipoactividades</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $actividadescontratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividadescontratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $actividadescontratos->titulo; ?></td>
            <td><?php echo $actividadescontratos->contenido; ?></td>
            <td><?php echo $actividadescontratos->estado; ?></td>
            <td><?php echo $actividadescontratos->idcontratos; ?></td>
            <td><?php echo $actividadescontratos->idtipoactividades; ?></td>
            <td>
                <?php echo Form::open(['route' => ['actividadescontratos.destroy', $actividadescontratos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('actividadescontratos.show', [$actividadescontratos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('actividadescontratos.edit', [$actividadescontratos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>