<?php $__env->startSection('body'); ?>

<style type="text/css">
    .cont{
      width:95%;
    }
    
    .product_container{
      display:flex;
      flex-wrap:wrap;
    }
    .pagination{
     
      &,
      *{
        user-select: none;
      }
      
      a{
        display:inline-block;
        padding:0 10px;
        cursor:pointer;
        &.disabled{
          opacity:.3;
          pointer-events: none;
        cursor:not-allowed;
        }
        &.current{
          /*background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%)!important;*/
        }
      }
    }

    .current{
        background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%)!important;
    }
    .pagination > a{


    }
</style>
<!-- Start Banner Area -->
<section class="banner-areas organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
   
    <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-5 ">
            <div class="sidebar-categories" style="background-color: white">
                <nav class="navbar navbar-expand-lg navbar-light bg-lights" style="background-color: #68C55B;color: white">
                  <a class="navbar-brand"  href="#" style="color: white">Browse Offer</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button></nav>
                <nav class="navbar navbar-expand-lg main-categories">
                  <div class="collapse navbar-collapse " id="navbarNav">
                   <ul class="col-md-12">
                       <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas" aria-expanded="false" aria-controls="meatFish">

                        <li class="main-nav-list class_cat_name" id="" >
                            <a aria-expanded="false" href="<?php echo e(url('shop')); ?>" aria-controls="meatFish">
                                Show All
                            </a> 
                        </li>

                        
                           <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                    <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('submit') == 'Offer') ? 'button_offers_color' : ''); ?>"  name="submit" value="Offer" >
                                         
                                   </form>
                               </a> 
                           </li>
                            <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                    <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('submit') == 'Collection') ? 'button_offers_color' : ''); ?>"  name="submit" value="Collection" >
                                         
                                   </form>
                               </a> 
                           </li>
                            <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                   <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('submit') == 'Premium') ? 'button_offers_color' : ''); ?>



                                        " name="submit" value="Premium" >
                                         
                                   </form>
                                  
                               </a> 
                           </li>
                           <li class="main-nav-list class_cat_name" id="" >
                               <a aria-controls="meatFish">
                                   <form action="<?php echo e(url('shop')); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('submit') == 'Delux') ? 'button_offers_color' : ''); ?>" name="submit" value="Delux" >
                                         
                                   </form>
                                 
                               </a> 
                           </li>
                   </ul>
                  </div>
                </nav>
            </div>
            <br>
            <div class="sidebar-categories">
               <div class="sidebar-categories" style="background-color: white">
                   <nav class="navbar navbar-expand-lg navbar-light bg-lights" style="background-color: #68C55B;color: white">
                     <a class="navbar-brand"  href="#" style="color: white">Browse Categories</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcat" aria-controls="navbarcat" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button></nav>
                     <nav class="navbar navbar-expand-lg main-categories">
                       <div class="collapse navbar-collapse " id="navbarcat">
                        <ul class="col-md-12">
                            <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas" aria-expanded="false" aria-controls="meatFish">
                               <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <li class="main-nav-list class_cat_name" id="<?php echo e($view_cat->id); ?>" >
                                       <a data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">

                                           <span class="lnr lnr-arrow-right"></span>
                                             
                                           <?php echo e($view_cat->name); ?>

                                           <span class="number"></span>
                                       </a> 
                                   </li>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                        </ul>
                       </div>
                     </nav>
               </div>
                
                
            </div>
            <div class="sidebar-filter mt-50">
               
                <div class="common-filter">
                    <br>
                    <form  method="get" accept-charset="utf-8">
                    <?php echo e(csrf_field()); ?>

                    <h4 class="text-mutted">Price</h4>
						<div class="wrapper" style="padding:5px;">
                        <div class="range-slider">
                            <input type="text" class="js-range-slider" value="" />
                        </div>
                        <hr>
                        <div class="extra-controls form-inline">
                            <div class="form-group">
                                <input type="text" class="js-input-from form-control" name="lowerprice" id="lowerprice" value="0" style="width:80px; border:none;" />
                                <input type="text" class="js-input-to form-control" value="0" name="higherprice" id="higherprice" style="width:80px; border:none;" />
                            </div>

                        </div>
                        <br>
                        <input class="btn btn-warning ml-5- filter_class" type="button" name="sidefilter" value="Apply Filter">
                    </form>
                    

                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center" >
               <input id="filter" type="text" class="form-control col-md-3 filter_classchange" style="margin-top: 10px" placeholder="Search">
               <br><br>
               <div class="product_container offset-md-5">
               </div>
            </div>
            
            <section class="lattest-product-area pb-40 category-list">
			    <!-- end of php  -->
		        <!-- single product -->
                <div class="conts">
                  <div class="product_container" id="cat_filter_product">
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4 col-md-12 col-sm-12  single-item results">
                        <div class="single-product img-thumbnail ">
                           <img class="img-fluid filter_image_size" src="<?php echo e(asset('uploads/products/'.substr($product->Products_id, 0, 1).'/'.$product->Products_id.'/'.$product->product_image)); ?>" alt="" >
                           <hr>
                            <div class="product-details">
                                <h6><?php echo e($product->product_name); ?></h6>
                                <div class="price">

                                <?php  $special=\App\Models\SpecificPrice::where(['product_id' =>$product->Products_id])->pluck('reduction')->last() ?>
                                  
                                  <?php if($special == 0 ): ?>
                                    <h6><?php echo e($product->price); ?></h6>
                                  <?php else: ?>
                                    <h6><?php echo e($special); ?></h6>
                                    <h6 class="l-through"><?php echo e($product->price); ?></h6>

                                  <?php endif; ?>

                                </div>
                                <div class="prd-bottom" style="width:270px">

                                    
                                    <a class="social-info wish_class" data-wish='<?php echo e($product->Products_id); ?>' >
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
                            <div class="alert alert-warning col-md-12" role="alert">
                              No Result Found.
                            </div>
                        </div>
                    <?php endif; ?>
                  </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
          
            <br>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(2);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>