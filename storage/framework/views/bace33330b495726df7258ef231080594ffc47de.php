<?php $__env->startSection('buyerbody'); ?>
<div class="col-md-9">
    <div class="profile-content" style=" margin-bottom:15px;">
    <span style="margin-left:25px;"><h3 style="margin-left:25px;">SELLER . . .</h3></span>
    <hr style="width:95%">

    <table id="customers" class="table ">
        <tbody>
            <tr>
                <th>Product Id</th>
                <th>Name</th>
                <th>date</th>
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $reportinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewreportinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($viewreportinfo->product_id); ?></td>
                <td><?php echo e($viewreportinfo->name); ?></td>
                <td><?php echo e($viewreportinfo->date); ?></td>
                
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
    ActiveSub(7);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('myaccount', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>