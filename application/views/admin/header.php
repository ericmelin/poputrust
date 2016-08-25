<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <img src="<?php echo base_url(PATH_THEME_IMAGE . 'logo-poputrust.png'); ?>" height="45" width="160" style="margin-left: 5px" class="pull-left">
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <b><?php echo $globals['firstName'] . ' ' . $globals['lastName'] ?></b>
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="<?php echo base_url('admin/profile'); ?>">
                        <i class="fa fa-gear fa-fw"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url('home/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">           

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#appointments"><i class="fa fa-group fa-fw"></i> People <i class="fa fa-fw fa-caret-down"></i></a>
                     <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('admin/people/import'); ?>"><i class="fa fa-file-archive-o  fa-fw"></i> Import</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin#'); ?>"><i class="fa fa-wrench  fa-fw"></i> Manual</a>
                        </li>
                    </ul>
                </li>
             
                <li <?php ($active_class == 'data' ? 'class="active"' : ""); ?>>
                    <a href="<?php echo base_url('admin#'); ?>">
                        <i class="fa fa-history  fa-fw"></i> Other</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>