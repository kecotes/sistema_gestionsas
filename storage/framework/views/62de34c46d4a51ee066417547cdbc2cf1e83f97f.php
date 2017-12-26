<?php if(!empty($errors)): ?>
    <?php if($errors->any()): ?>
        <ul class="alert alert-danger" style="list-style-type: none">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>
