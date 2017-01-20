<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
              <span class="hidden-xs">Paolo Concha</span>
            </a>
            <ul class="dropdown-menu" id="asd">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/img/bg.jpg" class="img-circle" alt="User Image">
                <p>
                  Paolo Concha
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <p>Paolo Concha</p>
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
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Student </a></li>
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Changelogs </a></li>
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

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=count($students->result())?></h3>

              <p>Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=count($news->result())?><sup style="font-size: 20px"></sup></h3>

              <p>News</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Blah blah</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Student List</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td>Student #</td>
                        <td>Student Name:</td>
                        <td>Student Contact:</td>
                        <td>Student Address:</td>
                        <td>Prelim Grade:</td>
                        <td>Midterm Grade:</td>
                        <td>Finals Grade:</td>
                        <td>Average:</td>
                        <td>Actions</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($students->result() == null): ?>
                        <h5>Nothing to show</h5>
                      <?php else: ?>
                        <?php foreach ($students->result() as $key): ?>
                          <tr>
                            <td><?=$key->studnum?></td>
                            <?php if ($key->status == 'active'): ?>
                              <td style="color: green;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
                            <?php elseif($key->status == 'locked'): ?>
                              <td style="color: orange;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
                            <?php elseif($key->status == 'archived'): ?>
                              <td style="color: red;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
                            <?php endif ?>
                            <td>+63<?=$key->contact?></td>
                            <td><?=$key->address?></td>
                            <td><small>TBE</small></td>
                            <td><small>TBE</small></td>
                            <td><small>TBE</small></td>
                            <td><small>TBE</small></td>
                            <td>
                              <a href="#" data-toggle="modal" data-target="#create" class="btn btn-success btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
                              <!-- Update -->
                              <a href="#update" data-toggle="modal" data-placement="left" title="Update" class="btn btn-sm btn-primary"><i class="mdi mdi-update"></i></a>

                              <!-- Lock -->
                              <a href="#lock" data-toggle="modal" data-placement="left" title="Archive" class="btn btn-sm btn-warning"><i class="mdi mdi-lock"></i></a>

                              <!-- Archive -->
                              <a href="#archive" class="btn btn-sm btn-danger" data-toggle="modal" data-placement="left" title="Lock"><i class="mdi mdi-archive"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      <?php endif ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.item -->
              <div class="box-footer">
                <div class="input-group">
                  <input class="form-control" placeholder="Search student...">

                  <div class="input-group-btn">
                    <button type="button" class="btn btn-success"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box (chat box) -->
          </section>
          <!-- /.Left col -->
          <section class="col-lg-5 connectedSortable">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">News & Events Publisher</h3>
              </div>
              <div class="box-body">
                <h6>This section provides the basic function of adding news, events, and other information regarding on what's happening to the school. <br/> So that said, are there future events happening to the school? or you want to share something? you can publish it here!</h6>
                <div class="list" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                  <?php if ($news->result() == null): ?>
                    <h4>No news published yet, add some.</h4>
                  <?php else: ?>
                    <?php foreach ($news->result() as $key): ?>
                      <div>
                        <img data-lazy="<?=base_url()?>assets/news/<?=$key->img?>" class="img-responsive center-block" style="width: 150px; height: 188px;">
                        <div>
                          <h6 class="text-center"><?=$key->desc?></h6>
                        </div>
                      </div>
                    <?php endforeach ?>
                  <?php endif ?>
                </div>
                <div class="col-sm-12">
                  <form method="post" enctype="multipart/form-data" action="<?=base_url()?>Admin_Dashboard/upload_news">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="control-label col-sm-5">Upload Frontpage Photo</label>
                        <div class="col-sm-7">
                          <input type="file" name="userfile" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <br/>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="control-label col-sm-5">Input some description!</label>
                        <div class="col-sm-7">
                          <input type="text" name="desc" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <br/>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <div class="col-sm-12">
                          <br/>
                          <button class="btn btn-raised btn-sm center-block">Publish</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
            <!-- right col -->
            <section class="col-lg-7 connectedSortable">
              <div class="box box-info">
                <div class="box-header">
                  <h3>Changelogs</h3>
                </div>
                <div class="box-body">
                  <h6>To keep track of our development, yes we did some changelogs!</h6>
                  <div class="col-md-12">
                    <h5>version 0.0.1 | <small style="color: #000">December 18, 2016</small></h5>
                    <small style="color: #000;"><strong>What functions did we add?</strong></small>
                    <h6>
                      Added admin dashboard. <br/>
                      Created an admin dashboard.<br/>
                      Redesigned and fixed the frontend of the login page. <br/>
                      Added a function on admin. creating account. <br/>
                      Added a function on admin. publish news. <br/>
                      Added a function on admin. view news. <br/>
                      Added a backend logic that automatically generates username and student number. <br/>
                      Initially Designed the layout of admin dashboard. Still a prototype. <br/>
                      Integration of modals on buttons. <br/>
                      Lot of UI/UX improvements. <br/>
                      Added a feature on student lounge. viewing published news. <br/>
                      Added a functionality on student lounge, editing profile. <br/>
                      Designed the prototype for student profile, subject to change. <br/>
                      Students can now view their respective account information, on a certain page. <br/>
                      Students can now edit their respeective information. <br/>
                      Fixed the landing page of the student lounge for students. <br/>
                    </h6>

                    <small style="color: #000;"><strong>What are your plans?</strong></small>
                    <h6>
                      Fix the profile of students, add profile pictures.<br/>
                      Fix UI of admin, let it have some sidebar. <br/>
                      Fix the update system. <br/>
                      Fix the student status system. <br/>
                      Fix autocomplete search. <br/>
                      Fix update button getting the wrong information on students. <br/>
                      Fix Archiving Account. <br/>
                      Fix Locking/Unlocking Account. <br/>
                      Fix Encoding of Grade. <br/>
                      Fix Teacher-Student ERD. <br/>
                      Fix some frontend layouts. <br/>
                      Use ajax tech on some parts of the website. <br/>
                      Add live chat to chat other students. (this is hard.) <br/>
                    </h6>
                  </div>
                  <div class="box-footer">
                    <div class="input-group">
                      <input class="form-control" placeholder="Add changes..">
                      <div class="input-group-btn">
                        <select class="form-control">
                          <option>Change</option>
                          <option>Plan</option>
                        </select>
                      </div>
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-success"><i class="fa fa-search"></i></button>
                      </div>
                    </div>

                  </div>
                </section>
              </div>
              <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 2.3.7
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
            reserved.
          </footer>

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Home tab content -->
              <div class="tab-pane" id="control-sidebar-home-tab">
                <!-- /.control-sidebar-menu -->
              </div>
              <!-- /.tab-pane -->
            </div>
          </aside>
          <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- Create Account Modal -->
<div class="modal fade create" id="create" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create Student Account</h4>
      </div>
      <div class="modal-body">
        <h5>Input the information.</h5>
        <h6>* Important fields, do not leave empty.</h6>
        <form method="post" action="<?=base_url()?>Admin_Dashboard/create_stud">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label col-md-3">* Student's Last Name:</label>
                <div class="col-md-9">
                  <input type="text" name="lname" class="form-control" placeholder="Last name">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label col-md-3">* Student's First Name:</label>
                <div class="col-md-9">
                  <input type="text" name="fname" class="form-control" placeholder="First name">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label col-md-3">Student's Middle Name:</label>
                <div class="col-md-9">
                  <input type="text" name="mname" class="form-control" placeholder="Middle name">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label col-md-3">* Age:</label>
                <div class="col-md-9">
                  <input type="text" name="age" class="form-control" placeholder="Age">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label col-md-3">* Contact Number:</label>
                <div class="col-md-9">
                  <input type="text" name="contact" class="form-control" placeholder="Contact">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label col-md-3">* Student's Address:</label>
                <div class="col-md-9">
                  <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
              </div>  
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="col-md-12">
            <div class="form-group text-right">
              <button class="btn btn-sm btn-raised btn-success"><i class="mdi mdi-check"></i> <strong>Create</strong></button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
