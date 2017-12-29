<!-- Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
<table class="table table-responsive" id="contratos-table">
    <thead>
        <th>Numero del Contrato</th>
        <th>Objeto del Contrato</th>
        <th>Apodo del Contrato</th>
        <th>Valor del Contrato</th>
        <th colspan="4">Accion</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $contratos->ncontrato; ?></td>
            <td><?php echo $contratos->objetocontrato; ?></td>
            <td><?php echo $contratos->apodocontrato; ?></td>
            <td><?php echo $contratos->valorcontrato; ?></td>
            <td>
                <?php echo Form::open(['route' => ['contratos.destroy', $contratos->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('contratos.show', [$contratos->id]); ?>" class='btn btn-default btn'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('contratos.edit', [$contratos->id]); ?>" class='btn btn-default btn'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo route('contratos.edit', [$contratos->id]); ?>" class='btn btn-default btn'><i class="glyphicon glyphicon-duplicate"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn', 'onclick' => "return confirm('Seguro que desea eliminar?')"]); ?>

                </div>
              
                <?php echo Form::close(); ?>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php endif; ?>

<!-- Resiente -->
<?php if(Auth::user()->tipoUsuario == '2'): ?>
<table class="table table-responsive" id="contratos-table">
    <thead>
        <th>Numero del Contrato</th>
        <th>Objeto del Contrato</th>
        <th>Apodo del Contrato</th>
        <th>Valor del Contrato</th>
        <th colspan="4">Accion</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $contratosRdt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratosRdt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $contratosRdt->ncontrato; ?></td>
            <td><?php echo $contratosRdt->objetocontrato; ?></td>
            <td><?php echo $contratosRdt->apodocontrato; ?></td>
            <td><?php echo $contratosRdt->valorcontrato; ?></td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>

<?php endif; ?>