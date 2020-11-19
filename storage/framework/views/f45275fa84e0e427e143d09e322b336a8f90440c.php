<?php if(Auth::check()): ?>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">

            <?php if(Auth::user()->image == null): ?>
              <img src="<?php echo e(asset(Storage::url("upload/user_image/default.png"))); ?>" alt="" style="width: 70px;height: 70px"  class="img-circle">
            <?php else: ?>
              <img src="<?php echo e(asset(Storage::url("upload/user_image/".Auth::user()->image))); ?>" alt="" style="width: 70px;height: 70px" class=" img-circle">
            <?php endif; ?>
            
            
          </div>
          <div class="pull-left info">
            <p><?php echo e(Auth::user()->name); ?></p>
            <small><small><a href="<?php echo e(url('admin/edit-account')); ?>"><span><i class="fa fa-user-circle-o"></i> <?php echo e(trans('backpack::base.my_account')); ?></span></a> &nbsp;  &nbsp; <a href="<?php echo e(backpack_url('logout')); ?>"><i class="fa fa-sign-out"></i> <span><?php echo e(trans('backpack::base.logout')); ?></span></a></small></small>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="<?php echo e(backpack_url('dashboard')); ?>"><i class="fa fa-dashboard"></i> <span><?php echo e(trans('backpack::base.dashboard')); ?></span></a></li>

        <?php if(Auth::user()->active == 1): ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('list_categories')): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/categories')); ?>"><i class="fa fa-bars"></i> <span><?php echo e(trans('category.categories')); ?></span></a></li>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('list_products')): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/products')); ?>"><i class="fa fa-list"></i> <span><?php echo e(trans('product.products')); ?></span></a></li>
          <?php endif; ?>

          <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/orders')); ?>"><i class="fa fa-list-ul"></i> <span><?php echo e(trans('order.orders')); ?></span></a></li>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('list_attributes')): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/attributes')); ?>"><i class="fa fa-tag"></i> <span><?php echo e(trans('attribute.attributes')); ?></span></a></li>
          <?php endif; ?>
 
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('list_attribute_sets')): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/attributes-sets')); ?>"><i class="fa fa-tags"></i> <span><?php echo e(trans('attribute.attribute_sets')); ?></span></a></li>
          <?php endif; ?>

        

         

         

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('list_order_statuses')): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/order-statuses')); ?>"><i class="fa fa-list-ul"></i> <span><?php echo e(trans('order.order_statuses')); ?></span></a></li>
          <?php endif; ?>

        

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('list_specific_prices')): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/specific-prices')); ?>"><i class="fa fa-money"></i> <span><?php echo e(trans('specificprice.specific_prices')); ?></span></a></li>
          <?php endif; ?>
         
          <?php if(Auth::user()->roles[0]->pivot->role_id == 1): ?>
            <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin').'/seller')); ?>">

              <i class="fa fa-list-ul"></i> <span>Seller Account</span></a>

            </li>
       
        
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i>
             <span>Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/users')); ?>"><i class="fa fa-user"></i> <span><?php echo e(trans('user.users')); ?></span></a></li>
              <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/role')); ?>"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/permission')); ?>"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>
           <?php endif; ?>
          

        <?php endif; ?>
           <!-- ======================================= -->
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
<?php endif; ?>