<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/skins/_all-skins.min.css">

  <script src="<?=base_url()?>assets/js/pace.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme-atom.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/dataTables.bootstrap.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/morris/morris.css">
  
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialdesignicons.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?=base_url()?>Admin/Dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SF</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>St. Francis</b> Admin</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <img src="<?=base_url()?>assets/img/bg.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?=$this->session->ad_user?></span>
              </a>
              <ul class="dropdown-menu" id="asd">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?=base_url()?>assets/img/bg.jpg" class="img-circle" alt="User Image">
                  <p>
                    <?=$this->session->ad_user?>
                    <small>Administrator</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?=base_url()?>Logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?=base_url()?>assets/img/bg.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?=$this->session->ad_user?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?=base_url()?>Admin/Dashboard"><i class="fa fa-circle-o"></i> Home </a></li>
              <li><a href="<?=base_url()?>Admin/Students"><i class="fa fa-circle-o"></i> Students </a></li>
              <li><a href="<?=base_url()?>Admin/Students/Unverified"><i class="fa fa-circle-o"></i> Unverified Students 
                <?php if (count($unreg->result() == null)): ?>

                <?php elseif(count($unreg->result() != null)): ?>
                  <span class="badge">
                    <?=count($unreg->result())?>
                  </span>
                <?php endif ?></a></li>
                <li><a href="<?=base_url()?>Admin/Faculty"><i class="fa fa-circle-o"></i> Faculty </a></li>
                <li><a href="<?=base_url()?>Admin/Courses"><i class="fa fa-circle-o"></i> Courses </a></li>
                <li><a href="<?=base_url()?>Admin/Subjects"><i class="fa fa-circle-o"></i> Subjects </a></li>
                <li><a href="<?=base_url()?>Admin/Classes"><i class="fa fa-circle-o"></i> Sections </a></li>
                <li><a href="<?=base_url()?>Admin/Dashboard"><i class="fa fa-circle-o"></i> Changelogs </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Extra</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>Admin/Messaging"><i class="fa fa-circle-o"></i> Messaging </a></li>
                <li><a href="<?=base_url()?>Admin/Validation"><i class="fa fa-circle-o"></i> Faculty Valdation </a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>