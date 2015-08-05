<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo asset_img('avatar3.png');?>" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>Hello, Admin</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="<?php echo site_url('admin/keys') ?>">
                <i class="fa fa-dashboard"></i> <span>Keys</span>
            </a>
        </li>
        <li class="active">
            <a href="<?php echo site_url('admin/news') ?>">
                <i class="fa fa-dashboard"></i> <span>News</span>
            </a>
        </li>
        <!-- <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Users</span>
                <i class="fa pull-right fa-angle-down"></i>
            </a>
            <ul class="treeview-menu" style="display: block;">
                <li><a href="<?php echo site_url('welcome/parents') ?>" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i>Parents List</a></li>
                <li><a href="<?php echo site_url('welcome/babies') ?>" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i>Babies List</a></li>
            </ul>
        </li> -->
    </ul>
</section>