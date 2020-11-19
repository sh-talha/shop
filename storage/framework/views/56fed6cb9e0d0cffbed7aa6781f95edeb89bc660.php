<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p></p>
							<a class="primary-btn" href="registration">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form " method="POST" action="<?php echo e(route('login')); ?>" id="contactForm" novalidate="novalidate">
							<?php echo e(csrf_field()); ?>

							  <div class="col-md-12  form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							  

							  
							<div class="form-group">
							    <input id="email" type="email" class="form-control " name="email"  required autofocus value="">

								    <?php if($errors->has('email')): ?>
								        <span class="help-block">
								            <strong><?php echo e($errors->first('email')); ?></strong>
								        </span>
								    <?php endif; ?>
								</div>
							</div>
							<div class="col-md-12 form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							    
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
									<input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me

									
								</div>
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" class="btn btn-primary">
								    Login
								</button>

								<a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
								    Forgot Your Password?
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