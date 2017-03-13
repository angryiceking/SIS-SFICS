<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>
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

  <style type="text/css">
  	.hover:hover {
  		background: #16a085;
  	}
  </style>
</head>
<body style="background: url('<?=base_url()?>assets/img/pluto.png') center center fixed; background-size: cover; background-repeat: no-repeat;">
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
				<a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo.png" class="img-circle img-responsive" style="width: 40px; height: 40px; margin-left: 10px; margin-top: -10px;"> </a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class=""><a href="<?=base_url()?>Home">Home </a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#student" data-toggle="modal">Student Login</a></li>
							<li><a href="#faculty" data-toggle="modal">Faculty Login</a></li>
						</ul>
					</li>
					<li class=""><a href="<?=base_url()?>Home/Courses">Course Offerings </a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About us <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">History</li>
							<li><a href="#">The School Faculties</a></li>
							<li><a href="<?=base_url()?>Home/Premises">The School Premises</a></li>
							<li class="divider"></li>
							<li class="active"><a href="#">The School Facilities</a></li>
							<li class="divider"></li>
							<li class="disabled"><a href="#">The Founders </a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact us <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">The Staffs</li>
							<li><a href="<?=base_url()?>Home/Signup">Register Account</a></li>
							<li><a href="#">The School Principal</a></li>
							<li><a href="#">The Registrar</a></li>
							<li class="divider"></li>
							<li class="active"><a href="#">The Administrators</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="modal fade student" id="student" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Login Student Account</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<form method="post" action="<?=base_url()?>Home">
							<div class="col-md-12">
								<div class="col-md-12">
									<i class="mdi mdi-account-box center-block text-center" style="font-size: 100px; color: #2980b9; margin-bottom: -20px;"></i>
									<h3 class="text-center" style="color: #2c3e50;">Student Login </h3>

									<hr>
									<h6 class="text-center" style="color: #2c3e50;">Please login your account to access the site.</h6>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="username" id="username" class="form-control" placeholder="Username">
									</div>
									<div class="col-md-12">
										<br/>
									</div>
									<div class="col-md-12">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password">
									</div>
									<div class="col-md-12">
										<br/>
									</div>
									<div class="col-md-12">
										<button class="btn btn-md btn-block center-block hover" id="submit">Login <i class="mdi mdi-login"></i></button>
									</div>
									<div class="col-md-12">
										<br/>
									</div>	
								</div>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal --> 

	<div class="modal fade faculty" id="faculty" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Login Faculty Account</h4>
				</div>
				<div class="modal-body">
					<form method="post" action="<?=base_url()?>Faculty">
						<div class="form-group">
							<div class="col-md-12">
								<i class="mdi mdi-account-box center-block text-center" style="font-size: 100px; color: #2980b9; margin-bottom: -20px;"></i>
								<h3 class="text-center" style="color: #2c3e50;"> Faculty Login</h3>
								<hr>
								<h6 class="text-center" style="color: #2c3e50;">Please login your account to access the site.</h6>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" name="username" id="username" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="password" name="password" id="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-md btn-block center-block hover" id="submit">Login <i class="mdi mdi-login"></i></button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br/>
							</div>
						</div>
					</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal --> 