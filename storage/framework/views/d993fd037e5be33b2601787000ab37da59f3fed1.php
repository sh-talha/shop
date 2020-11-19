<?php $__env->startSection('header'); ?>
    <section class="content-header">
      <h1>
        <?php echo e(trans('backpack::base.dashboard')); ?><small><?php echo e(trans('backpack::base.first_page_you_see')); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin'))); ?>"><?php echo e(config('backpack.base.project_name')); ?></a></li>
        <li class="active"><?php echo e(trans('backpack::base.dashboard')); ?></li>
      </ol>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title"><?php echo e(trans('backpack::base.login_status')); ?></div>
                    <hr>
                    <?php if(Auth::user()->active == 0 ): ?>
                      <h1>Your account was created and is now pending administrator approval</h1> 
                    <?php elseif(Auth::user()->active == 1 ): ?>
                      <h4>You account is activate</h4> 
                    <?php elseif(Auth::user()->active == 2 ): ?>
                      <h1>Your account has been disabled</h1> 
                    <?php endif; ?>
                </div>
                <div class="col-md-12">
                  <h1>Messages</h1>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count=1?>
                      

                      <?php $__empty_1 = true; $__currentLoopData = $contactuss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewcontactus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                      <tr>
                        <th scope="row"><?php echo e($count++); ?></th>
                        <td><?php echo e($viewcontactus->name); ?></td>
                        <td><?php echo e($viewcontactus->Email); ?></td>
                        <td><?php echo e($viewcontactus->Message); ?></td>
                        
                      </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                       <td colspan="4">
                            No Result Found.
                        
                      </td>
                       <?php endif; ?>
                      
                    </tbody>
                  </table>
                  
                </div>
              
                <div class="box-body"><?php echo e(trans('backpack::base.logged_in')); ?></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backpack::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>