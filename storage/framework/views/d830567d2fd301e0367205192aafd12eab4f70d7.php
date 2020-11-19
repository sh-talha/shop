<?php $__env->startSection('body'); ?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<style type="text/css" media="screen">
    body{
        background-color: #DCDCDC;
    }
</style>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="padding-bottom: 20px">
                    <div class="profile-sidebar" >
                        <div class="profile-userpics " style="margin-left: 70px" >
                            <?php if(Auth::user()->image == null): ?>
                            <img class="img-thumbnail rounded-circle img-responsive" src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>" width="100px ">
                            <?php else: ?> 
                            <img class="img-thumbnail rounded-circle img-responsive" src="<?php echo e(asset(Storage::url("upload/user_image/".Auth::user()->image))); ?>" style="width: 100px;">
                            <?php endif; ?>

                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo e(Auth::user()->name); ?>

                            </div>
                          
                        </div>

                        <div class="profile-usermenu" style="padding:20px">
                            <ul class="navs text-uppercase" id="nav_id_sub">
                                <li class="li_padding"><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user"></i>Change profile pic</a>
                                </li>
                                <li class="li_padding ">
                                    <a href="<?php echo e(url('profile')); ?>" >
                                        <i class="fa fa-user"></i> YOUR ACOUNT </a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url('cart')); ?>">
                                        <i class="fa fa-shopping-cart"></i> IN CART </a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url('wishlist')); ?>" >
                                        <i class="fa fa-heart"></i> YOUR WISH LIST </a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url('order')); ?>">
                                        <i class="fa fa-flag"></i> Your orders</a>
                                </li>
                              
                                <li class="li_padding">
                                    <a href="<?php echo e(url('sellerdisputes')); ?>">
                                        <i class="fa fa-user"></i> Seller disputes</a>
                                </li>
                                <li class="li_padding">
                                    <a href="<?php echo e(url('sellerreport')); ?>">
                                        <i class="fa fa-user"></i> Report a seller</a>
                                </li>
                                <li class="li_padding">
                                    <a href="#" onclick="deleteaccount()">
                                        <i class="fa fa-remove"></i> Delete profile</a>
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