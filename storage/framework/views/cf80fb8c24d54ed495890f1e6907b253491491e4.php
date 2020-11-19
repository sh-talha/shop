<?php $__env->startSection('content-header'); ?>
	<section class="content-header">
	  <h1>
	    <span><?php echo e($crud->entity_name); ?></span>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="<?php echo e(url(config('backpack.base.route_prefix'), 'dashboard')); ?>"><?php echo e(trans('backpack::crud.admin')); ?></a></li>
	    <li><a href="<?php echo e(url($crud->route)); ?>" class="text-capitalize"><?php echo e($crud->entity_name_plural); ?></a></li>
	    <li class="active"><?php echo e(trans('backpack::crud.preview')); ?></li>
	  </ol>
	</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php if($crud->hasAccess('list')): ?>
		<a href="<?php echo e(url($crud->route)); ?>"><i class="fa fa-angle-double-left"></i> <?php echo e(trans('backpack::crud.back_to_all')); ?> <span><?php echo e($crud->entity_name_plural); ?></span></a><br><br>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-12 well">
			<h2><?php echo e(trans('order.order')); ?> #<?php echo e($order->id); ?> - <?php echo e($order->user->name); ?></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-ticket"></i> <?php echo e(trans('order.order_status')); ?></span>
		          </h3>
			    </div>
			    <div class="box-body">
			    	<h4>
			    		Current status <br><br>
			    		<span class="label label-default"><?php echo e($order->status->name); ?></span>
			    	</h4>

					<hr>

					<h4>
						Status history
					</h4>
			    	<?php if(count($order->statusHistory) > 0): ?>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th><?php echo e(trans('order.status')); ?></th>
									<th><?php echo e(trans('common.date')); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $order->statusHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusHistory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($statusHistory->status->name); ?></td>
										<td><?php echo e($statusHistory->created_at); ?></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					<?php else: ?>
						<div class="alert alert-info">
							<?php echo e(trans('order.no_status_history')); ?>

						</div>
					<?php endif; ?>

					<hr>

					<?php if(count($orderStatuses) > 0): ?>
						<form action="<?php echo e(route('updateOrderStatus')); ?>" method="POST">
							<?php echo csrf_field(); ?>

							<input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">

							<div class="form-group">
								<select name="status_id" id="status_id" class="select2_field" style="width: 100%">
									<?php $__currentLoopData = $orderStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($orderStatus->id); ?>"><?php echo e($orderStatus->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>

							<button type="submit" class="btn btn-primary"><?php echo e(trans('order.update_status')); ?></button>
						</form>
					<?php else: ?>
						<div class="alert alert-info">
							<?php echo e(trans('order.no_order_statuses')); ?>

						</div>
					<?php endif; ?>
			    </div>
		    </div>
		</div>
		<div class="col-md-5">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-user"></i> <?php echo e(trans('client.client')); ?></span>
		          </h3>
			    </div>

			    <div class="box-body">
			    	<h3><?php echo e(trans('user.tab_general')); ?></h3>
					<div class="col-md-12 well">
						<div class="col-md-6">
							<i class="fa fa-user-circle-o"></i> <?php echo e($order->user->name); ?> <br/>
							<i class="fa fa-envelope"></i> <a href="mailto:<?php echo e($order->user->email); ?>"><?php echo e($order->user->email); ?></a> <br/>
						</div>
						<div class="col-md-6">
							<i class="fa fa-birthday-cake"></i> <?php echo e($order->user->birthday ? $order->user->birthday.' ('.$order->user->age().' '.strtolower(trans('common.years')).')': '-'); ?>

							<br>
							<?php echo ($order->user->gender == 1) ? '<i class="fa fa-mars"></i> '.trans('user.male') : '<i class="fa fa-venus"></i> '.trans('user.female'); ?>

						</div>
					</div>
			    </div>
		    </div>

		    <div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-user"></i> <?php echo e(trans('order.shipping_details')); ?></span>
		          </h3>
			    </div>

			    <div class="box-body">
			    	<div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-shipping-address" data-toggle="tab"><?php echo e(trans('order.shipping_address')); ?></a></li>
                            <li><a href="#tab-billing-info" data-toggle="tab"><?php echo e(trans('order.billing_info')); ?></a></li>
                        </ul>
                        <?php if($order->shippingAddress): ?>
	                        <div class="tab-content">
	                            <div class="tab-pane active" id="tab-shipping-address">
									<h4><?php echo e(trans('order.shipping_address')); ?></h4>
									<table class="table table-condensed table-hover">
										<tr>
											<td><?php echo e(trans('address.contact_person')); ?></td>
											<td><?php echo e($order->shippingAddress->name); ?></td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.address')); ?></td>
											<td>
												<?php echo e($order->shippingAddress->address1); ?> <br>
												<?php echo e($order->shippingAddress->address2); ?>

											</td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.county')); ?></td>
											<td><?php echo e($order->shippingAddress->county); ?></td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.city')); ?></td>
											<td><?php echo e($order->shippingAddress->city); ?></td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.postal_code')); ?></td>
											<td><?php echo e($order->shippingAddress->postal_code); ?></td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.phone')); ?></td>
											<td><?php echo e($order->shippingAddress->phone); ?></td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.mobile_phone')); ?></td>
											<td><?php echo e($order->shippingAddress->mobile_phone); ?></td>
										</tr>
										<tr>
											<td><?php echo e(trans('address.comment')); ?></td>
											<td><?php echo e($order->shippingAddress->comment); ?></td>
										</tr>
									</table>
	                            </div>
	                            <div class="tab-pane" id="tab-billing-info">
									<?php if($order->billingCompanyInfo): ?>
										<h4><?php echo e(trans('order.billing_company_details')); ?></h4>
										<table class="table table-condensed table-hover">
											<tr>
												<td><?php echo e(trans('company.company_name')); ?></td>
												<td><?php echo e($order->billingCompanyInfo->name); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('company.address')); ?></td>
												<td>
													<?php echo e($order->billingCompanyInfo->address1); ?> <br>
													<?php echo e($order->billingCompanyInfo->address2); ?>

												</td>
											</tr>
											<tr>
												<td><?php echo e(trans('company.county')); ?></td>
												<td><?php echo e($order->billingCompanyInfo->county); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('company.city')); ?></td>
												<td><?php echo e($order->billingCompanyInfo->city); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('company.tin')); ?></td>
												<td><?php echo e($order->billingCompanyInfo->tin); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('company.trn')); ?></td>
												<td><?php echo e($order->billingCompanyInfo->trn); ?></td>
											</tr>
										</table>
									<?php endif; ?>

									<?php if($order->billingAddress): ?>
										<h4><?php echo e(trans('order.billing_address')); ?></h4>
										<table class="table table-condensed table-hover">
											<tr>
												<td><?php echo e(trans('address.contact_person')); ?></td>
												<td><?php echo e($order->billingAddress->name); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.address')); ?></td>
												<td>
													<?php echo e($order->billingAddress->address1); ?> <br>
													<?php echo e($order->billingAddress->address2); ?>

												</td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.county')); ?></td>
												<td><?php echo e($order->billingAddress->county); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.city')); ?></td>
												<td><?php echo e($order->billingAddress->city); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.postal_code')); ?></td>
												<td><?php echo e($order->billingAddress->postal_code); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.phone')); ?></td>
												<td><?php echo e($order->billingAddress->phone); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.mobile_phone')); ?></td>
												<td><?php echo e($order->billingAddress->mobile_phone); ?></td>
											</tr>
											<tr>
												<td><?php echo e(trans('address.comment')); ?></td>
												<td><?php echo e($order->billingAddress->comment); ?></td>
											</tr>
										</table>
									<?php endif; ?>
	                            </div>
	                        </div>
                        <?php endif; ?>
                    </div>
			    </div>
		    </div>
		</div>
	</div>

	

	<div class="row">
		<div class="col-md-12">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-shopping-cart"></i> <?php echo e(trans('product.products')); ?></span>
		          </h3>
			    </div>

			    <div class="box-body">
			    	<div class="col-md-12">
				    	<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th><?php echo e(trans('product.product')); ?></th>
									<th><?php echo e(trans('product.price')); ?></th>
									<th><?php echo e(trans('product.price_with_tax')); ?></th>
									<th><?php echo e(trans('order.quantity')); ?></th>
									<th class="text-right"><?php echo e(trans('common.total')); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td class="vertical-align-middle">
											<a href="<?php echo e(route('crud.products.edit', $product->pivot->product_id)); ?>"><?php echo e($product->pivot->name); ?></a><br/>
											<span class="font-12">SKU: <?php echo e($product->pivot->sku); ?></span>
										</td>
										<td class="vertical-align-middle"><?php echo e(decimalFormat($product->pivot->price).' '.$order->currency->name); ?></td>
										<td class="vertical-align-middle"><?php echo e(decimalFormat($product->pivot->price_with_tax).' '.$order->currency->name); ?></td>
										<td class="vertical-align-middle"><?php echo e($product->pivot->quantity); ?></td>
										<td class="vertical-align-middle text-right"><?php echo e(decimalFormat($product->pivot->price_with_tax*$product->pivot->quantity).' '.$order->currency->name); ?></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>

					<div class="col-md-6 col-md-offset-6">
						<table class="table table-condensed">
							<tr>
								<td class="text-right"><?php echo e(trans('order.shipping_cost')); ?>:</td>
								<td class="text-right"><?php echo e($order->carrier->price.' '.$order->currency->name); ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong><?php echo e(trans('common.total')); ?>:</strong></td>
								<td class="text-right"><strong><?php echo e($order->total().' '.$order->currency->name); ?></strong></td>
							</tr>
						</table>
					</div>

			    </div>
		    </div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('after_styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/crud/css/crud.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/crud/css/show.css')); ?>">

	<!-- include select2 css-->
	<link href="<?php echo e(asset('vendor/adminlte/plugins/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />

	<!-- Select 2 Bootstrap theme -->
	<link href="<?php echo e(asset('css/select2-bootstrap-min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('after_scripts'); ?>
	<script src="<?php echo e(asset('vendor/backpack/crud/js/crud.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/backpack/crud/js/show.js')); ?>"></script>

	<!-- include select2 js -->
    <script src="<?php echo e(asset('vendor/adminlte/plugins/select2/select2.min.js')); ?>"></script>

	<script>
		$(document).ready(function () {
			<?php if(count($orderStatuses) > 0): ?>
				$('.select2_field').select2({
                            theme: "bootstrap"
                        });
			<?php endif; ?>
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backpack::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>