<?php $__env->startSection('body'); ?>
    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Nike New <br>Collection!</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="<?php echo e(url('shop')); ?>"><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">View more</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Nike New <br>Collection!</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="<?php echo e(url('shop')); ?>"><span class="lnr lnr-cross"></span></a>
                                         <span class="add-text text-uppercase">View more</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- End banner Area -->

    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <h2 style="text-align:center;">Poductos destacados</h2>
            <br>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
                                <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                    <a href="" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                         <input type="submit" class="button_offer" name="submit" value="Offer" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
                                <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                    <a href="" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                             <input type="submit" name="submit" value="Collection" class="button_offer" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
                                <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                    <a href="" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                             <input type="submit" name="submit" class="button_offer" value="Delux" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
                                <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                    <a href="#" class="img-pop-ups" target="_blank">
                                    <div class="deal-details">
                                             <input type="submit" name="submit" value="Premium" class="button_offer" >
                                        </div>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
                        <a href="img/category/c5.jpg" class="img-pop-ups" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Sneaker for Sports</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-are section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Latest Products</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                <?php $__empty_1 = true; $__currentLoopData = $latest_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product img-thumbnail">
                           <img class="img-fluid img-thumbnail filter_image_size" src="uploads/products/<?php echo e(substr($product->Products_id, 0, 1)); ?>/<?php echo e($product->Products_id); ?>/<?php echo e($product->product_image); ?>" >
                           
                            <div class="product-details">
                              <h6><?php echo e($product->product_name); ?></h6>
                                <div class="price">
                                   <h6><?php echo e($product->price); ?></h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                   <a class="social-info cart_class" id="<?php echo e($product->Products_id); ?>">
                                        <span class="fa fa-shopping-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a class="social-info wish_class" data-wish='<?php echo e($product->Products_id); ?>'>
                                        <span class="fa fa-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                   <a href="<?php echo e(url('product').'/'.$product->Products_id); ?>" class="social-info">
                                        <span class="fa fa-eye"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-lg-12 col-md-12"><br>
                        <div class="alert alert-warning" role="alert">
                          No product in this categories.
                        </div>
                    </div>

                <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- single product slide -->
       
    </section>
    <!-- end product Area -->

    <!-- start features Area -->
    <section class="features-area">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?php echo e(url('/policy')); ?>" title="">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>5'95&euro;  Delivery</h6>
                        <p>5'95&euro; Shipping on all order</p>
                    </div>
                    </a>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?php echo e(url('/policy')); ?>" title="">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="img/features/f-icon2.png" alt="">
                            </div>
                            <h6>Return Policy</h6>
                            <p>Reviza aqui nuestra politica</p>
                        </div>
                    </a>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?php echo e(url('/policy')); ?>" title="">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="img/features/f-icon3.png" alt="">
                            </div>
                            <h6>24/7 Support</h6>
                            <p>siempre disponibles</p>
                        </div>
                    </a>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?php echo e(url('/policy')); ?>" title="">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="img/features/f-icon4.png" alt="">
                            </div>
                            <h6>Secure Payment</h6>
                            <p>pago seguro / varias opciones</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(1);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>