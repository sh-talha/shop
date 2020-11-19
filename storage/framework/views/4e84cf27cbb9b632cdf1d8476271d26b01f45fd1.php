<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gaps" >
    <div class="container">
    <h2 style="text-align:left;">Confirmation</h2>
        
       
        <div class="row" style="background-color: white">
            <div class="col-md-8 order_details_table" style="margin-left:-10px;border-radius: 0px;background-color: white"  >
                <div class="row order_d_inner">
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4>Order Info</h4>
                            <ul class="list">
                                <li><a href="#"><span>Name</span> : <?php echo e($info->firstname." ". $info->lastname); ?></a></li>
                                <li><a href="#"><span>Phone number</span> : <?php echo e($info->phonenumber); ?></a></li>
                                <li><a href="#"><span>Email</span> : <?php echo e($info->emailaddress); ?></a></li>
                                <li><a href="#"><span>Date</span> : <?php echo e(date('Y-m-d')); ?></a></li>
                                <li><a href="#"><span>Total</span> : $<?php echo e($info->price); ?></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4>Billing Address</h4>
                            <ul class="list">
                                <li><a href="#"><span>Country</span> : <?php echo e($countries[0]->name); ?></a></li>
                                <li><a href="#"><span>City</span> : <?php echo e($state[0]->name); ?></a></li>
                                <li><a href="#"><span>Postcode </span> : <?php echo e($info->zip); ?></a></li>
                                <li><a href="#"><span>Address</span> : <?php echo e($info->add1); ?></a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
                <h2>Order Details</h2>
                <div class="table-responsive " >
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Color</th>
                                <th scope="col">Size</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>

                            <?php if(session('cart')): ?>
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                            <tr>
                                <td>
                                    <p><?php echo e($details['name']); ?></p>
                                </td>
                                <td>
                                    <p><?php echo e($details['price']); ?></p>
                                </td>
                                <td>
                                    <p><?php echo e($details['color']); ?></p>
                                </td>
                                <td>
                                    <p><?php echo e($details['size']); ?></p>
                                </td>
                                <td>
                                    <h5>x <?php echo e($details['quantity']); ?></h5>
                                </td>
                                <td>
                                    <p>$<?php echo e($details['price'] * $details['quantity']); ?></p>
                                </td>
                            </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                           
                            <tr>
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>$<?php echo e($total); ?></p>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr class="visible-xs">
                            
                        </tr>
                        <tr>
                            <td><a href="<?php echo e(url('/shop')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            
                            
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4 order_details_table" style="margin-left:10px;border-radius: 0px;background-color: #F0F0F0;color: black" >
                <h2>Card Details</h2>
                  <?php if(Session::has('success')): ?>
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p><?php echo e(Session::get('success')); ?></p>
                    </div>
                  <?php endif; ?>

                <form role="form" action="<?php echo e(route('stripe.post')); ?>" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form">
                    <?php echo e(csrf_field()); ?>

                    <hr>
                    <div style="display: none">
                        <input type="text" name="first_name" value="<?php echo e($info->firstname." ". $info->lastname); ?>">
                        <input type="text" name="phonenumber" value="<?php echo e($info->phonenumber); ?>">
                        <input type="text" name="emailaddress" value="<?php echo e($info->emailaddress); ?>">
                        <input type="text" name="price" value="<?php echo e($info->price); ?>">
                        <input type="text" name="countries" value="<?php echo e($countries[0]->name); ?>">
                        <input type="text" name="state" value="<?php echo e($state[0]->name); ?>">
                        <input type="text" name="zip" value="<?php echo e($info->zip); ?>">
                        <input type="text" name="add1" value="<?php echo e($info->add1); ?>">
                        
                    </div>



                    <div class='form-row row'>
                        
                            <label class='control-label'>Name on Card</label> 
                            <input class='form-control' size='4' type='text'>
                        
                    </div>

                    <div class='form-row row'>
                        
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        
                    </div>
                    <br>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-3 form-group cvc required'>
                            <label class='control-label'>CVC</label><br> 
                            <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-5 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                        <div class="form-check ">
                            <div class="float-md-left col-md-12">
                               <input type="checkbox" class="form-check-input " id="checkterms">
                               <label class="form-check-label" for="checkterms"><a target="blank" href="<?php echo e(url('termandcondition')); ?>">Accept Term and Conditions</a></label>
                                
                            </div><br><br>
                         </div>
                        <div class='form-row row error_class_pay' style="display: none">
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-4">
                                     <button class="btn btn-warning float-right" id="pay_button" type="button">Pay Now </button>
                                    <button class="btn btn-warning float-right" style="display: none" type="submit">Pay Now </button>
                                </div>
                                <div class="col-md-8" style="margin-top: -20px">
                                    
                                    <img src="<?php echo e(url('img/stripe.webp')); ?>" class="img-fluid" alt="">
                                
                                </div>
                                
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(6);


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>