<p> <a title="granyupon" href="http://www.granyupon.com"><img src="https://granyupon.com/img/logo.png" alt="granyupon" /></a>  </p>
<h1>Hi, <?php echo e($name); ?></h1>

 </b>
<p> Pedido completado con &eacute;xito! <br> 
Gracias! Tu compra esta completa. <br>
Pronto recibir&aacute;s noticias sobre tu env&iacute;o.<br>
<b> <?php echo e($order_no); ?> </b>.</p>
 </b>
<p>Your Order Detail.</p>

<table id="cart" class="table table-hover table-condensed table-responsive" border>
        <thead>
        <tr>
            <th >Product</th>
            <th >Name</th>
            <th >Price</th>
            <th >Color</th>
            <th >size</th>
            <th >Quantity</th>
            <th  class="">Subtotal</th>
        
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        <?php if($order_detail): ?>
            <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                 <?php if($details["color"] == ''): ?>
                                   <img src="<?php echo e(asset('uploads/products/'.substr($details["p_id"], 0, 1).'/'.$details["p_id"].'/'.$details["photo"])); ?>" width="80" height="80" class="img-responsive"/>
                                 <?php else: ?>
                                   <img src="<?php echo e($details['photo']); ?>"  width="80" height="80" class="img-responsive"/>
                                <?php endif; ?>
                                
                            </div>
                        
                        </div>
                    </td>
                    <td><?php echo e($details['name']); ?></td>
                    <td data-th="Price"><?php echo e($details['price']); ?>&euro; </td>
                    <td data-th="color"><?php echo e(($details['color'] == '') ? '-':$details['color']); ?></td>
                    <td data-th="size"><?php echo e(($details['size'] == '') ? '-':  str_replace('-', ' ',$details['size'])); ?></td>
                    
                    <td data-th="Quantity">
                        <?php echo e($details['quantity']); ?>

                    </td>
                    <td data-th="Subtotal" class="text-center"><?php echo e($details['price'] * $details['quantity']); ?>&euro;</td>
                
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        </tbody>
</table>

<p>Thanks <p/>