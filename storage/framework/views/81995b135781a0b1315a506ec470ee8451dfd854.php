<table class="table table-responsive" id="actividadeseguimientos-table">
    <thead>
        <tr>
            <th>Nombreinforme</th>
        <th>Idactividadescontratos</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $actividadeseguimientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividadeseguimiento): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $actividadeseguimiento->nombreinforme; ?></td>
            <td><?php echo $actividadeseguimiento->idactividadescontratos; ?></td>
            <td>
                <?php echo Form::open(['route' => ['actividadeseguimientos.destroy', $actividadeseguimiento->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('actividadeseguimientos.show', [$actividadeseguimiento->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('actividadeseguimientos.edit', [$actividadeseguimiento->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>