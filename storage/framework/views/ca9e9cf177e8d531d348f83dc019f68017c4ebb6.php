
<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container" >
    </div>
</section>
<style type="text/css" media="screen">
    body{
        background-color: #fff;
    }
</style>
<!-- End Banner Area -->
<div class="container" style="
    margin-bottom: 30px;" >
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding-bottom: 20px">
                    <div class="profile-sidebar" style="-webkit-box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
-moz-box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
box-shadow: 4px 7px 5px 6px rgba(0,0,0,0.6);
" >
                        <div class="profile-userpics " style="align-content: center;" >
                            <?php if(Auth::user()->image == null): ?>
                            <img class="img-thumbnail rounded-circle img-responsive" src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>" width="100px"; style="width: 120px; height: 120px; margin-left: 33%;  ">
                            <?php else: ?> 
                            <img class="img-thumbnail rounded-circle img-responsive" src="<?php echo e(asset(Storage::url("upload/user_image/".Auth::user()->image))); ?>" style="width: 120px; height: 120px; margin-left: 33%;">
                            <?php endif; ?>

                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo e(Auth::user()->name); ?>

                            </div>
                          
                        </div>

                        <div class="profile-usermenu" style="padding:10px">
                            <ul class="navs text-uppercase" id="nav_id_sub">
                                <li class="li_padding"><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user"></i><?php echo e(__('base.cambiar_avatar')); ?></a>
                                </li>
                                <li class="li_padding ">
                                    <a href="<?php echo e(url(app()->getLocale().'/profile')); ?>" >
                                        <i class="fa fa-user"></i> <?php echo e(__('base.cuenta')); ?> </a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url(app()->getLocale().'/cart')); ?>">
                                        <i class="fa fa-shopping-cart"></i> <?php echo e(__('base.tu_cesta')); ?> </a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url(app()->getLocale().'/wishlist')); ?>" >
                                        <i class="fa fa-heart"></i> <?php echo e(__('base.tu_lista')); ?></a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url(app()->getLocale().'/order')); ?>">
                                        <i class="fa fa-flag"></i> <?php echo e(__('base.pedidos')); ?></a>
                                </li>
                              
                                <li class="li_padding">
                                    <a href="<?php echo e(url(app()->getLocale().'/sellerdisputes')); ?>">
                                        <i class="fa fa-user"></i> <?php echo e(__('base.disputas')); ?></a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url(app()->getLocale().'/sellerreport')); ?>">
                                        <i class="fa fa-user"></i> <?php echo e(__('base.denuncia')); ?></a>
                                </li>
                                <li class="li_padding">
                                    <a href="#" onclick="deleteaccount()">
                                        <i class="fa fa-remove"></i> <?php echo e(__('base.eliminar')); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div><br>
               <?php $__env->startSection('buyerbody'); ?>;
               <?php echo $__env->yieldSection(); ?>
            </div>
        </div>
        <center>
        </center>
        <br>
        <br>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(5);
    ActiveSub(2);

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>