<?php $__env->startSection('buyerbody'); ?>
<div class="col-md-9">
    <div class="profile-content" style=" margin-bottom:15px;">

       <span style="margin-left:25px;"><h3 style="margin-left:25px;">Your WishList . . .</h3></span>
       
        <hr>
         <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $check_wish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <div class="col-lg-4 col-md-6"  id="cart_id_<?php echo e($view_wish->Products_id); ?>">
                    <div class="single-product img-thumbnail">
                       <img class="img-fluid  filter_image_size" src="uploads/products/<?php echo e(substr($view_wish->Products_id, 0, 1)); ?>/<?php echo e($view_wish->Products_id); ?>/<?php echo e($view_wish->product_image); ?>" >
                       <hr>
                        <div class="product-details">
                          <h6><?php echo e($view_wish->product_name); ?></h6>
                            <div class="price">
                               <h6><?php echo e($view_wish->price); ?></h6>
                                
                            </div>
                            <div class="prd-bottom">
                             <div class="container ">
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn-sm btn cart_class" id="<?php echo e($view_wish->Products_id); ?>" style="background-color: #8BDE7F;color: white">Add To cart </button>
                                 </div>
                                 <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn-sm btn btn-danger delete_class" data-wishlist="<?php echo e($view_wish->Products_id); ?>">Delete</button>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <div class="col-lg-12 col-md-12"><br>
                      <div class="alert alert-warning" role="alert">
                        No Wishlist.
                      </div>
                  </div>
              <?php endif; ?>
            </div></div> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
    ActiveMenu(4);
    ActiveSub(4);


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('myaccount', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>