<?php $__env->startSection('body'); ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<style type="text/css">
	.img-upload-btn { 
	    position: relative; 
	    overflow: hidden; 
	    padding-top: 95%;
	} 

	.img-upload-btn input[type=file] { 
	    position: absolute; 
	    top: 0; 
	    right: 0; 
	    min-width: 100%; 
	    min-height: 100%; 
	    font-size: 100px; 
	    text-align: right; 
	    filter: alpha(opacity=0); 
	    opacity: 0; 
	    outline: none; 
	    background: white; 
	    cursor: inherit; 
	    display: block; 
	} 

	.img-upload-btn i { 
	    position: absolute;
	    height: 56px;
	    width: 56px;
	    top: 50%;
	    left: 50%;
	    margin-top: -8px;
	    margin-left: -8px;
	}

	.btn-radio {
	    position: relative; 
	    overflow: hidden; 
	}

	.btn-radio input[type=radio] { 
	    position: absolute; 
	    top: 0; 
	    right: 0; 
	    min-width: 100%; 
	    min-height: 100%; 
	    font-size: 100px; 
	    text-align: right; 
	    filter: alpha(opacity=0); 
	    opacity: 0; 
	    outline: none; 
	    background: white; 
	    cursor: inherit; 
	    display: block; 
	}
</style>

<!--================Single Product Area =================-->

	<div class="product_image_area" style="margin-top: -150px">
		<div class="container">
			<div class="row s_product_inner">
				
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="single-prd-items">
							<img class="img-fluid"src="<?php echo e(asset('uploads/products/'.substr($products->Products_id, 0, 1).'/'.$products->Products_id.'/'.$products->product_image)); ?>" alt="">
						</div>
						<?php if($loop->last): ?>
					        <div class="single-prd-item">
    							<img class="img-fluid"src="<?php echo e(asset('uploads/products/'.substr($products->Products_id, 0, 1).'/'.$products->Products_id.'/'.$products->product_image)); ?>" alt="">
    						</div>
					    <?php endif; ?>
						
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				
				<div class="col-lg-5 offset-lg-1">
					<form method="get">
						 <?php echo e(csrf_field()); ?>


						<div class="s_product_text">
							<h3><?php echo e($products->product_name); ?></h3>
							<h2><?php echo e($products->price); ?></h2>
							<ul class="list">
								<li><a href="#"><span>Availibility</span> : <?php echo e(($products->price > 0) ? 'In Stock' : 'Out of Stock'); ?></a></li>
							</ul>
							<p style="height: 200px;overflow-y:scroll"><?php echo e($products->description); ?></p>
							<?php if($vendor_count != null): ?>
							<div class="product_count" style="margin-top: -50px">
								<label for="color">Color:</label>
								<select name="color" class="form-control" id="img_change">
									<option value="0">Select Color</option>
									<?php $__currentLoopData = $products_vendor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewproducts_vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($viewproducts_vendor->vendo_product_id); ?>"><?php echo e($viewproducts_vendor->color); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
							<?php endif; ?>

							<div class="product_count" style="margin-top: -100px">
								<label for="size">Size:</label>
								<select name="size" class="form-control" id="size">
									<option value="0">Select Size</option>
									<?php $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewcolor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                 	<option value="<?php echo e($viewcolor->value); ?>"><?php echo e($viewcolor->value); ?></option>
					              	 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</select>
							</div>
							<div class="product_count">
								<label for="qty">Quantity:</label>
								<input type="number" name="qty" maxlength="12" min="1" value="1" title="Quantity:" id="quantity" class="input-text qty">
							</div>
							<input type="text" name="img_url_insert"  id="img_url_insert" style="display: none">

							<?php if($vendor_count != null): ?>
							<div class="col-md-6">
								<?php $__currentLoopData = $products_vendor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewproducts_vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<img class="img-fluid img-thumbnail img_class_hide"src="
								<?php echo e(asset(Storage::url('upload/vendor_products/'.$viewproducts_vendor->image))); ?>" alt="" style="width: 100px;display: none" id="item_img_<?php echo e($viewproducts_vendor->vendo_product_id); ?>">
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php endif; ?>
							<div class="card_area d-flex align-items-center "><br><br>
								<a class="primary-btn cart_class_s " id="<?php echo e($products->Products_id); ?>">Add to Cart</a>

								<a class="btn btn-light report_class" id="<?php echo e($products->Products_id); ?>">Report the product</a>

							</div>
						</div>
					</form>
				
				</div>
			</div>
		</div>
	</div>
	
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p><?php echo e($products->description); ?></p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Freshness Duration</h5>
									</td>
									<td>
										<h5>03days</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Each Box contains</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo e(asset('img/product/review-1.png')); ?>" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo e(asset('img/product/review-2.png')); ?>" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo e(asset('img/product/review-3.png')); ?>" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4><?php echo e($overall); ?></h4>
										<h6>(<?php echo e($total_review_count); ?> Reviews)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on <?php echo e($total_review_count); ?> Reviews</h3>
										<ul class="list">
											<li>
												<a href="#">5 Star 
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star "> </i> <?php echo e($review_count_5); ?>

												</a>
											</li>
											<li>
												<a href="#">4 Star 
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star color_disable"> </i> <?php echo e($review_count_4); ?>

												</a>
											</li>
											<li>
												<a href="#">3 Star 
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star color_disable"></i>
													<i class="fa fa-star color_disable"> </i> <?php echo e($review_count_3); ?>

												</a>
											</li>
											<li>
												<a href="#">2 Star 
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star color_disable"></i>
													<i class="fa fa-star color_disable"></i>
													<i class="fa fa-star color_disable"> </i> <?php echo e($review_count_2); ?>

												</a>
											</li>
											<li>
												<a href="#">1 Star 
													<i class="fa fa-star"></i>
													<i class="fa fa-star color_disable"></i>
													<i class="fa fa-star color_disable"></i>
													<i class="fa fa-star color_disable"></i>
													<i class="fa fa-star color_disable"> </i> <?php echo e($review_count_1); ?>

												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_reviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<?php if($view_reviews->image !=null ): ?>
												<img src="<?php echo e(asset(Storage::url("upload/user_image/".$view_reviews->image))); ?>" alt="" width="70px" class="rounded-circle">
											<?php else: ?>
												<img src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>" alt="" width="70px" class="rounded-circle">
											<?php endif; ?>
										</div>
										<div class="media-body">
											<h4><?php echo e($view_reviews->name); ?></h4>

											<?php for($i = 1; $i <= 5; $i++): ?>
												<?php if($i > $view_reviews->rating): ?>
													<i class="fa fa-star" style="color:#E8F0F2;"> </i>
												<?php else: ?>
													<i class="fa fa-star"></i>
												<?php endif; ?>
											<?php endfor; ?>
											
											
										</div>
									</div>
									<div class="col-md-12">
										<p><?php echo e($view_reviews->description); ?></p>
										<?php if($view_reviews->image_1 != null): ?>
										<img src="<?php echo e(asset(Storage::url("upload/reviews_images/".$view_reviews->image_1))); ?>" class="img-responsive img-rounded img-thumbnail" style="width:100px" />
										<?php endif; ?>
										<?php if($view_reviews->image_2 != null): ?>
										<img src="<?php echo e(asset(Storage::url("upload/reviews_images/".$view_reviews->image_2))); ?>" class="img-responsive img-rounded img-thumbnail" style="width:100px" />
										<?php endif; ?>
										<?php if($view_reviews->image_3 != null): ?>
											<img src="<?php echo e(asset(Storage::url("upload/reviews_images/".$view_reviews->image_3))); ?>" class="img-responsive img-rounded img-thumbnail" style="width:100px" />
										<?php endif; ?>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<form class="row contact_form" action="<?php echo e(url('add-review')); ?>" method="post" id="contactForm"
								 enctype="multipart/form-data"
								>
									<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

									<div class="form-group" id="rating-ability-wrapper">
										<p>Your Rating:</p>
										<ul class="list">
										    <div style="display: none">
											    <label class="control-label" for="rating">
											    <br>
											    <span class="field-label-info"></span>
											    <input type="hidden"  name="product_id" value="<?php echo e($products->Products_id); ?>" required="required">
											    </label>
											    <input type="hidden"  name="user_id" value="<?php echo e(Auth::id()); ?>" required="required">
											    </label>
											    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
											    </label>

											    <h2 class="bold rating-header" style="">
											    <span class="selected-rating">0</span><small> / 5</small>
											    </h2>
										    </div>

										    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
										        <i class="fa fa-star" aria-hidden="true"></i>
										    </button>
										    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
										        <i class="fa fa-star" aria-hidden="true"></i>
										    </button>
										    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
										        <i class="fa fa-star" aria-hidden="true"></i>
										    </button>
										    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
										        <i class="fa fa-star" aria-hidden="true"></i>
										    </button>
										    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
										        <i class="fa fa-star" aria-hidden="true"></i>
										    </button>
										</div>
										</ul>
										
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="review_message_id" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
										</div>
									</div>
									<div class="col-md-12">
									<div class="form-horizontal">
										<div class="form-group">
											<div id="coba" class="row"> </div>
										
										</div>
									</div>
									</div>
									<div class="col-md-12 error_show_rating" style="display: none" >
										<div class="alert alert-primary" role="alert">Please Enter Product Rating and Review 
										</div>	
									</div>
									
									<div class="col-md-12 text-right">
										<?php if(Auth::id() !=null): ?>
											<button type="submit" id="submit_form" value="submit" class="primary-btn" style="display: none">Submit Now</button>
											<button type="button" value="submit" class="primary-btn" id="product_review_id" >Submit Now</button>
										
										<?php else: ?>
										<button type="button" onclick="ErrorAlert()" class="primary-btn">Submit Now</button>
										<?php endif; ?>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('activate'); ?>
<script>
     ActiveMenu(5);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website_layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>