<!DOCTYPE html>
<html>
<head>
	<title>Student Lounge</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootflat.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick-theme.css">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=base_url()?>/Admin/Dashboard"><small>StudentLounge</small></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="#">Online <span class="badge">21</span> </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MyAccount <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-header">Settings</li>
              <li><a href="#"></a></li>
              <li><a href="<?=base_url()?>Student/Profile">Account Settings</a></li>
              <li class="divider"></li>
              <li class="active"><a href="#">Preferences</a></li>
              <li class="divider"></li>
              <li class="disabled"><a href="#">Quicklink to your <i class="mdi mdi-google"></i> Account</a></li>
              <li><a href="<?=base_url()?>Home/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-search search-only">
            <i class="search-icon glyphicon glyphicon-search"></i>
            <input type="text" class="form-control search-query" placeholder="Search students.. ">
          </div>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>