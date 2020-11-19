
<?php $__env->startSection('buyerbody'); ?>
<div class="col-md-8">
    <div class="profile-content" style=" margin-bottom:15px; -webkit-box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
-moz-box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);">

        <span style="margin-left:25px;"><h3 style="margin-left:25px;">Your Acount . . .</h3></span>

        <!-- Trigger/Open The Modal -->
        <button class="btn btn-primary" id="myBtn" style="float: right;margin-top: -26px;">Edit Profile</button>

        <hr>
         <form action="<?php echo e(url('profilesubmit')); ?>" method="post" >
        <div class="container">
            <div class="row">
               
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control disable" name="name" value="<?php echo e($user_info->name); ?>"  placeholder="Enter Name">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control disable" value="<?php echo e($user_info->address); ?>"  placeholder="Enter Address" name="address">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control disable" name="gender">
                        <option value="1" <?php echo e(($user_info->gender == 1) ? 'selected':''); ?>>Male</option>
                        <option value="2" <?php echo e(($user_info->gender == 2) ? 'selected':''); ?>>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control disable" name="age" value="<?php echo e($user_info->age); ?>"  placeholder="Enter Age">
                </div>
                <div class="form-groups col-md-6">
                    <label for="exampleInputEmail1">Country</label>

                    <select class="form-control disable" name="country" id="countries" >
                       <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(( $user_info->country == $view_countries->id ) ? 'selected':''); ?> value="<?php echo e($view_countries->id); ?>"><?php echo e($view_countries->name); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">State</label>
                    <div id="state">
                       <select class="form-control disable" name="city" >
                           <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(( $user_info->city == $view_state->id ) ? 'selected':''); ?> value="<?php echo e($view_state->id); ?>"><?php echo e($view_state->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>

                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1 ">Telefono</label>
                    <input type="text" class="form-control disable" name="phone" value="<?php echo e($user_info->phone); ?>"  placeholder="Enter Telefono">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1 ">Zip code</label>
                    <input type="text" class="form-control disable" name="zipcode" value="<?php echo e($user_info->zip_code); ?>" placeholder="Enter Zip code">
                     <input type="hidden" class="form-control disable" name="lang" value="<?php echo e(app()->getLocale()); ?>" >
                </div>
                <div class="form-group col-md-12 ">
                    <button type="submit" class="btn btn-info float-md-right disable">Submit</button>
                </div>
              </div>
              </div>

              </form> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
    ActiveMenu(5);
    ActiveSub(2);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('myaccount', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>