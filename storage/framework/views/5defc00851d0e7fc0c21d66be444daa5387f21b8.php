
<!-- Administrador -->
<?php if(Auth::user()->tipoUsuario == '1'): ?>
<?php echo Form::open(array('url'=>'analisisretrasos','method'=>'get','autocomplete'=>'off','role'=>'search')); ?>

<div class="form-group">
	<div class="input-group">
		<select name="searchText" class="form-control select2" class="form-control selectpicker"  data-live-search="true">
					<option value="">Buscar...</option>
					<?php $__currentLoopData = $contratosADM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratosADM): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<option value="<?php echo e($contratosADM->id); ?>" > <?php echo e($contratosADM->contratos); ?> </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
		<span class="input-group-btn">
		<button type="submit" class="btn btn-success">Seleccionar contrato</button>
		</span>
	</div>
</div>
<?php echo e(Form::close()); ?>

<?php endif; ?>

<!-- Resiente -->
<?php if(Auth::user()->tipoUsuario == '2'): ?>
<?php echo Form::open(array('url'=>'analisisretrasos','method'=>'get','autocomplete'=>'off','role'=>'search')); ?>

<div class="form-group">
	<div class="input-group">
		<select name="searchText" class="form-control select2" class="form-control selectpicker"  data-live-search="true">
					<option value="">Buscar...</option>
					<?php $__currentLoopData = $contratosRdt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratosRdt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<option value="<?php echo e($contratosRdt->id); ?>" > <?php echo e($contratosRdt->contratos); ?> </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
		<span class="input-group-btn">
		<button type="submit" class="btn btn-success">Seleccionar contrato</button>
		</span>
	</div>
</div>
<?php echo e(Form::close()); ?>

<?php endif; ?>