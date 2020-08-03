<aside class="main-sidebar"  style="position: fixed;">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo e(URL::to('/admin')); ?>"><i class="fa fa-home"></i> <span>Home </span></a></li>
        
        <!--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>-->

        <li class="active"><a href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-eye"></i> <span>Voire Le Boutique </span></a></li>

        
        <li class="treeview">
          <a href="#"><i class="fa fa-folder-open"></i> <span>Categories</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::to('all-category')); ?>">List</a></li>
            <li><a href="<?php echo e(URL::to('add-category')); ?>">Create</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-code-branch"></i> <span>Brand</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::to('all-brand')); ?>">List</a></li>
            <li><a href="<?php echo e(URL::to('add-brand')); ?>">Create</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-th-large"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::to('all-product')); ?>" >List</a></li>
            <li><a href="<?php echo e(URL::to('add-product')); ?>">Create</a></li>
          </ul> 
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-picture-o"></i> <span>Slider</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::to('all-slider')); ?>">List Slider</a></li>
            <li><a href="<?php echo e(URL::to('add-slider')); ?>">create Slider</a></li>
          </ul>
          <ul class="treeview-menu">
          </ul> 
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-cart-arrow-down"></i> <span>Order</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(URL::to('all-order')); ?>">ALL Order</a></li>
          </ul> 
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-cart-arrow-down"></i> <span>Contacte</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="">ALL Message</a></li>
          </ul> 
        </li>

        <li class="treeview">
          <a href="<?php echo e(URL::to('add-parameter')); ?>"><i class="fa fa-cog"></i> <span>Parametres</span> </a>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>