<?php $__empty_1 = true; $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<div class="col-lg-4 col-md-8 single-item">
	    <div class="single-product img-thumbnail">
	       
	        <img class="img-fluid  filter_image_size" src="<?php echo e(asset('uploads/products/'.substr($product->Products_id, 0, 1).'/'.$product->Products_id.'/'.$product->product_image)); ?>" alt="" >
	        <hr>


	        <div class="product-details">
	            <h6><?php echo e($product->product_name); ?></h6>
	            <div class="price">

                <?php  $special=\App\Models\SpecificPrice::where(['product_id' =>$product->Products_id])->pluck('reduction')->last() ?>
                  
                  <?php if($special == 0 ): ?>
                    <h6><?php echo e($product->price); ?></h6>
                  <?php else: ?>
                    <h6><?php echo e($special); ?></h6>
                    <h6 class="l-through"><?php echo e($product->price); ?></h6>

                  <?php endif; ?>

                </div>

	            <div class="prd-bottom" style="width:270px">
	               
	                <a  class="social-info wish_class" data-wish='<?php echo e($product->Products_id); ?>'>
	                    <span class="fa fa-heart"></span>
	                    <p class="hover-text">Wishlist</p>
	                </a>

	                  <a href="<?php echo e(url('product').'/'.$product->Products_id); ?>" class="social-info">
	                    <span class="fa fa-eye"></span>
	                    <p class="hover-text">view more</p>
	                </a>
	            </div>
	        </div>
	    </div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<div class="col-lg-12 col-md-12"><br>
		<div class="alert alert-warning col-md-12" role="alert">
		  No Result Found.
		</div>
	</div>

<?php endif; ?>

<script type="text/javascript">
$(document).ready(function() {
    $('.cart_class').click(function(event) {
        var id = $(this).attr('id');
         $.get('<?php echo e(url('add-to-cart')); ?>/'+id, 
            function(data) {
            toastr.success('Product added to cart successfully!');

            $('#cart_id').html(data);
        });

    });


    $('.wish_class').click(function(event) {

    <?php if(Auth::id() !=null): ?>
        var id = $(this).data('wish');
        $.get('<?php echo e(url('wish')); ?>/'+id,
            function(data) {
            toastr.success(data);
             // alert(data);
            // $('#cart_id').html(data);
        });

    <?php else: ?>
        swal("Please login First")
    <?php endif; ?>


    });



});	  
pagination_fun();
</script>