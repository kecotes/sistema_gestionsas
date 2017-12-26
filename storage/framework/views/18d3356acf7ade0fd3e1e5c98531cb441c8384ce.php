<table class="table table-responsive" id="contratos-table">
    <thead>
        <th>Entidadcontratante</th>
        <th>Objetocontrato</th>
        <th>Nocontrato</th>
        <th>Ncontrato</th>
        <th>Apodocontrato</th>
        <th>Valorcontratol</th>
        <th>Valorcontrato</th>
        <th>Valoranticipol</th>
        <th>Valoranticipo</th>
        <th>Porcentajeanticipo</th>
        <th>Formapago</th>
        <th>Valoradicional</th>
        <th>Valoranticipoadicional</th>
        <th>Plazoinicial</th>
        <th>Fechainiciacion</th>
        <th>Fechafinalizacion</th>
        <th>Tipocontrato</th>
        <th>Estado</th>
        <th>Idpersonas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $contratos->entidadcontratante; ?></td>
            <td><?php echo $contratos->objetocontrato; ?></td>
            <td><?php echo $contratos->nocontrato; ?></td>
            <td><?php echo $contratos->ncontrato; ?></td>
            <td><?php echo $contratos->apodocontrato; ?></td>
            <td><?php echo $contratos->valorcontratol; ?></td>
            <td><?php echo $contratos->valorcontrato; ?></td>
            <td><?php echo $contratos->valoranticipol; ?></td>
            <td><?php echo $contratos->valoranticipo; ?></td>
            <td><?php echo $contratos->porcentajeanticipo; ?></td>
            <td><?php echo $contratos->formapago; ?></td>
            <td><?php echo $contratos->valoradicional; ?></td>
            <td><?php echo $contratos->valoranticipoadicional; ?></td>
            <td><?php echo $contratos->plazoinicial; ?></td>
            <td><?php echo $contratos->fechainiciacion; ?></td>
            <td><?php echo $contratos->fechafinalizacion; ?></td>
            <td><?php echo $contratos->tipocontrato; ?></td>
            <td><?php echo $contratos->estado; ?></td>
            <td><?php echo $contratos->idpersonas; ?></td>
            <td>
                <?php echo Form::open(['route' => ['contratos.destroy', $contratos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('contratos.show', [$contratos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('contratos.edit', [$contratos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>