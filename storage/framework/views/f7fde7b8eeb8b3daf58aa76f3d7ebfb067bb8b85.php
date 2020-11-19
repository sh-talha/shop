<table class="table table-striped">
	<thead>
		<th><?php echo e(trans('product.name')); ?></th>
		<th><?php echo e(trans('product.sku')); ?></th>
		<th><?php echo e(trans('product.price')); ?></th>
		<th><?php echo e(trans('common.status')); ?></th>
		<th><?php echo e(trans('common.actions')); ?></th>
	</thead>
	<tbody>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr <?php if($currentProductId == $product->id): ?> class="tr-current-product" <?php endif; ?>>
				<td><?php echo e($product->name); ?></td>
				<td><?php echo e($product->sku); ?></td>
				<td><?php echo e(decimalFormat($product->price)); ?></td>
				<td><?php echo e($product->active == 1 ? trans('common.status') : trans('common.inactive')); ?></td>
				<td>
					<a href="<?php echo e(route('crud.products.edit', $product->id)); ?>" class="btn btn-xs btn-default" target="_blank"><?php echo e(trans('common.edit')); ?></a>
					<?php if(count($products) > 1): ?>
						<a href="javascript:void(0)" data-id="<?php echo e($product->id); ?>" class="btn btn-xs btn-default btn-remove-from-group">
							<i class="fa fa-times"></i> <?php echo e(trans('product.remove_from_group')); ?>

						</a>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>