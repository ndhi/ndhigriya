<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets"; ?>/dist/img/ng.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $name;?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="<?php echo base_url();?>administration"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Oprasional</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>portfolio"> <i class="fa fa-circle-o"></i> Portfolio</a></li>
          <li><a href="<?php echo base_url();?>portfolio_add"><i class="fa fa-circle-o"></i> Add Portfolio</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>data_user"> <i class="fa fa-circle-o"></i>Data User</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Partner</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url();?>data_partner"> <i class="fa fa-circle-o"></i>Data Partner</a></li>
          <li><a href="<?php echo base_url();?>add_partner"> <i class="fa fa-circle-o"></i>Add Partner</a></li>
        </ul>
      </li>

      <li class="header">INFO</li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>