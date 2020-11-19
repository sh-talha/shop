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

       <!-- =============================================== -->

           <!-- Content Wrapper. Contains page content -->
           <div class="content-wrapper">
             <!-- Content Header (Page header) -->
              <section class="content-header">

         <h1>
             My Account
         </h1>

         <ol class="breadcrumb">

             <li>
                 <a href="<?php echo e(url('')); ?>/admin"> Granyupon</a>
             </li>

             <li>
                 <a href="<?php echo e(url('')); ?>/admin/edit-account-info">My Account</a>
             </li>

             <li class="active">
                 Update Account Info
             </li>

         </ol>

     </section>

           <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
            <div class="box">
               <div class="box-body box-profile">
                <?php if(Auth::user()->image == null): ?>
                <img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>">
                <?php else: ?> 
                <img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset(Storage::url("upload/user_image/".Auth::user()->image))); ?>">

                <?php endif; ?>

                <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>
              </div>

                <hr class="m-t-0 m-b-0">

              <ul class="nav nav-pills nav-stacked">
                
                <li role="presentation"
                      ><a href="#" data-toggle="modal" data-target="#myModal">Change profile pic</a>
                </li>

                <li role="presentation"
                      class="active"
                        ><a href="<?php echo e(url('')); ?>/admin/edit-account">Update Account Info</a></li>

                <li role="presentation"
                      ><a href="<?php echo e(url('')); ?>/admin/change-password">Change Password</a>
                </li>
                <?php if(Auth::user()->roles[0]->pivot->role_id != 1): ?>
                <li role="presentation"
                      ><a href="#" onclick="deleteaccount()">Delete Account</a>
                </li>
                <?php endif; ?>

              </ul>
            </div>
          </div>
      <div class="col-md-6">
         <form class="form" action="<?php echo e(url('admin/editprofiledata')); ?>" method="post">

          <?php echo e(csrf_field()); ?>


         <div class="box">

             <div class="box-body backpack-profile-form">
                 <div class="form-group">
                    <label class="required">Name</label>
                    <input required class="form-control" type="text" name="name" value="<?php echo e(Auth::user()->name); ?>">
                 </div>

                 <div class="form-group">
                    <label class="required">E-Mail Address</label>
                    <input required class="form-control" type="email" name="email" value="<?php echo e(Auth::user()->email); ?>">
                 </div>
                  <div class="form-group">
                    <label class="required">Country</label>

                    <select class="form-control " name="country" id="countries" >
                       <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(( Auth::user()->country == $view_countries->id ) ? 'selected':''); ?> value="<?php echo e($view_countries->id); ?>"><?php echo e($view_countries->name); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                 </div>
                  <div class="form-group">
                    <label class="required">State</label>
                    <div id="state">
                     <select class="form-control disable" name="city" >
                         <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option <?php echo e(( Auth::user()->city == $view_state->id ) ? 'selected':''); ?> value="<?php echo e($view_state->id); ?>"><?php echo e($view_state->name); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>

                  </div>
                 </div>
                  <div class="form-group">
                    <label class="required">Address</label>
                    <input class="form-control" type="text" name="address" value="<?php echo e(Auth::user()->address); ?>">
                  </div>
                   <div class="form-group">
                  <label class="required">phone</label>
                    <input class="form-control" type="text" name="phone" value="<?php echo e(Auth::user()->phone); ?>">
                  </div>
                 <div class="form-group">
                  <label class="required">Gender</label>
                    <select class="form-control " name="gender">
                        <option value="1" <?php echo e((Auth::user()->gender == 1) ? 'selected':''); ?>>Male</option>
                        <option value="2" <?php echo e((Auth::user()->gender == 2) ? 'selected':''); ?>>Female</option>
                    </select>
                  </div>

              <?php if(Auth::user()->roles[0]->pivot->role_id != 1): ?>
                   <div class="form-group">
                  <label class="required">bank</label>
                    <input class="form-control" type="text" name="bank" value="<?php echo e(Auth::user()->bank); ?>">
                  </div>
                   <div class="form-group">
                  <label class="required">Iban No</label>
                    <input class="form-control" type="text" name="ibanno" value="<?php echo e(Auth::user()->ibanno); ?>">
                  </div>


                  <div class="form-group" 
                
                  ><label class="required">Seller</label>
                    <select class="form-control" name="typeseller">
                      <option value="0" <?php echo e((Auth::user()->typeseller == 0 )? 'selected':''); ?>>Private Seller</option>
                      <option value="1" <?php echo e((Auth::user()->typeseller == 1 )? 'selected':''); ?>>Company</option>
                    </select>
                  </div>
                  <?php endif; ?>
             </div>

             <div class="box-footer">

                 <button type="submit" class="btn btn-success"><span class="ladda-label"><i class="fa fa-save"></i> Save</span></button>
                 <a href="<?php echo e(url('')); ?>/admin" class="btn btn-default"><span class="ladda-label">Cancel</span></a>

             </div>
         </div>
       </form>
       </div>
   </div>

     </section>
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
    <script src="<?php echo e(asset('vendor/')); ?>/backpack/pnotify/pnotify.custom.min.js"></script>

    <script src="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
     <script src="<?php echo e(asset('css/website/toastr.js')); ?>"></script>
    

    
    <script src="<?php echo e(asset('vendor/')); ?>/adminlte/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('')); ?>/js/sweetalert.min.js"></script>
<script type="text/javascript">
  
    function deleteaccount(){
      

      swal({
            title: "Are you sure You want to Delete it ",
            // text: "Submit to run ajax request",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        
        }, function () {
        setTimeout(function () {

           var id=<?php echo e(Auth::user()->id); ?>;
            $.get('<?php echo e(url('admin/deleteprofile')); ?>/'+id, function(data) {
                  
                swal({
                  title: "Your Account Delete Successfully",
                  // text: "Your will not be able to recover this imaginary file!",
                  type: "success",
                  showCancelButton: false,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false
                },
                function(){
                  
                  window.location.href="<?php echo e(backpack_url('logout')); ?>";

                });
            
            });
        }, 2000);

      });
    }
      
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#ShowImage')
                  .attr('src', e.target.result)
                  .width(150)
                  .height(200);
          };

          reader.readAsDataURL(input.files[0]);
      }
    }
    $('#countries').change(function() {
       
        var id=$(this).val();
        $.get('<?php echo e(url('state/')); ?>/'+id,

        function(data) {
            $('#state').html(data);
            // alert(data);

        });

    });

</script>
</body>
</html>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Profile Pic</h4>
      </div>
      <div class="modal-body">
         <div class="box-body box-profile">
         
          <?php if(Auth::user()->image == null): ?>
          <img id="ShowImage" class="profile-user-img img-responsive img-circle" src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>">
          <?php else: ?> 
          <img id="ShowImage" class="profile-user-img img-responsive img-circle" src="<?php echo e(asset(Storage::url("upload/user_image/".Auth::user()->image))); ?>">

          <?php endif; ?>

          <br>
          <div class="text-center">
            <form method="post" enctype="multipart/form-data" action="<?php echo e(url('admin/edit-image')); ?>" accept-charset="utf-8">
              <?php echo e(csrf_field()); ?>

                <input type="file" id="files" name="imagefile" class="hidden" onchange="readURL(this);" />
                <label for="files" class="btn btn-primary">Select file</label>
                <button type="submit" class="btn btn-success">Save</button>

            </form>
          </div>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>