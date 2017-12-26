<table class="table table-responsive" id="novedadesfechas-table">
    <thead>
        <th>Plazoinicial</th>
        <th>Fechainiciacion</th>
        <th>Fechafinalizacion</th>
        <th>Fechasuspension</th>
        <th>Fechareinicio</th>
        <th>Adicciontiempo</th>
        <th>Fechafinalizacionadiccion</th>
        <th>Agregar</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $novedadesfechas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $novedadesfechas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $novedadesfechas->plazoinicial; ?></td>
            <td><?php echo $novedadesfechas->fechainiciacion; ?></td>
            <td><?php echo $novedadesfechas->fechafinalizacion; ?></td>
            <td><?php echo $novedadesfechas->fechasuspension; ?></td>
            <td><?php echo $novedadesfechas->fechareinicio; ?></td>
            <td><?php echo $novedadesfechas->adicciontiempo; ?></td>
            <td><?php echo $novedadesfechas->fechafinalizacionadiccion; ?></td>
            <td><?php echo $novedadesfechas->agregar; ?></td>
            <td><?php echo $novedadesfechas->estado; ?></td>
            <td><?php echo $novedadesfechas->idcontratos; ?></td>
            <td>
                <?php echo Form::open(['route' => ['novedadesfechas.destroy', $novedadesfechas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('novedadesfechas.show', [$novedadesfechas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('novedadesfechas.edit', [$novedadesfechas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>