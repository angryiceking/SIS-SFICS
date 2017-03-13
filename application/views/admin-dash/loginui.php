<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
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
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6 col-md-offset-3 thumbnail" style="margin-top:100px;">
          <form method="post" action="<?=base_url()?>Admin">
            <div class="form-group">
              <div class="col-md-12">
                <i class="mdi mdi-settings pull-right" style="font-size: 10em"></i>
                <i class="mdi mdi-account pull-right" style="font-size: 10em"></i>
              </div>
              <div class="col-md-12">
                <h4 class="text-right"><strong>Administrator</strong></h4>
                <hr/>
                <label class="col-md-3 control-label">Username</label>
                <div class="col-md-9">
                  <input type="text" name="username" class="form-control" placeholder="Admin username">
                </div>
              </div>
              <div class="col-md-12">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                  <input type="password" name="password" class="form-control" placeholder="Admin password">
                </div>
              </div>
              <div class="col-md-12" style="margin-bottom: 50px;">
                <br/>
                <button type="submit" class="col-md-3 col-md-offset-5 btn text-center">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>