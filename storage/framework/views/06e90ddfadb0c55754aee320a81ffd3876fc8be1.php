<table class="table table-responsive" id="estadospolizas-table">
    <thead>
        <th>Amparo</th>
        <th>Vigencia desde</th>
        <th>Vigencia hasta</th>
        <th>Valor asegurado</th>
        <th>Estado de poliza</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $estadospolizas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estadospolizas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $estadospolizas->amparo; ?></td>
            <td><?php echo $estadospolizas->vigenciadesde; ?></td>
            <td><?php echo $estadospolizas->vigenciahasta; ?></td>
            <td><?php echo $estadospolizas->valorasegurado; ?></td>
            <td><?php echo $estadospolizas->estadopoliza; ?></td>
            <td>
                <?php echo Form::open(['route' => ['estadospolizas.destroy', $estadospolizas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('estadospolizas.show', [$estadospolizas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('estadospolizas.edit', [$estadospolizas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo route('polizas.index'); ?>" class='btn btn-default btn-xs' target="_blank"><i class="fa fa-mail-reply"></i></a> 
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>