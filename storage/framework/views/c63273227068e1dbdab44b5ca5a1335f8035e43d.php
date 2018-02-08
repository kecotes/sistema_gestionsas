<?php echo Form::open(array('url'=>'adicciones','method'=>'get','autocomplete'=>'off','role'=>'search')); ?>

<div class="form-group">
	<div class="input-group">
		<select name="searchText" class="form-control select2" class="form-control selectpicker"  data-live-search="true">
			<option value="">Buscar...</option>
			<?php $__currentLoopData = $contratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<option value="<?php echo e($contratos->id); ?>"> <?php echo e($contratos->nocontrato); ?> </option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</select>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-success">Seleccionar contrato</button>
		</span>
	</div>
</div>
<?php echo e(Form::close()); ?>

