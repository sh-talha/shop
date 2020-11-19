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
    <h2 style="text-align:left;"><?php echo e(__('base.confirmation')); ?></h2>
        
       
        <div class="row" style="background-color: white; margin-bottom: 50px;">
            <div class="col-md-8 order_details_table" style="margin-left:-10px;border-radius: 10px;background-color: white;border: solid 1px;"  >
                <div class="row order_d_inner">
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4><?php echo e(__('base.order_info')); ?></h4>
                            <ul class="list">
                                <li><a href="#"><span><?php echo e(__('base.name')); ?></span> : <?php echo e($info->firstname." ". $info->lastname); ?></a></li>
                                <li><a href="#"><span><?php echo e(__('base.phonenumber')); ?></span> : <?php echo e($info->phonenumber); ?></a></li>
                                <li><a href="#"><span><?php echo e(__('base.email')); ?></span> : <?php echo e($info->emailaddress); ?></a></li>
                                <li><a href="#"><span><?php echo e(__('base.date')); ?></span> : <?php echo e(date('Y-m-d')); ?></a></li>
                                <li><a href="#"><span>Total</span> : <?php echo e($info->price); ?></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4><?php echo e(__('base.biling_address')); ?></h4>
                            <ul class="list">
                                <li><a href="#"><span><?php echo e(__('base.country')); ?></span> : <?php echo e($countries[0]->name); ?></a></li>
                                <li><a href="#"><span><?php echo e(__('base.city')); ?></span> : <?php echo e($state[0]->name); ?></a></li>
                                <li><a href="#"><span><?php echo e(__('base.postcode')); ?> </span> : <?php echo e($info->zip); ?></a></li>
                                <li><a href="#"><span><?php echo e(__('base.address')); ?></span> : <?php echo e($info->add1); ?></a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
                <h2>Order Details</h2>
                <div class="table-responsive " >
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><?php echo e(__('base.product')); ?></th>
                                <th scope="col"><?php echo e(__('base.price')); ?></th>
                                <th scope="col"><?php echo e(__('base.color')); ?></th>
                                <th scope="col"><?php echo e(__('base.size')); ?></th>
                                <th scope="col"><?php echo e(__('base.quantity')); ?></th>
                                <th scope="col"><?php echo e(__('base.total')); ?></th>
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
                                    <p><?php echo e($details['price'] * $details['quantity']); ?>&euro;</p>
                                </td>
                            </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                           
                            <tr>
                                <td>
                                    <h4><?php echo e(__('base.total')); ?></h4>
                                </td>
                                <td>
                                    <P><?php echo e(__('base.shopping_cost')); ?></P>
                                </td>
                                <td>
                                    <P>6,97 &euro;</P>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p><?php echo e($total + 6.97); ?>&euro;</p>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr class="visible-xs">
                            
                        </tr>
                        <tr>
                            <td><a href="<?php echo e(route('checkout',App::getLocale())); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> <?php echo e(__('base.back')); ?></a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td colspan="2" class="hidden-xs"></td>
                            
                            
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4 order_details_table" style="margin-left:10px; margin-bottom:15px; border-radius: 0px;background-color: #F0F0F0;color: black" >
                <h2><?php echo e(__('base.card_details')); ?></h2>
                  <?php if(Session::has('success')): ?>
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p><?php echo e(Session::get('success')); ?></p>
                    </div>
                  <?php endif; ?>

                <form  role="form" action="<?php echo e(route('stripe.post')); ?>" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form">
                    <?php echo e(csrf_field()); ?>

                    <hr>
                    <div style="display: none">
                        <input type="text" id="name" name="first_name" value="<?php echo e($info->firstname." ". $info->lastname); ?>">
                        <input type="text" id="phone" name="phonenumber" value="<?php echo e($info->phonenumber); ?>">
                        <input type="text" id="email" name="emailaddress" value="<?php echo e($info->emailaddress); ?>">
                        <input type="text" id="price" name="price" value="<?php echo e($info->price); ?>">
                        <input type="text" id="country" name="countries" value="<?php echo e($countries[0]->name); ?>">
                        <input type="text" id="state" name="state" value="<?php echo e($state[0]->name); ?>">
                        <input type="text" id="zip" name="zip" value="<?php echo e($info->zip); ?>">
                        <input type="text" id="address" name="add1" value="<?php echo e($info->add1); ?>">
                        
                    </div>



                    <div class='form-row row'>
                        
                            <label class='control-label'><?php echo e(__('base.name_on_card')); ?></label> 
                            <input id="name_on_card" class='form-control' size='4' type='text'>
                        
                    </div>

                    <div class='form-row row'>
                        
                            <label class='control-label'><?php echo e(__('base.card_number')); ?></label> <input
                                autocomplete='off'  id="card_number" class='form-control card-number' oninput="changeCardNumber()"  min="12" maxlength="20"
                                type='text'>
                        
                    </div>
                    <br>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-3 form-group cvc required'>
                            <label class='control-label'><?php echo e(__('base.cvc')); ?></label><br> 
                            <input id="cvc" autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311'  min="1" maxlength="4"
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-5 form-group expiration required'>
                            <label class='control-label'><?php echo e(__('base.expire_month')); ?></label> <input
                                class='form-control card-expiry-month' id="expiry_month" placeholder='MM'  maxlength="2" maxlength="2"
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'><?php echo e(__('base.expire_year')); ?></label> <input
                                class='form-control card-expiry-year' id="expiry_year" placeholder='YYYY' maxlength="4" maxlength="4"
                                type='text'>
                        </div>
                        <div class="form-check row " style="width: 100%; margin-bottom: -15px;">
                            <div class="float-md-left col-md-12">
                               <input type="checkbox" class="form-check-input " id="checkterms">
                               <label class="form-check-label" for="checkterms"><a target="blank" href="<?php echo e(url(app()->getLocale().'/termandcondition')); ?>"><?php echo e(__('base.term_conditions')); ?></a></label>
                                
                            </div><br><br>
                         </div> <br>
                        <div class='form-row row error_class_pay' style="margin: 0 auto; display:block" >
                            <div class='col-md-12 error form-group hide error_class_pay' style="display: none">
                                <div class='alert-danger alert' style="padding: 1px 11px; margin-bottom: 0rem; border: 1px solid transparent; border-radius: .25rem;"><?php echo e(__('base.invaild_card_info')); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-md-12 text-center">

                                    
                                     <button class="btn btn-warning btn-block" id="pay_button" type="button">

                                         <span id="pay_now_text"> <?php echo e(__('base.pay_now')); ?> </span>
                                         <span id="loding_text" style="display: none"><i class="fa fa-spinner fa-spin"></i> Processing...</span>
                                        </button>

                                    <button class="btn btn-warning float-right" style="display: none" type="submit" id="pay_now">
                                        <?php echo e(__('base.pay_now')); ?>  
                                        <span id="loding_text" style="display: none"><i class="fa fa-spinner fa-spin"></i> Processing...</span>
                                        
                                    </button>
                                </div>
                                <div class="col-md-12" style="margin:0 auto">
                                    
                                    <img src="<?php echo e(url('img/stripe.webp')); ?>" class="img-fluid" alt="">
                                
                                </div>
                                
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php if(Session::has('PaymentError')): ?>
 
    <script>
        swal("Ops!", "','Something wrong please try again!", "warning");
    </script>
 
<?php endif; ?>
</section>
<!--================End Order Details Area =================-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(6);

     function changeCardNumber(){
       let cardNumber = cc_format($('#card_number').val());
       console.log(cardNumber);
       $('#card_number').val(cardNumber);
     }

     function cc_format(value) {
        var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
        var matches = v.match(/\d{4,16}/g);
        var match = matches && matches[0] || ''
        var parts = []

        for (i=0, len=match.length; i<len; i+=4) {
            parts.push(match.substring(i, i+4))
        }

        if (parts.length) {
            return parts.join(' ')
        } else {
            return value
    }
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>