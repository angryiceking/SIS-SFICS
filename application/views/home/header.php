<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootflat.min.css">	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialdesignicons.min.css">
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
				<a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo.png" class="img-circle img-responsive" style="width: 40px; height: 40px; margin-left: 10px;"> </a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class=""><a href="#">Home </a></li>
					<li class=""><a href="#">Contributors </a></li>
					<li class=""><a href="#">Course Offerings </a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About us <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">History</li>
							<li><a href="#">The School Faculties</a></li>
							<li><a href="#">The School Premises</a></li>
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