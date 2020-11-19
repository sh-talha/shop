
<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<!--================Checkout Area =================-->
<section class="checkout_area section_gap">

    <div class="container" style="margin-top: -120px">

        <h2 style="text-align:left;"><?php echo e(__('base.biling_address')); ?></h2>
        <div class="billing_details" >
            <div class="row">
                <div class="col-lg-8" style="border: 3px solid #ECECEC;"><br>
                    <h3><?php echo e(__('base.billing_details')); ?></h3>
                    <form class="row contact_form" action="<?php echo e(route('confirmation',app()->getLocale())); ?>" method="get" novalidate="novalidate">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control " placeholder="<?php echo e(__('base.firstname')); ?>" id="Firstname" name="firstname" value="<?php echo e(Auth::user()->name); ?>">
                            
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="<?php echo e(__('base.lastname')); ?>">
                            
                        </div>
                       
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="<?php echo e(__('base.emailaddress')); ?>" value="<?php echo e(Auth::user()->email); ?>">
                            

                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control " id="phonenumber" name="phonenumber" placeholder="<?php echo e(__('base.phonenumber')); ?>"><br>
                            
                            <div class="alert alert-warning error_class" role="alert" id="phone_error">
                              <?php echo e(__('base.please_enter_phone_no')); ?>

                            </div>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            
                            <select class="form-control" name="country" id="countries" >
                                 <option  value=""><?php echo e(__('base.select_country')); ?></option>
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
                                 <option value=""><?php echo e(__('base.select_state')); ?></option>}
                                 
                              </select>

                           </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1" placeholder="<?php echo e(__('base.address_line_one')); ?>">
                            

                        </div>
                        <div class="col-md-12" >
                            <div class="alert alert-warning error_class" id="address_error" role="alert">
                              <?php echo e(__('base.please_enter_address')); ?>

                            </div>
                        </div>

                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2" placeholder="<?php echo e(__('base.address_line_two')); ?>">
                            
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="<?php echo e(__('base.postalcode_zip')); ?>">
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-warning error_class" id="zip_error" role="alert">
                              <?php echo e(__('base.please_enter_postcode')); ?>

                            </div>
                        </div>
                        <input type="text" name="price" id="total_price_pro" style="display: none">
                        <input type="submit" name="" id="form_submit" style="display: none">
                        
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2><?php echo e(__('base.your_order')); ?></h2>
                      
                        <ul class="list">
                            <li><a href="#"> <?php echo e(__('base.product')); ?><span><?php echo e(__('base.total')); ?></span></a></li>
                            <?php $total = 0 ?>

                            <?php if(session('cart')): ?>
                                <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                        <li>
                                            
                                                <span style="color: black; display: inline-block;width: 80px;"><?php echo e($details['name']); ?></span> 
                                                <span class="middle col-md-2" ><?php echo e($details['price']); ?>&euro;</span> 
                                                <span class="middle col-md-2">x<?php echo e($details['quantity']); ?></span> 
                                                <span class="last col-md-2"><?php echo e($details['price'] * $details['quantity']); ?>&euro;</span><br>
                                            
                                        </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>

                        <ul class="list list_2">
                            <li><a href=""><?php echo e(__('base.subtotal')); ?> <span><?php echo e($total); ?></span></a></li>
                            <li><a href=""><?php echo e(__('base.shipping')); ?> <span> 6.97 &euro;</span></a></li> 
                            <li><a href="" ><?php echo e(__('base.total')); ?> <span id="total_price"><?php echo e($total + 6.97); ?></span></a></li>
                        </ul>
                        <div class="creat_account">
                           
                        </div>
                        <a class="primary-btn" id="validation_button"><?php echo e(__('base.proceed_to_paymentt')); ?></a>
                    </div>
                </div>
            </div><br>
              <div class="row" style="padding-right: 15px;padding-left: 15px;">
                    <button class="btn btn-warning "><a href="<?php echo e(route('cart',app()->getLocale())); ?>" style="color: black" ><i class="fa fa-angle-left"></i> <?php echo e(__('base.back')); ?></a></button>
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