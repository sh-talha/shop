<?php $__env->startSection('body'); ?>

    <style type="text/css">
        .cont {
            width: 95%;
        }

        .product_container {
            display: flex;
            flex-wrap: wrap;
        }

        .pagination {
            margin-top: 0px !important;
            border-left: 0px solid #eee !important;
        }

        .pagination .disabled {
            background-color: white;
            padding: 8px 20px !important;
        }

        .current {
            background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%) !important;
        }

        .pagination .active {
            padding: 8px 20px !important;
            background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%) !important;
        }

        .pagination a {
            color: black !important;
        }


        .pagintion .page {
            display: none;
        }

        .page:first-child,
        .page:last-child,
        .page:nth-child(2),
        .page.current,
        .page.disabled,
        .page.current + .page,
        .page.before + .page {
            display: inline-block !important;
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
                    <nav class="navbar navbar-expand-lg navbar-light bg-lights"
                         style="background-color: #b2dcac;color: white">
                        <a class="navbar-brand" href="#" style="color: white"><?php echo e(__('shop.browse_offer')); ?></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    <nav class="navbar navbar-expand-lg main-categories">
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="col-md-12">
                                <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas"
                                                             aria-expanded="false" aria-controls="meatFish">

                                <li class="main-nav-list class_cat_name" id="">
                                    <a aria-expanded="false" href="<?php echo e(route('shop',app()->getLocale())); ?>"
                                       aria-controls="meatFish">
                                        <?php echo e(__('shop.view_all')); ?>

                                    </a>
                                </li>


                                <li class="main-nav-list class_cat_name" id="">
                                    <a aria-expanded="false" aria-controls="meatFish">
                                        <form action="<?php echo e(url(app()->getLocale().'/shop')); ?>" method="get"
                                              accept-charset="utf-8">
                                            <input type="submit" class="button_offers
                                        <?php echo e((Request::get('offer') == 'Offer' || Request::get('offer') == 'Oferta') ? 'button_offers_color' : ''); ?>"
                                                   name="offer" value="<?php echo e(__('base.offer')); ?>">
                                            <?php if(Request::has('sort_by')): ?>
                                                <input type="hidden" name="sort_by" value="<?php echo e(Request::get('sort_by')); ?>">
                                            <?php endif; ?>
                                        </form>
                                    </a>
                                </li>
                                
                                
                                
              <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                    <form action="<?php echo e(url(app()->getLocale().'/shop')); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('offer') == 'Collection' || Request::get('offer') == 'Colección') ? 'button_offers_color' : ''); ?>"  name="offer" value="<?php echo e(__('base.collection')); ?>" >
                                          <?php if(Request::has('sort_by')): ?>
                                                <input type="hidden" name="sort_by" value="<?php echo e(Request::get('sort_by')); ?>">
                                            <?php endif; ?>
                                   </form>
                               </a> 
                           </li>
                           
                           
                           
                            <li class="main-nav-list class_cat_name" id="" >
                               <a aria-expanded="false" aria-controls="meatFish">
                                   <form action="<?php echo e(url(app()->getLocale().'/shop')); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('offer') == 'Premium' || Request::get('offer') == 'Prima') ? 'button_offers_color' : ''); ?> " name="offer" value="<?php echo e(__('base.premium')); ?>" >
                                         
                                        <?php if(Request::has('sort_by')): ?>
                                                <input type="hidden" name="sort_by" value="<?php echo e(Request::get('sort_by')); ?>">
                                            <?php endif; ?>  
                                         
                                         
                                         
                                   </form>
                                  
                               </a> 
                           </li>
                           
                           
                           
                           <li class="main-nav-list class_cat_name" id="" >
                               <a aria-controls="meatFish">
                                   <form action="<?php echo e(route('shop',app()->getLocale())); ?>" method="get" accept-charset="utf-8">
                                        <input type="submit" class="button_offers
                                        <?php echo e((Request::get('offer') == 'Delux') ? 'button_offers_color' : ''); ?>" name="offer" value="<?php echo e(__('base.delux')); ?>" >
                                         
                                         <?php if(Request::has('sort_by')): ?>
                                                <input type="hidden" name="sort_by" value="<?php echo e(Request::get('sort_by')); ?>">
                                            <?php endif; ?>  
                                         
                                   </form>
                                 
                               </a> 
                           </li>
                           
                           
                           
                            </ul>
                        </div>
                    </nav>
                </div>
                <br>
                <div class="sidebar-categories" style="
    margin-bottom: 15px;">
                    <div class="sidebar-categories" style="background-color: white">
                        <nav class="navbar navbar-expand-lg navbar-light bg-lights"
                             style="background-color: #b2dcac;color: white">
                            <a class="navbar-brand" href="#" style="color: white"><?php echo e(__('shop.browse_categories')); ?></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcat"
                                    aria-controls="navbarcat" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                        <nav class="navbar navbar-expand-lg main-categories">
                            <div class="collapse navbar-collapse " id="navbarcat">
                                <ul class="col-md-12">
                                    <li class="main-nav-list"><a data-toggle="collapse" href="#camisetas"
                                                                 aria-expanded="false" aria-controls="meatFish">
                                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="main-nav-list class_cat_name" id="<?php echo e($view_cat->id); ?>"
                                            data-id="<?php echo e($view_cat->id); ?>">
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
            <!-- <div class="sidebar-filter mt-50">
               
                 <div class="common-filter">
                    <br>
                    <form  method="get" accept-charset="utf-8">
                    <?php echo e(csrf_field()); ?>

                    <h4 class="text-mutted"><?php echo e(__('shop.price')); ?></h4>
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
                        <input class="btn btn-warning ml-5- filter_class" type="button" name="sidefilter" value="<?php echo e(__('shop.apply_filter')); ?>">
                    </form>
                    

                    </div>
                </div>
            </div> -->
            </div>
            </form>
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!--Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center justify-content-between"
                     style="padding: 10px 20px 10px 20px;">
                    <div class="col-md-6">
                        <form action="" method="get">
                            <input id="filter" type="text" class="form-control col-md-5 filter_classchange"
                                   style="margin-top: 10px; display: block;margin-bottom: 5px; float: left; margin-right: 5px;"
                                   placeholder="Buscar">
                            <select name="sort_by" id="sort_by" class="form-control col-md-7"
                                    style="margin-top: 10px;display: block;margin-bottom: 5px;float: left;max-width: 180px;"
                                    onchange="this.form.submit()">
                                <option value="">Ordenar</option>
                                <option value="price_desc" <?php if(Request::get('sort_by')=="price_desc"): ?> selected <?php endif; ?>>
                                   <?php echo e(__('shop.price1')); ?> 
                                </option>
                                <option value="price_asc" <?php if(Request::get('sort_by')=="price_asc"): ?> selected <?php endif; ?>>
                                  <?php echo e(__('shop.price2')); ?> 
                                </option>
                                <option value="date_desc" <?php if(Request::get('sort_by')=="date_desc"): ?> selected <?php endif; ?>>
                                    <?php echo e(__('shop.newto1')); ?>

                                <option value="date_asc" <?php if(Request::get('sort_by')=="date_asc"): ?> selected <?php endif; ?>>
                                    <?php echo e(__('shop.newto2')); ?>

                                </option>
                            </select>
                            <?php if(Request::has('offer')): ?>
                                <input type="hidden" name="offer" value="<?php echo e(Request::get('offer')); ?>">
                            <?php endif; ?>
                        </form>
                    </div>
                    
                    <div class="product_container">

                    </div>
                </div>
                <section class="lattest-product-area pb-40 category-list">
                    <!-- end of php  -->
                    <!-- single product -->
                    <div class="conts">
                        <div class="product_container" id="cat_filter_product">
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="col-lg-4 col-md-12 col-sm-12  single-item results">
                                    <span class="product_description"
                                          style="display: none"> <?php echo e($product->product_description); ?> </span>
                                    <div class="single-product img-thumbnail ">
                                        <a href="<?php echo e(url(app()->getLocale().'/product/'.$product->Products_id)); ?>"
                                           class="social-info"> <img loading="lazy" class="img-fluid filter_image_size lazyload"
                                                                    data-src="<?php echo e(asset('uploads/products/'.substr($product->Products_id, 0, 1).'/'.$product->Products_id.'/'.$product->product_image)); ?>"
                                                                     alt=""> </a>
                                        <hr>
                                        <div class="product-details">
                                            <h6 style="max-width: 200px;text-overflow:ellipsis; white-space:nowrap;overflow:hidden;"><?php echo e($product->product_name); ?></h6>
                                            <div class="price">

                                                <?php  $special = \App\Models\SpecificPrice::where(['product_id' => $product->Products_id])->pluck('reduction')->last() ?>

                                                <?php if($special == 0 ): ?>
                                                    <h6><?php echo e(number_format($product->price,2)); ?> &euro;</h6>
                                                <?php else: ?>
                                                    <h6><?php echo e($special); ?>  &euro;</h6>
                                                    <h6 class="l-through"><?php echo e($product->price); ?> &euro;</h6>

                                                <?php endif; ?>

                                            </div style="margin: 5px;">
                                            <div>	<span style="color: #ffe907;">
											 
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star "> </i> 
												
											</span></div>
                                            <div class="prd-bottom" style="width:270px; margin-top: 5px !important;">

                                                
                                                <a class="social-info wish_class" data-wish='<?php echo e($product->Products_id); ?>'>
                                                    <span class="fa fa-heart"></span>
                                                    <p class="hover-text">Wishlist</p>
                                                </a>

                                                <a href="<?php echo e(url(app()->getLocale().'/product/'.$product->Products_id)); ?>"
                                                   class="social-info">
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
            <!---->
                <br>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
    <script>
        ActiveMenu(2);
        $(document).ready(function () {
            if (window.performance.getEntriesByType('navigation')[0].type !== "back_forward") {
                setCookie("filter", "", -1);
                setCookie("current_page", 1, -1);
                setCookie("class_cat_id", "", -1);
            } else {
                var classCatId = getCookie("class_cat_id");
                if (classCatId && classCatId > 0) {
                    var classIdString = '.class_cat_name[id="' + classCatId + '"]';
                    $(classIdString).trigger("click");
                }
                var filterValue = getCookie("filter");
                if (filterValue) {
                    $('#filter').val(filterValue);
                    $('#filter').keyup();
                }
                var currentPage = getCookie("current_page");
                if (currentPage && currentPage > 0) {
                    $('.pagination .page').eq(currentPage - 1).trigger("click");
                }
            }
        });
    </script>
    
    <script>
 
 if ('loading' in HTMLImageElement.prototype) {
   // Si el navegador soporta lazy-load, tomamos todas las imágenes que tienen la clase
   // `lazyload`, obtenemos el valor de su atributo `data-src` y lo inyectamos en el `src`.
   const images = document.querySelectorAll("img.lazyload");
    images.forEach(img => {
       img.src = img.dataset.src;    });
  } else {
    // Importamos dinámicamente la libreria `lazysizes`
   let script = document.createElement("script");
  script.async = true; 
  script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js";
   document.body.appendChild(script);
 }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>