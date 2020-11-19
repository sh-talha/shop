<select class="form-control" name="city" >
                       
                    
<?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	<option value="<?php echo e($view_state->id); ?>"><?php echo e($view_state->name); ?></option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>