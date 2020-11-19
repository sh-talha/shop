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
      .img_align{
        margin-top: -30px;
        padding-bottom: 5px
      }
      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 24px;
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
        height: 16px;
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
      <span class="text-capitalize">products</span>
      <small>All  <span>products</span> in the database.</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('')); ?>/admin/dashboard">Admin</a></li>
      <li><a href="<?php echo e(url('')); ?>/admin/products" class="text-capitalize">products</a></li>
      <li class="active">List</li>
    </ol>
  </section>

        <!-- Main content -->
        <section class="content">
 <div class="row">
         <!-- THE ACTUAL CONTENT -->
         <div class="col-md-12">
           <div class="box">
             <div class="box-header with-border">
               <a href="<?php echo e(url('admin/products/create')); ?>" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> Add product</span></a>
               <a class="btn btn-primary ladda-button" data-toggle="modal" data-target="#addvendorpro"><span class="ladda-label"><i class="fa fa-plus"></i> Add vendor product</span></a>
                         
               <div id="datatable_button_stack" class="pull-right text-right"></div>
             </div>
             <div class="box-body table-responsive">
             <table id="crudTable" class="table table-bordered table-striped display">
                 <thead>
                   <tr>
                       <th>Name</th>
                       <th>Categories</th>
                       <th>SKU</th>
                       <th>Price</th>
                       <th>Stock</th>
                       <th>Status</th>
                       <th>Offer</th>
                       <th>Premium</th>
                       <th>Delux</th>
                       <th>Collection</th>
                       <th>Actions</th>
                   </tr>
                   </thead>
                   <tbody>
                     <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr role="row" class="odd">
                       <td><?php echo e($viewproduct->name); ?></td>
                       <td><?php echo e($viewproduct->categorie_name); ?></td>
                       <td><?php echo e($viewproduct->sku); ?></td>
                       <td><?php echo e($viewproduct->price); ?></td>
                       <td><?php echo e($viewproduct->stock); ?></td>
                       <td><?php echo e(($viewproduct->active ==1)? 'Active':'Inactive'); ?></td>
                       <td>
                          <label class="switch">
                              <input type="checkbox" <?php echo e(($viewproduct->offer == 1) ? 'Checked' : ''); ?> 
                              id="offer_id_<?php echo e($viewproduct->product_id); ?>"

                              onclick="offer(<?php echo e($viewproduct->product_id); ?>)"
                              >
                              <span class="slider"></span>
                          </label>
                       </td>
                       <td>
                          <label class="switch" >
                              <input type="checkbox" <?php echo e(($viewproduct->premium == 1)? 'Checked' : ''); ?>

                              id="premium_id_<?php echo e($viewproduct->product_id); ?>"

                               onclick="premium(<?php echo e($viewproduct->product_id); ?>)"

                               >
                              <span class="slider"></span>
                          </label>
                    
                       </td>
                       <td>
                          <label class="switch">
                              <input type="checkbox"
                              <?php echo e(($viewproduct->delux == 1)? 'Checked' : ''); ?>


                              id="delux_id_<?php echo e($viewproduct->product_id); ?>"

                              onclick="delux(<?php echo e($viewproduct->product_id); ?>)"
                              >
                              <span class="slider"></span>
                          </label>
                      </td>
                      <td>
                          <label class="switch">
                              <input type="checkbox"
                              <?php echo e(($viewproduct->collection == 1)? 'Checked' : ''); ?>


                              id="collection_id_<?php echo e($viewproduct->product_id); ?>"

                              onclick="collection(<?php echo e($viewproduct->product_id); ?>)"
                              >
                              >
                              <span class="slider"></span>
                          </label>
                      </td>
                       
                      <td><!-- Single edit button -->

                     <a href="<?php echo e(url('admin/products/'.$viewproduct->product_id).'/edit'); ?>" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a>

                     <a onclick="delete_button(<?php echo e($viewproduct->product_id); ?>)" class="btn btn-xs btn-default"><i class="fa fa-trash"></i> Delete</a>

                      <a onclick="vendor_product(<?php echo e($viewproduct->product_id); ?>)" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit Vendor Product</a>

                     
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                   <tfoot>
                     <tr>
                       <th>Name</th>
                       <th>Categories</th>
                       <th>SKU</th>
                       <th>Price</th>
                       <th>Stock</th>
                       <th>Status</th>
                       <th>Offer</th>
                       <th>Premium</th>
                       <th>Delux</th>
                       <th>Collection</th>

                       <th>Actions</th>
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
    
    <script src="<?php echo e(asset('css/website/image-picker.js')); ?>"></script>

    
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

    

    function delete_button($id){

        swal({
              title: "Are you sure You want to Delete it ",
              // text: "Submit to run ajax request",
              type: "info",
              showCancelButton: true,
              closeOnConfirm: false,
              showLoaderOnConfirm: true
          
          }, function () {
          setTimeout(function () {

             var delete_id = $id
              $.get('<?php echo e(url('admin/deleteproduct')); ?>',
                 {
                     _token: "<?php echo e(csrf_token()); ?>",
                     deleteid:delete_id
                 }
             ,
             function(data){

                   toastr.success(' Product Deactive successfully');
                   window.location.href="<?php echo e(url('admin/products')); ?>";
               
            });

          }, 2000);

        });
      }

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
            // alert(data)
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

        function vendor_product($id){

          $('#Editvendorpro').modal('show');

          $.get('<?php echo e(url('admin/editvendor')); ?>',
               {
                   _token: "<?php echo e(csrf_token()); ?>",
                   editvendor:$id
               }
           ,
           function(data){

            $('#Editpro').html(data);
            // alert(data);
             // if(offer==1)
             //     toastr.success('Offer active successfully');
             // else
             //     toastr.success('Offer deactive successfully');
          });
        }


    </script>

    
    
</body>
</html>
<!-- Modal -->
<div id="Editvendorpro" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <div class="row">
          <h4 class="modal-title col-md-9">Edit Vendor Product</h4>
          <button type="button" id="Editvendor" class="col-md-2 btn btn-info float-md-right">Add Product</button>
        </div>
      </div>
      <div id="Editpro">
        
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="addvendorpro" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <div class="row">
          <h4 class="modal-title col-md-9">Add Vendor Product</h4>
          <button type="button" id="btn1" class="col-md-2 btn btn-info float-md-right">Add Product</button>
          
        </div>
      </div>
      <form class="row contact_form" action="<?php echo e(url('admin/Addvendor')); ?>" method="post" id="contactForm" enctype="multipart/form-data">
      <div class="modal-body">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <div id="addpro"><br><br>
            <div class="row" id="row_add_1">
              <div class="form-group col-md-1 add_row" id="cross_id_1" >
                <i class="fa fa-close" style="font-size:28px;color:red;margin-left: 10px"></i>
              </div>
             <div class="form-group col-md-3" style="margin-left: -10px">
                <select name="productid[]" class="form-control select2_field">
                   <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($viewproduct->product_id); ?>"><?php echo e($viewproduct->name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
             </div>
             <div class="form-group col-md-4">
              <select class="form-control" name="color[]">

                <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewsize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($viewsize->value); ?>"><?php echo e($viewsize->value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </select>
             </div>
             <div class="form-group col-md-4 img_align" >
               <div class="form-horizontal">
                <div class="form-group">
                  <div id="coba" class="row"> 

                  </div>
                </div>
               </div>
             </div>

           </div>
          </div>
         

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" >Add Vendor product </button>

      </div>

      </form>
    </div>
  </div>
</div>


 
<script type="text/javascript">

  
  $('#Editvendor').click(function(event) {
    var randomnumber = Math.floor(Math.random() * 90000) + 10000;
    // alert();

    var html = "";
    html += '<div class="row" id="row_add_'+randomnumber+'">';
    html += '<input type="text" name="vendorid[]" style="display: none" value="'+randomnumber+'">'
    html += '<div class="form-group col-md-1 add_row" id="cross_id_'+randomnumber+'" ><i class="fa fa-close" style="font-size:28px;color:red;margin-left: 10px"></i></div>'
    html += '<div class="form-group col-md-3" style="margin-left: -10px">';
    html += '<select name="productid[]" class="form-control">';
    html += '<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>';
    html += '<option value="<?php echo e($viewproduct->product_id); ?>"><?php echo e($viewproduct->name); ?></option>';
    html += '<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
    html += '</select>';
    html += '</div>';
    html += '<div class="form-group col-md-3">';
    html += '<select class="form-control" name="color[]"><?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewsize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($viewsize->value); ?>"><?php echo e($viewsize->value); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>';
    html += '</div>';
    html += '<div class="form-group col-md-4 img_align">';
    html += '<div class="form-horizontal">';
    html += '<div class="form-group">';
    html += '<div id="coba'+randomnumber+'"class="row"> </div>';

    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';

    
    $( "#Editproduct" ).append(html);

    $("#coba"+randomnumber).spartanMultiImagePicker({
        fieldName:        'fileUpload[]',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        maxFileSize:      '',
        placeholderImage: {
            image: '<?php echo e(url('img/placeholder.jpg')); ?>',
            width : '100%'
        },
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');

        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
            

        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });

    $('.add_row').click(function(event) {
      var sd= (this.id).replace(/[^0-9]/gi, '');;  
        var number = parseInt(sd, 10);
        $('#row_add_'+number).remove();
      // alert(this.id);

    });

  });

  $('#btn1').click(function(event) {
    var randomnumber = Math.floor(Math.random() * 90000) + 10000;
    // alert();
    var html = "";
    html += '<div class="row " id="row_add_'+randomnumber+'">';

    html += '<div class="form-group col-md-1 add_row" id="cross_id_'+randomnumber+'" ><i class="fa fa-close" style="font-size:28px;color:red;margin-left: 10px"></i></div>'

    html += '<div class="form-group col-md-3" style="margin-left: -10px">';
    html += '<select name="productid[]" class="form-control">';
    html += '<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>';
    html += '<option value="<?php echo e($viewproduct->product_id); ?>"><?php echo e($viewproduct->name); ?></option>';
    html += '<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>';
    html += '</select>';
    html += '</div>';
    html += '<div class="form-group col-md-4">';
    html += '<select class="form-control" name="color[]"><?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewsize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($viewsize->value); ?>"><?php echo e($viewsize->value); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>';
    html += '</div>';
    html += '<div class="form-group col-md-4 img_align">';
    html += '<div class="form-horizontal">';
    html += '<div class="form-group">';
    html += '<div id="coba'+randomnumber+'"class="row"> </div>';

    html += '</div>';
    html += '</div>';
    html += '</div>';
    html += '</div>';
    
    $( "#addpro" ).append(html);

    $("#coba"+randomnumber).spartanMultiImagePicker({
        fieldName:        'fileUpload[]',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-md-4 col-sm-4 col-xs-6',
        maxFileSize:      '',
        placeholderImage: {
            image: '<?php echo e(url('img/placeholder.jpg')); ?>',
            width : '100%'
        },
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview : function(index){
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            console.log(index, file,  'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            console.log(index, file,  'file size too big');
            alert('File size too big');
        }
    });

    $('.add_row').click(function(event) {
      var sd= (this.id).replace(/[^0-9]/gi, '');;  
        var number = parseInt(sd, 10);
        $('#row_add_'+number).remove();
      // alert(this.id);

    });

  });

  $("#coba").spartanMultiImagePicker({
      fieldName:        'fileUpload[]',
      maxCount:         1,
      rowHeight:        '200px',
      groupClassName:   'col-md-4 col-sm-4 col-xs-6',
      maxFileSize:      '',
      placeholderImage: {
          image: '<?php echo e(url('img/placeholder.jpg')); ?>',
          width : '100%'
      },
      dropFileLabel : "Drop Here",
      onAddRow:       function(index){
          console.log(index);
          console.log('add new row');
      },
      onRenderedPreview : function(index){
          console.log(index);
          console.log('preview rendered');
      },
      onRemoveRow : function(index){
          console.log(index);
      },
      onExtensionErr : function(index, file){
          console.log(index, file,  'extension err');
          alert('Please only input png or jpg type file')
      },
      onSizeErr : function(index, file){
          console.log(index, file,  'file size too big');
          alert('File size too big');
      }
  });
  
  
  <?php if(Session::has('vendor')): ?>
    <?php $__currentLoopData = session('swalmess'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($details["id"] == 1 ): ?>
         toastr.success('<?php echo e($details["name"]); ?>');
       <?php else: ?>
         toastr.error('<?php echo e($details["name"]); ?>');
       <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php echo e(session()->put('swalmess','')); ?>


  <?php endif; ?>

  function deleterow($id,$image){


    swal({
          title: "Are you sure You want to Delete it ",
          // text: "Submit to run ajax request",
          type: "info",
          showCancelButton: true,
          closeOnConfirm: false,
          showLoaderOnConfirm: true
      
      },
      function(){
        setTimeout(function(){

          $.get('<?php echo e(url('admin/deletevendor')); ?>',
            {
              vendorid:$id,
              vendorimage:$image
            },
            function(data) {

              toastr.success('Vendor Product Successfully Delete.');
              swal("Delete Vendor Product Successfully");
              $('#row_add_'+$id).remove();

          });

        }, 2000);
      });


  }

      $(document).ready(function () {
          $('.select2_field').select2({
                  theme: "bootstrap"
              });
      });
 
  
</script>