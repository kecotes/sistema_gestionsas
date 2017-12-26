<table class="table table-responsive" id="datosejecucionfisicofinancieras-table">
    <thead>
        <th>Item</th>
        <th>Tema</th>
        <th>Descripcion</th>
        <th>Ejecucionacumitem</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $datosejecucionfisicofinancieras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosejecucionfisicofinanciera): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $datosejecucionfisicofinanciera->item; ?></td>
            <td><?php echo $datosejecucionfisicofinanciera->tema; ?></td>
            <td><?php echo $datosejecucionfisicofinanciera->descripcion; ?></td>
            <td><?php echo $datosejecucionfisicofinanciera->ejecucionacumitem; ?></td>
            <td><?php echo $datosejecucionfisicofinanciera->estado; ?></td>
            <td><?php echo $datosejecucionfisicofinanciera->idcontratos; ?></td>
            <td>
                <?php echo Form::open(['route' => ['datosejecucionfisicofinancieras.destroy', $datosejecucionfisicofinanciera->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('datosejecucionfisicofinancieras.show', [$datosejecucionfisicofinanciera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('datosejecucionfisicofinancieras.edit', [$datosejecucionfisicofinanciera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>