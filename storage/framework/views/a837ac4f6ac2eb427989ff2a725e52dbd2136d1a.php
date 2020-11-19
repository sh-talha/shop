<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-md-3">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form " method="POST" action="<?php echo e(route('login')); ?>" id="contactForm" novalidate="novalidate">
							<?php echo e(csrf_field()); ?>

							  <div class="col-md-12  form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							  

							  
							<div class="form-group">
							    <input id="email" type="email" class="form-control " name="email"  required autofocus placeholder="Enter Email" >

								    <?php if($errors->has('email')): ?>
								        <span class="help-block">
								            <strong><?php echo e($errors->first('email')); ?></strong>
								        </span>
								    <?php endif; ?>
								</div>
							</div>
							<div class="col-md-12 form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							    
							    <div class="">
							        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

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

								
								
						</form>
						
						
							<!-- Collapse a form when user click Lost your password? link-->
							<p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Lost your password?</a></p>	
							<div class="collapse" id="showForm">
								<div class='well'>
							<form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
							    <?php echo e(csrf_field()); ?>


								<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">									<input type="email" class="form-control" name="email" placeholder="Enter the email associated with the password." required value="<?php echo e(old('email')); ?>">
								
								<?php if($errors->has('email')): ?>
								    <span class="help-block">
								        <strong><?php echo e($errors->first('email')); ?></strong>
								    </span>
								<?php endif; ?>
								</div>
										<button type="submit" class="btn btn-dark">Recover Password</button>
									</form>								
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>