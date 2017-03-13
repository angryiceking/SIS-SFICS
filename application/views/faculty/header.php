<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Faculty | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Morris chart -->
  <script src="<?=base_url()?>assets/js/pace.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme-minimal-load.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/dataTables.bootstrap.min.css">

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
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.1.1.min.js "></script>
  <script type="text/javascript">

    setInterval(function(){//refresh every 15mns
      $("#msgcol").load("<?=base_url()?>Messages");
    }, 5000);

    $(document).ready(function (){
      
      $("#msgcol").load("<?=base_url()?>Messages");

      $('#max').hide();
      $('#message').keyup(function (e){
        if (e.keyCode == 13) {
          var message = $('#message').val();
          $("#message").val("");
          $.ajax({
            url : '<?=base_url()?>InsertChat',
            type: 'POST',
            data: {message:message},
            success: function(){
              $("#msgcol").load("<?=base_url()?>Messages");
            },
            error: function(e){
              alert('something went wrong: '+ e);
            },
          });
        }
      });
    });
  </script>
  <style type="text/css">
    #chatbox {
      position: fixed;
      bottom: 0;
      right: 10px;
      float: right;
      margin-bottom: -3px;
    }
    #max {
      position: fixed;
      bottom: 0;
      right: 10px;
      float: right;
      margin-bottom: -3px;
    }
    .col-md-2, .col-md-10{
      padding:0;
    }
    .panel{
      margin-bottom: 0px;
    }
    .chat-window{
      bottom:0;
      position:fixed;
      float:right;
      margin-left:10px;
    }
    .chat-window > div > .panel{
      border-radius: 5px 5px 0 0;
    }
    .icon_minim{
      padding:2px 10px;
    }
    .msg_container_base{
      background: #e5e5e5;
      margin: 0;
      padding: 0 10px 10px;
      max-height:300px;
      overflow-x:hidden;
    }
    .top-bar {
      background: #666;
      color: white;
      padding: 10px;
      position: relative;
      overflow: hidden;
    }
    .msg_receive{
      padding-left:0;
      margin-left:0;
    }
    .msg_sent{
      padding-bottom:20px !important;
      margin-right:0;
    }
    .messages {
      background: white;
      padding: 10px;
      border-radius: 2px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      max-width:100%;
    }
    .messages > p {
      font-size: 13px;
      margin: 0 0 0.2rem 0;
    }
    .messages > time {
      font-size: 11px;
      color: #ccc;
    }
    .msg_container {
      padding: 10px;
      overflow: hidden;
      display: flex;
    }
    img {
      display: block;
      width: 100%;
    }
    .avatar {
      position: relative;
    }
    .base_receive > .avatar:after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 0;
      height: 0;
      border: 5px solid #FFF;
      border-left-color: rgba(0, 0, 0, 0);
      border-bottom-color: rgba(0, 0, 0, 0);
    }

    .base_sent {
      justify-content: flex-end;
      align-items: flex-end;
    }
    .base_sent > .avatar:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 0;
      border: 5px solid white;
      border-right-color: transparent;
      border-top-color: transparent;
      box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
    }

    .msg_sent > time{
      float: right;
    }



    .msg_container_base::-webkit-scrollbar-track
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar
    {
      width: 12px;
      background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar-thumb
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #555;
    }

    .btn-group.dropup{
      position:fixed;
      left:0px;
      bottom:0;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SF</b>F</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>St. Francis</b> Faculty</span>
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
                <span class="hidden-xs"><?=$this->session->fac_name?></span>
              </a>
              <ul class="dropdown-menu" id="asd">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?=base_url()?>assets/img/bg.jpg" class="img-circle" alt="User Image">
                  <p>
                    <?=$this->session->fac_name?>
                    <small>Faculty</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?=base_url()?>Home/logout" class="btn btn-default btn-flat">Sign out</a>
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
            <p><?=$this->session->fac_name?></p>
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
              <li class="active"><a href="<?=base_url()?>Faculty/Dashboard/<?=$this->session->id?>"><i class="fa fa-circle-o"></i> Home </a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
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