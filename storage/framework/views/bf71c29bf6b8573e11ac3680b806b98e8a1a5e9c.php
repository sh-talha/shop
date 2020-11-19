
<?php $__env->startSection('buyerbody'); ?>
 <div class="col-md-8">
    <div class="profile-content" style=" margin-bottom:15px;">
    <span style="margin-left:25px;"><h3 style="margin-left:25px;">SELLER DISPUTES . . .</h3></span>
    <hr style="width:95%">
    <table id="customers" class="table ">
        <tbody>
            <tr>
                <th>Order Id</th>
                <th>Tracking id</th>
                <th>Price</th>
                <th>Date</th>
                
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $ordersdispute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vieworders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <tr>
                <td><?php echo e($vieworders->order_details_id); ?></td>
                <td><?php echo e($vieworders->tracking_id); ?></td>
                <td><?php echo e($vieworders->total_price); ?></td>
                <td><?php echo e($vieworders->date); ?></td>
                
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(5);
    ActiveSub(6);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('myaccount', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>