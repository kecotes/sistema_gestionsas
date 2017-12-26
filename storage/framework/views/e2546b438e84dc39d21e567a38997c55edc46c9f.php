<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Item</th>
        <th>Tema</th>
        <th>Descripcion</th>
        <th>Unidad</th>
        <th>Valunitario</th>
        <th>Proyectadocantidad</th>
        <th>Proyectadototalunitario</th>
        <th>Proyectadoporcentaje</th>
        <th>Ejecutadocantidad</th>
        <th>Ejecutadototalunitario</th>
        <th>Ejecutadoporcentaje</th>
        <th>Porejecutarcantidad</th>
        <th>Porejecutartotalunitario</th>
        <th>Porejecutarporcentaje</th>
        <th>Iddatosejecucion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $ejecucionfisicofinancieras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ejecucionfisicofinanciera): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $ejecucionfisicofinanciera->item; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->tema; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->descripcion; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->unidad; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->valunitario; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->proyectadocantidad; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->proyectadototalunitario; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->proyectadoporcentaje; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->ejecutadocantidad; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->ejecutadototalunitario; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->ejecutadoporcentaje; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->porejecutarcantidad; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->porejecutartotalunitario; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->porejecutarporcentaje; ?></td>
            <td><?php echo $ejecucionfisicofinanciera->iddatosejecucion; ?></td>
            <td>
                <?php echo Form::open(['route' => ['ejecucionfisicofinancieras.destroy', $ejecucionfisicofinanciera->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('ejecucionfisicofinancieras.show', [$ejecucionfisicofinanciera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('ejecucionfisicofinancieras.edit', [$ejecucionfisicofinanciera->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>