<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
  
    <?php if(session('success')): ?>

        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:40%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:5%">Color</th>
            <th style="width:5%">size</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs">
                                 <?php if($details["color"] == ''): ?>
                                   <img src="<?php echo e(asset('uploads/products/'.substr($details["p_id"], 0, 1).'/'.$details["p_id"].'/'.$details["photo"])); ?>" width="80" height="80" class="img-responsive"/>
                                 <?php else: ?>
                                   <img src="<?php echo e($details['photo']); ?>"  width="80" height="80" class="img-responsive"/>
                                <?php endif; ?>
                                
                            </div>
                            <div class="col-sm-9">
                                <h4 class="nomargin"><?php echo e($details['name']); ?></h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">$<?php echo e($details['price']); ?></td>
                    <td data-th="color"><?php echo e($details['color']); ?></td>
                    <td data-th="size"><?php echo e($details['size']); ?></td>
                    <td data-th="Quantity">
                        <input type="number" value="<?php echo e($details['quantity']); ?>" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">$<?php echo e($details['price'] * $details['quantity']); ?></td>
                    <td class="actions" data-th="">

                        <button class="btn btn-info btn-sm update-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-trash-o"></i></button>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            
        </tr>
        <tr>
            <td><a href="<?php echo e(url('/shop')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td colspan="1" class="hidden-xs"></td>
            <td colspan="1" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total $<?php echo e($total); ?></strong></td>
            <td id='checkout_btn'><a class="btn btn-warning">Checkout <i class="fa fa-angle-right"></i></a></td>
        </tr>

        </tfoot>
    </table>
  
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(6);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>