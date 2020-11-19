<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>

<!--================Reg Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/new.jpg" alt="">
						<div class="hover">
							<h4>
								Do you already have an account?</h4>
							<p></p>
							<a class="primary-btn" href="login">Login Here!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6" >
					<div class="login_form_inner">
						<h3>Create an account</h3>
						<div class="row">	
								<div class="col-sm-12 col-md-12 col-lg-12" style="padding:20PX;">
								
								<hr />
								
								<form method="POST" action="<?php echo e(route('register')); ?>">
									<?php echo e(csrf_field()); ?>

								<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
								   
								    <div class="col-md-12">
								        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="Enter Name">

								        <?php if($errors->has('name')): ?>
								            <span class="help-block">
								                <strong><?php echo e($errors->first('name')); ?></strong>
								            </span>
								        <?php endif; ?>
								    </div>
								</div>

								

								<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
								    
								    <div class="col-md-12">
								        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Enter Email">

								        <?php if($errors->has('email')): ?>
								            <span class="help-block">
								                <strong><?php echo e($errors->first('email')); ?></strong>
								            </span>
								        <?php endif; ?>
								    </div>
								</div>

								<div class="form-group<?php echo e($errors->has('role') ? ' has-error' : ''); ?>" style="display: none">
								    <div class="col-md-12">
								        <input id="role" type="hidden" class="form-control" name="role" value="3" required>
								        <?php if($errors->has('role')): ?>
								            <span class="help-block">
								                <strong><?php echo e($errors->first('role')); ?></strong>
								            </span>
								        <?php endif; ?>
								    </div>
								</div>

								<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
								    <div class="col-md-12">
								        <input id="password" type="password" class="form-control" name="password" required placeholder="Enter password">

								        <?php if($errors->has('password')): ?>
								            <span class="help-block">
								                <strong><?php echo e($errors->first('password')); ?></strong>
								            </span>
								        <?php endif; ?>
								    </div>
								</div>

								<div class="form-group">
								    <div class="col-md-12">
								        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
								    </div>
								</div>
								  
								 <div class="form-check ">
								 	<div class="float-md-left col-md-6">
								 	   <input type="checkbox" class="form-check-input " id="checkterms">
								 	   <label class="form-check-label" for="checkterms"><a target="blank" href="<?php echo e(url('termandcondition')); ?>">Accept Term and Conditions</a></label>
								 		
								 	</div>
								  </div><br><br>
								  <button type="button" id="submitformvalidation" class="btn btn-success btn-block">Create my account</button>
								   
								   <button type="submit" id="submitform" style="display: none" class="btn btn-success btn-block">Create my account</button>



								</form>	


								</div><BR>	
								<div class="col-sm-12 col-md-12 col-lg-12">
									
									<p>Already have an account? <a href="login" title="Login Here">Login here!</a></p>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Reg Box Area =================-->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(5);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>