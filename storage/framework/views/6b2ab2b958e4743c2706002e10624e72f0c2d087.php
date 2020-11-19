<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="dN7EedCcFDeCmHxNeSHi6rFqWsnbzZaF2jnifj8h" />

    <title>
      Products ::  Granyupon Admin
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
    <link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/backpack.base.css')); ?>?v=2">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/backpack/overlays/backpack.bold.css')); ?>">

    <style type="text/css">
      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
      }

      .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
      }

      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
      }

      .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }

      input:checked + .slider {
        background-color: #2196F3;
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }

      /* Rounded sliders */
      .slider.round {
        border-radius: 34px;
      }

      .slider.round:before {
        border-radius: 50%;
      }
    </style>

      <!-- DATA TABLES -->
  <link href="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

  <!-- CRUD LIST CONTENT - crud_list_styles stack -->
  <link href="<?php echo e(asset('')); ?>css/sweetalert.css" rel="stylesheet">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
            <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo e(url('')); ?>" class="logo">
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

    <?php echo $__env->make('backpack::inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
    <h1>
      <span class="text-capitalize">Seller</span>
      <small>All  <span>Seller</span> in the database.</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('')); ?>/admin/dashboard">Admin</a></li>
      <li><a href="<?php echo e(url('')); ?>/admin/products" class="text-capitalize">Seller</a></li>
      <li class="active">List</li>
    </ol>
  </section>

        <!-- Main content -->
        <section class="content">
 <div class="row">
         <!-- THE ACTUAL CONTENT -->
         <div class="col-md-12">
           <div class="box">
             
             <div class="box-body table-responsive">
             <table id="crudTable" class="table table-bordered table-striped display">
                 <thead>
                   <tr>
                       <th>Seller id</th>
                       <th>Seller Name</th>
                       <th>Sales</th>
                       <th>Disputes</th>
                       <th>Report</th>
                       <th>Status</th>
                       
                   </tr>
                   </thead>
                   <tbody>
                     <?php $__currentLoopData = $rep_count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewreportinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr role="row" class="odd">
                       <td><?php echo e($viewreportinfo['sellersinfo']->seller_id); ?></td>
                       <td><?php echo e($viewreportinfo['sellersinfo']->name); ?></td>
                       <td>$ <?php echo e($viewreportinfo['sales']); ?></td>
                       <td><?php echo e($viewreportinfo['product_dispute']); ?></td>
                       <td><?php echo e($viewreportinfo['report_count']); ?></td>
                       <td><?php echo e(($viewreportinfo['sellersinfo']->status == 1)? 'Active' :'Inactive'); ?></td>

                       
                       
                      
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                   <tfoot>
                     <tr>


                      <th>Seller id</th>
                      <th>Seller Name</th>
                      <th>Sales</th>
                      <th>Disputes</th>
                      <th>Report</th>
                      <th>Status</th>
                      
                   </tr>
                 </tfoot>
               </table>

             </div><!-- /.box-body -->

             
           </div><!-- /.box -->
         </div>

       </div>

       <div class="clone-product-modal modal fade" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title"><i class="fa fa-clone"></i> Clone Product</h4>
           </div>
           <form action="<?php echo e(url('admin/products/clone')); ?>" method="POST">
               <div class="modal-body">
                 <input type="hidden" name="_token" value="dN7EedCcFDeCmHxNeSHi6rFqWsnbzZaF2jnifj8h">
                 <input type="hidden" name="product_id" value="">

                 <div class="row">
                   <div class="form-group col-md-12">
                     <label>Cloned Product SKU</label>
                     <input type="text" class="form-control" name="clone_sku" required="true">
                     <span>Must be unique</span>
                   </div>

                   <div class="form-group col-md-12">
                     <div class="checkbox">
                       <label>
                         <input type="checkbox" name="clone_images">
                         Clone images?
                       </label>
                     </div>
                     <span>This will also make a copy of the images.</span>
                   </div>                    
                 </div> 
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                 <button type="submit" class="btn btn-primary">Clone</button>
               </div>
           </form>
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
        <!-- DATA TABLES SCRIPT -->
    <script src="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
     <script src="<?php echo e(asset('css/website/toastr.js')); ?>"></script>
    

    
    <script src="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('')); ?>/js/sweetalert.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {

      var table = $("#crudTable").DataTable({
              "pageLength": 10,
              // /* Disable initial sort */
              "aaSorting": [],
              
          });
      $.ajaxPrefilter(function(options, originalOptions, xhr) {
          var token = $('meta[name="csrf_token"]').attr('content');

          if (token) {
                return xhr.setRequestHeader('X-XSRF-TOKEN', token);
          }
      });

      // make the delete button work in the first result page
      register_delete_button_action();

      // make the delete button work on subsequent result pages
      $('#crudTable').on( 'draw.dt',   function () {
         register_delete_button_action();

         } ).dataTable();

      function register_delete_button_action() {
        $("[data-button-type=delete]").unbind('click');
        // CRUD Delete
        // ask for confirmation before deleting an item
        $("[data-button-type=delete]").click(function(e) {
          e.preventDefault();
          var delete_button = $(this);
          var delete_url = $(this).attr('href');

          swal({
            title: "Are you sure?",
            text: "Are you sure you want to delete this item?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3C8DBC",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false,
            closeOnCancel: false
              },
              function (isConfirm) {
            if (isConfirm) {
                $.ajax({
              url: delete_url,
              type: 'DELETE',
              success: function () {
                  // delete the row from the table
                  delete_button.parentsUntil('tr').parent().remove();
              },
              error: function () {
                  // Show an alert with the result
                  new PNotify({
                title: "NOT deleted",
                text: "There&#039;s been an error. Your item might not have been deleted.",
                type: "warning"
                  });
              }
                });
                swal("Item Deleted", "The item has been deleted successfully.", "success");
            } else {
                swal("Not deleted", "Nothing happened. Your item is safe.", "error");
            }
              });
                });
              }

    });

                  // Clone product
        $(document).on('click', '.clone-btn', function() {
            var product_id = $(this).data('product');
            $('input[name="product_id"]').val(product_id);
            $('input[name="clone_sku"]').val('');
            $('.clone-product-modal').modal('show');
        });


        function offer(id){
          
          var offer = $('#offer_id_'+id).is(":checked")? 1 : 0 
           $.get('<?php echo e(url('admin/offer')); ?>',
              {
                  _token: "<?php echo e(csrf_token()); ?>",
                  product_id:id,
                  offer_id:offer
              }
          ,
          function(data){
            if(offer==1)
                toastr.success('Offer active successfully');
            else
                toastr.success('Offer deactive successfully');
         });
        }
        function premium(id){
            var premium = $('#premium_id_'+id).is(":checked")? 1 : 0 
             $.get('<?php echo e(url('admin/premium')); ?>',
              {
                  _token: "<?php echo e(csrf_token()); ?>",
                 product_id:id,
                 premium_id:premium
             },
             function(data){
                if(premium==1)
                    toastr.success('Premium active successfully');
                else
                    toastr.success('Premium deactive successfully');

            });
        }
        function delux(id){
            var delux = $('#delux_id_'+id).is(":checked")? 1 : 0 
              $.get('<?php echo e(url('admin/delux')); ?>',
                 {
                    _token: "<?php echo e(csrf_token()); ?>",
                    product_id:id,
                    delux_id:delux
                 }
             ,
             function(data){
                 if(delux==1)
                     toastr.success('Delux active successfully');
                 else
                     toastr.success('Delux deactive successfully');
            });
        }
        function collection(id){
            var collection = $('#collection_id_'+id).is(":checked")? 1 : 0 
              $.get('<?php echo e(url('admin/collection')); ?>',
                 {
                    _token: "<?php echo e(csrf_token()); ?>",
                    product_id:id,
                    collection_id:collection
                 }
             ,
             function(data){
                 if(collection==1)
                     toastr.success('Collection active successfully');
                 else
                     toastr.success('Collection deactive successfully');
            });
        }
        
    </script>

 
    
</body>
</html>