
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="YyjylzZ7baA6ygvvvecoyNiXxH87GeyHevOzAqGq" />

    <title>
       Granyupon Admin
    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/')); ?>/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/pnotify/pnotify.custom.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/website/toastr.css')); ?>"/>

    <!-- BackPack Base CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/')); ?>/backpack/backpack.base.css?v=2">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/')); ?>/backpack/overlays/backpack.bold.css">
      <link href="<?php echo e(asset('/')); ?>css/sweetalert.css" rel="stylesheet">
    	<link rel="stylesheet" href="<?php echo e(asset('vendor/')); ?>/backpack/crud/css/crud.css">
	<link rel="stylesheet" href="<?php echo e(asset('vendor/')); ?>/backpack/crud/css/show.css">

	<!-- include select2 css-->
	<link href="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

	<!-- Select 2 Bootstrap theme -->
	<link href="<?php echo e(asset('/')); ?>css/select2-bootstrap-min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<script type="text/javascript">
		/* Recover sidebar state */
		(function () {
			if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
				var body = document.getElementsByTagName('body')[0];
				body.className = body.className + ' sidebar-collapse';
			}
		})();
	</script>
    <!-- Site wrapper -->
    <div class="wrapper">
            <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo e(asset('/')); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>e</b>S</span>
          <!-- logo for regular state and mobile devices -->
          
          <span class="logo-lg"> Granyupon</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <!-- <li><a href="http://localhost/1%20ecommer%20site/estarter-ecommerce/public"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
     

                    <li><a href="<?php echo e(url('')); ?>/admin/logout"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
        
       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
        </nav>
      </header>
     
      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
     <?php echo $__env->make('backpack::inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         
        <!-- Main content -->
        <section class="content">
		
		<a href="<?php echo e(url('')); ?>/admin/orders"><i class="fa fa-angle-double-left"></i> Back to all  <span>orders</span></a><br><br>
	
	<div class="row">
		<div class="col-md-12 well">
			<h2>Order #<?php echo e($address[0]->tracking_id); ?> - Seller</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-ticket"></i> Order Status</span>
		          </h3>
			    </div>
			    <div class="box-body">
			    	<h4>
			    		Current status <br><br>
			    		<span class="label label-default">
			    			<?php $__currentLoopData = $order_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_order_history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    			<?php if($loop->first): ?>
			    				<?php echo e($view_order_history->name); ?>

			    			 <?php endif; ?>
			    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			    		</span>
			    	</h4>

					<hr>

					<h4>
						Status history
					</h4>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Status</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $order_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_order_status_history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($view_order_status_history->name); ?></td>
									<td><?php echo e($view_order_status_history->created_at); ?></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
						</table>
					
					<hr>

			<form action="<?php echo e(url('admin/ordersstatus')); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<input type="text" style="display: none" name="orderid" value="<?php echo e($order_details[0]->order_id); ?>">
						<input type="text" style="display: none" name="track_id" value="<?php echo e($order_details[0]->tracking_id); ?>">
						<select name="status_id" id="status_id" class="select2_field" style="width: 100%">
							<?php $__currentLoopData = $order_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_order_statuses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($view_order_statuses->id); ?>"><?php echo e($view_order_statuses->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					</div>

					<button type="submit" class="btn btn-primary">Update status</button>
				</form>
		    </div>
		    </div>
		</div>
		<div class="col-md-5">
			
		    <div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-user"></i> Shipping details</span>
		          </h3>
			    </div>

			    <div class="box-body">
			    	<div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-shipping-address" data-toggle="tab">Shipping address</a></li>
                            
                        </ul>
    	                        <div class="tab-content">
	                            <div class="tab-pane active" id="tab-shipping-address">
									<h4>Shipping address</h4>
									<table class="table table-condensed table-hover">
										<tr>
											<td>Contact Person</td>
											<td><?php echo e($address[0]->first_name); ?></td>
										</tr>
										<tr>
											<td>Address</td>
											<td><?php echo e($address[0]->add1); ?>

											</td>
										</tr>
										<tr>
											<td>County</td>
											<td><?php echo e($address[0]->countries); ?></td>
										</tr>
										<tr>
											<td>City</td>
											<td><?php echo e($address[0]->state); ?></td>
										</tr>
										<tr>
											<td>Postal Code</td>
											<td><?php echo e($address[0]->zip); ?></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?php echo e($address[0]->phonenumber); ?></td>
										</tr>
										<tr>
											<td>Email address</td>
											<td><?php echo e($address[0]->emailaddress); ?></td>
										</tr>
										<tr>
											<td>Date</td>
											<td><?php echo e($address[0]->curent_date); ?></td>
										</tr>
										
									</table>
	                            </div>
	                          
	                        </div>
                                            </div>
			    </div>
		    </div>
		</div>
	</div>

	

	<div class="row">
		<div class="col-md-12">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-shopping-cart"></i> Products</span>
		          </h3>
			    </div>

			    <div class="box-body">
			    	<div class="col-md-12">
				    	<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Product</th>
									<th>Price</th>
									<th>Color</th>
									<th>Size</th>
									<th>Quantity</th>
									<th >Total</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_order_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php ($total = $view_order_details->total_price); ?>
								
								<tr>
									<td><?php echo e($view_order_details->name); ?></td>
									<td><?php echo e($view_order_details->price); ?></td>
									<td><?php echo e($view_order_details->color); ?></td>
									<td><?php echo e($view_order_details->size); ?></td>
									<td><?php echo e($view_order_details->quantity); ?></td>
									<td><?php echo e($view_order_details->total_product_price); ?></td>
									
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>	
						</table>
					</div>

					<div class="col-md-6 col-md-offset-6">
						<table class="table table-condensed">
							<tr>
								<td class="text-right"><strong>Total:</strong></td>
								<td class="text-right"><strong><?php echo e($total); ?></strong></td>
							</tr>
						</table>
					</div>

			    </div>
		    </div>
		</div>
	</div>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
       
      </footer>
    </div>
    <!-- ./wrapper -->


    
    <!-- jQuery 2.2.0 -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo e(asset('vendor/adminlte')); ?>/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
   
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/plugins/pace/pace.min.js"></script>
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/plugins/fastclick/fastclick.js"></script>
    <script src="<?php echo e(asset('vendor/adminlte')); ?>/dist/js/app.min.js"></script>

    <!-- page script -->
    <script type="text/javascript">
        /* Store sidebar state */
        $('.sidebar-toggle').click(function(event) {
          event.preventDefault();
          if (Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))) {
            sessionStorage.setItem('sidebar-toggle-collapsed', '');
          } else {
            sessionStorage.setItem('sidebar-toggle-collapsed', '1');
          }
        });
        // To make Pace works on Ajax calls
        $(document).ajaxStart(function() { Pace.restart(); });

        // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
        // Set active state on menu element
        var current_url = "<?php echo e(asset('/')); ?>/admin/orders/1";
        var full_url = current_url+location.search;
        var $navLinks = $("ul.sidebar-menu li a");
        // First look for an exact match including the search string
        var $curentPageLink = $navLinks.filter(
            function() { return $(this).attr('href') === full_url; }
        );
        // If not found, look for the link that starts with the url
        if(!$curentPageLink.length > 0){
            $curentPageLink = $navLinks.filter(
                function() { return $(this).attr('href').startsWith(current_url) || current_url.startsWith($(this).attr('href')); }
            );
        }
        
        $curentPageLink.parents('li').addClass('active');
        
        var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
        location.hash && activeTab && activeTab.tab('show');
        $('.nav-tabs a').on('shown.bs.tab', function (e) {
            location.hash = e.target.hash.replace("#tab_", "#");
        });
    </script>

    <script src="<?php echo e(asset('vendor/')); ?>/backpack/pnotify/pnotify.custom.min.js"></script>


<script type="text/javascript">
  jQuery(document).ready(function($) {

    PNotify.prototype.options.styling = "bootstrap3";
    PNotify.prototype.options.styling = "fontawesome";

      });
</script>
    	<script src="<?php echo e(asset('vendor/')); ?>/backpack/crud/js/crud.js"></script>
	<script src="<?php echo e(asset('vendor/')); ?>/backpack/crud/js/show.js"></script>

	<!-- include select2 js -->
    <script src="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/select2/select2.min.js"></script>

	<script>
		$(document).ready(function () {
				$('.select2_field').select2({
                theme: "bootstrap"
            });
		});
	</script>

    <!-- JavaScripts -->
    
</body>
</html>
 <script src="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('/')); ?>/js/sweetalert.min.js"></script>
