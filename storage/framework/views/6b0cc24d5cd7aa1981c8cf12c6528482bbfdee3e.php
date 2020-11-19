<select id="products" class="select2_field">
	<?php $__currentLoopData = $ungroupedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?> [<?php echo e($product->sku); ?>]</option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<div class="row">
	<div class="col-md-12">
		<a href="javascript:void(0)" class="btn btn-primary btn-add-to-group" <?php if(count($ungroupedProducts) < 1): ?> disabled="true" <?php endif; ?>>
			<?php echo e(trans('product.add_to_group')); ?>

		</a>
	</div>
</div>

<script>
	$(document).ready(function () {
		$('.select2_field').select2();
	});
</script>