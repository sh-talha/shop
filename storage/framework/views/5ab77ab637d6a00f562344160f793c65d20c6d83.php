<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<h2 style="text-align:center;">Billing Address</h2>
<!-- End Banner Area -->
<!--================Checkout Area =================-->
<section class="checkout_area section_gap">

    <div class="container">

        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="<?php echo e(url('confirmation')); ?>" method="get" novalidate="novalidate">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control " placeholder="Firstname" id="Firstname" name="firstname" value="<?php echo e(Auth::user()->name); ?>">
                            
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
                            
                        </div>
                       
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="Email Address" value="<?php echo e(Auth::user()->email); ?>">
                            

                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control " id="phonenumber" name="phonenumber" placeholder="Phone number"><br>
                            
                            <div class="alert alert-warning error_class" role="alert" id="phone_error">
                              Please Enter Phone No
                            </div>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            
                            <select class="form-control" name="country" id="countries" >
                                 <option  value="">Select Country</option>
                               <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($view_countries->id); ?>"><?php echo e($view_countries->name); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select><br>
                            <div class="alert alert-warning error_class" role="alert" id="country_error">
                              Please select country
                            </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                           
                           <div id="state">
                              <select class="form-control" name="city" >
                                 <option value="">Select State</option>}
                                 
                              </select>

                           </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1" placeholder="Address line 01">
                            

                        </div>
                        <div class="col-md-12" >
                            <div class="alert alert-warning error_class" id="address_error" role="alert">
                              Please Enter address.
                            </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2" placeholder="Address line 02">
                            
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-warning error_class" id="zip_error" role="alert">
                              Please Enter Postal Code.
                            </div>
                        </div>
                        <input type="text" name="price" id="total_price_pro" style="display: none">
                        <input type="submit" name="" id="form_submit" style="display: none">
                        
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                      
                        <ul class="list">
                            <li><a href="#"> Product<span>Total</span></a></li>
                            <?php $total = 0 ?>

                            <?php if(session('cart')): ?>
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                        <li>
                                            
                                                <span style="color: black; display: inline-block;width: 80px;"><?php echo e($details['name']); ?></span> 
                                                <span class="middle col-md-2" ><?php echo e($details['price']); ?></span> 
                                                <span class="middle col-md-2">x<?php echo e($details['quantity']); ?></span> 
                                                <span class="last col-md-2">$<?php echo e($details['price'] * $details['quantity']); ?></span><br>
                                            
                                        </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>

                        <ul class="list list_2">
                            
                            <li><a href="#" >Total <span id="total_price"><?php echo e($total); ?></span></a></li>
                        </ul>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <a class="primary-btn" id="validation_button">Proceed to Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(6);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>