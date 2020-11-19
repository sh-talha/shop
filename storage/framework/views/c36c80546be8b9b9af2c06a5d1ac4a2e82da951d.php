<?php $__env->startSection('buyerbody'); ?>
<div class="col-md-9">
    <div class="profile-content" style=" margin-bottom:15px;">

      <span style="margin-left:25px;"><h3 style="margin-left:25px;">Your Orders . . .</h3></span>
       
        <hr>
         <div class="container">
            <table id="customers">
                <tbody>
                    <tr>
                        <th>Tracking Id</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Total Amount</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vieworders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($vieworders->tracking_id); ?></td>
                        <td><?php echo e($vieworders->address); ?></td>
                        <td><?php echo e($vieworders->created_at); ?></td>
                        <td><?php echo e($vieworders->total); ?></td>
                        <td><?php echo e($vieworders->status); ?></td>
                        <td>
                            <button  class="btn btn-xs btn-default " onclick="OrderView(<?php echo e($vieworders->tracking_id); ?>,<?php echo e($vieworders->order_id); ?>)">
                                <i class="fa fa-eye"></i> View</a>
                            </button>
                            <button  class="btn btn-xs btn-default " <?php echo e(($vieworders->statusid != 1 )? 'disabled':''); ?> onclick="disputeorder(<?php echo e($vieworders->tracking_id); ?>,<?php echo e($vieworders->order_id); ?>)">
                                <i class="fa fa-delete"></i> Dispute</a>
                            </button>
                           
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6">
                            No order
                        </td>
                    </tr>
                   <?php endif; ?>

                   
                </tbody>
            </table>
        </div> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(5);
     ActiveSub(5);


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('myaccount', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>