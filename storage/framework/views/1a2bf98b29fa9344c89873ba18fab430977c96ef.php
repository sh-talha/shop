<div class="box">
    <div class="box-body box-profile">
    	<?php if(Auth::user()->image == null): ?>
    	<img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>">
    	<?php else: ?> 
    	<img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset(Storage::url("upload/user_image/".Auth::user()->image))); ?>">

    	<?php endif; ?>
	    <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>

	</div>

	<hr class="m-t-0 m-b-0">

	<ul class="nav nav-pills nav-stacked">
	  	<li role="presentation">
	  	 	<a href="#" data-toggle="modal" data-target="#myModal">Change profile pic</a>
        </li>

	  <li role="presentation"
		<?php if(Request::route()->getName() == 'backpack.account.info'): ?>
	  	class="active"
	  	<?php endif; ?>
	  	><a href="<?php echo e(url('')); ?>/admin/edit-account"><?php echo e(trans('backpack::base.update_account_info')); ?></a></li>

	  <li role="presentation"
		<?php if(Request::route()->getName() == 'backpack.account.password'): ?>
	  	class="active"
	  	<?php endif; ?>
	  	>
	  	<a href="<?php echo e(route('backpack.account.password')); ?>"><?php echo e(trans('backpack::base.change_password')); ?></a>
	  </li>
	<?php if(Auth::user()->roles[0]->pivot->role_id != 1): ?>
	  	<li role="presentation"
	  	      ><a href="#" onclick="deleteaccount()">Delete Account</a>
	  	</li>
	<?php endif; ?>
	</ul>
</div>
