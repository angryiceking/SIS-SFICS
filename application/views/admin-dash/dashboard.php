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
            <a href="<?=base_url()?>Admin/Students" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
              <h3><?=count($unreg->result())?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url()?>Admin/Students/Unverified" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=count($faculty->result())?></h3>

              <p>Faculty</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?=base_url()?>Admin/Faculty" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Student List</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Add student">
                <div class="btn-group" data-toggle="btn-toggle">
                  <a href="#" data-toggle="modal" data-target="#create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <div class="table-responsive">
                  <table class="table table-bordered" id="table">
                    <thead>
                      <tr>
                        <td>Student #</td>
                        <td>Student Name:</td>
                        <td>Student Contact:</td>
                        <td>Student Address:</td>
                        <td>Student Email:</td>
                        <td>Actions</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($students->result() == null): ?>
                        <h5>Nothing to show</h5>
                      <?php else: ?>
                        <?php foreach ($students->result() as $key): ?>
                          <?php if ($key->status == 'active'): ?>
                            <tr class="active">
                            <?php elseif($key->status == 'locked'): ?>
                              <tr class="danger">
                              <?php endif ?>
                              <td><?=$key->studnum?></td>
                              <?php if ($key->status == 'active'): ?>
                                <td style="color: green;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
                              <?php elseif($key->status == 'locked'): ?>
                                <td style="color: orange;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
                              <?php elseif($key->status == 'archived'): ?>
                                <td style="color: red;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
                              <?php endif ?>
                              <td>
                                <?php if ($key->contact != 0): ?>
                                  +63<?=$key->contact?>
                                <?php else: ?>

                                <?php endif ?></td>
                                <td><?=$key->address?></td>
                                <td><small><?=$key->email?></small></td>
                                <td>
                                  <!-- Update -->
                                  <a href="<?=base_url()?>Admin/Student/Edit/<?=$key->student_id?>" data-placement="left" title="Update" class="btn btn-sm btn-primary"><i class="mdi mdi-update"></i></a>

                                </td>
                              </tr>

                              <div class="modal fade lock" id="lock" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Lock Student Account</h4>
                                    </div>
                                    <div class="modal-body">
                                      <h5>This action will lock the student account.</h5>
                                      <h6>Once you do this, the student will be unable to access his/her account.</h6>
                                      <a href="<?=base_url()?>Admin/Students/Lock/<?=$key->student_id?>" class="btn btn-default btn-sm"> Ok, I understand the consequences. <?=$key->student_id?></a>
                                    </div>
                                  </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                              </div><!-- /.modal -->

                              <div class="modal fade unlock" id="unlock" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Unlock Student Account</h4>
                                    </div>
                                    <div class="modal-body">
                                      <h5>This action will unlock the student account.</h5>
                                      <h6>Once you do this, the student will regain access his/her account.</h6>
                                      <a href="<?=base_url()?>Admin/Students/Unlock/<?=$key->student_id?>" class="btn btn-default btn-sm"> Ok, I understand the consequences. <?=$key->student_id?></a>
                                    </div>
                                  </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                              </div><!-- /.modal -->

                              <div class="modal fade archive" id="archive" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Archive Student Account</h4>
                                    </div>
                                    <div class="modal-body">
                                      <h5>This action will archive the student account.</h5>
                                      <h6>Once you do this, the student will be transferred to archive.</h6>
                                      <a href="<?=base_url()?>Admin/Students/Archive/<?=$key->student_id?>" class="btn btn-default btn-sm"> Yes, I know.</a>
                                    </div>
                                  </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                              </div><!-- /.modal -->
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
                        <div class="col-sm-12">
                          <div class="col-sm-12">
                            <h4>No news published yet, add some.</h4>
                          </div>
                        </div>
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
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label col-sm-5">Input the details</label>
                            <div class="col-sm-7">
                            <textarea rows="10" name="details" class="form-control"></textarea>
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
                    <hr>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <div class="col-sm-12">
                          <br/>
                          <hr>
                          <h4>Upload Frontpage Video</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <form method="post" enctype="multipart/form-data" action="<?=base_url()?>Admin_Dashboard/upload_video">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label col-sm-5">Upload Frontpage Video</label>
                            <div class="col-sm-7">
                              <input type="file" name="videofile" class="form-control">
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
