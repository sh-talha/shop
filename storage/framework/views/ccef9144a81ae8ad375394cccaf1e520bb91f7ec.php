
<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<section style="margin-top:-90px !important;" class="login_box_area section_gap">
		<div class="container">
			<div class="row">
					<div class="col-lg-6">
					<div class="login_box_img" style="margin-right: 0px !important;">
						<img class="img-fluid" src="<?php echo e(asset('img/login.jpg')); ?>" alt="">
						<div class="hover">
							<h4><?php echo e(__('base.new_to_our_website')); ?></h4>
							<p></p>
							<a class="primary-btn" href="registration"><?php echo e(__('base.create_an_account')); ?></a>
							<div class="d-block d-sm-none"><br><br><h4>O inicia secion</h4>
								<img src="<?php echo e(url('img/arr.png')); ?>" style="height: 70px;width: 80px;"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3><?php echo e(__('base.log_in_to_enter')); ?></h3>
						<form class="row login_form " method="POST" action="<?php echo e(route('login',app()->getLocale())); ?>" id="contactForm" novalidate="novalidate">
							<?php echo e(csrf_field()); ?>

							  <div class="col-md-12  form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							  

							  
							 
							<div class="form-group"><span style="
    float: left;
    margin-left: 12px;
">Email :</span>
							    <input id="email" type="email" class="form-control " name="email"  required autofocus value="">

								    <?php if($errors->has('email')): ?>
								        <span class="help-block">
								            <strong><?php echo e($errors->first('email')); ?></strong>
								        </span>
								    <?php endif; ?>
								</div>
							</div>
							<div class="col-md-12 form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>"><span style="
    float: left;
    margin-left: 12px;
">Password :</span>
							    
							    <div class="">
							        <input id="password" type="password" class="form-control" value="" name="password" required>

							        <?php if($errors->has('password')): ?>
							            <span class="help-block">
							                <strong><?php echo e($errors->first('password')); ?></strong>
							            </span>
							        <?php endif; ?>
							    </div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('base.remember_me')); ?>


									
								</div>
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" class="btn btn-primary">
								    <?php echo e(__('base.login')); ?>

								</button>

								<a class="btn btn-link" href="<?php echo e(route('password.request',app()->getLocale())); ?>">
								   <?php echo e(__('base.forgot_your_password')); ?>

								</a>
								
						</form>
						
							<!-- Collapse a form when user click Lost your password? link-->
							
					</div>
					
					
				
					
					
					
					
				</div>
				
				
				
				
				
				
				
				
			</div>
		</div>
	</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(5);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>