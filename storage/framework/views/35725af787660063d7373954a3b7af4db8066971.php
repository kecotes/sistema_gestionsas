<?php echo Form::open(array('url'=>'contratos','method'=>'get','autocomplete'=>'off','role'=>'search')); ?>

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="<?php echo e($searchText); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-success">Buscar</button>
		</span>
	</div>
</div>
<?php echo e(Form::close()); ?>

