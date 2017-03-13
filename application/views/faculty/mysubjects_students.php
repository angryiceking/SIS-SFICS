    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">My Students</h3>

            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <div class="table-responsive">
                  <table class="table table-bordered" id="table">
                    <thead>
                      <tr>
                        <td>Status</td>
                        <td>Student</td>
                        <td>Section</td>
                        <td>Subject</td>
                        <td>Course Name</td>
                        <td>Course Description</td>
                        <td>Prelim</td>
                        <td>Midterm</td>
                        <td>Pre Finals</td>
                        <td>Finals</td>
                        <td>Average</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($courses->result() as $key => $value): ?>
                        <tr>
                          <?php if ($value->prelim == null && $value->midterm == null && $value->prefinals == null && $value->finals == null): ?>
                            <td class="text-warning"><strong>Not yet graded. </strong></td>
                          <?php else: ?>
                            <td class="text-success"><strong>Graded!</strong></td>
                          <?php endif ?>

                          <?php if ($value->final_grade != null): ?>
                            <td>
                              <h5 class="btn"><?=$value->fname." ".$value->mname." ".$value->lname?></h5>
                            </td>
                          <?php else: ?>
                            <td>
                              <a href="<?=base_url()?>Faculty/Encode/<?=$value->student_id?>/<?=$value->subject_id?>" class="btn btn-link"><?=$value->fname." ".$value->mname." ".$value->lname?></a>
                            </td>
                          <?php endif ?>
                          <td><?=$value->course_name." ".$value->stud_year_id."-".$value->section_id?></td>
                          <td><?=$value->subject_code." ".$value->subject_desc?></td>
                          <td><?=$value->course_name?></td>
                          <td><?=$value->course_desc?></td>
                          <td>
                            <?php if (isset($value->prelim)): ?>
                              <?=$value->prelim?>
                            <?php else: ?>

                            <?php endif ?>
                          </td>
                          <td>
                            <?php if (isset($value->midterm)): ?>
                              <?=$value->midterm?>
                            <?php else: ?>

                            <?php endif ?>
                          </td>
                          <td>
                            <?php if (isset($value->prefinals)): ?>
                              <?=$value->prefinals?>
                            <?php else: ?>

                            <?php endif ?>
                          </td>
                          <td>
                            <?php if (isset($value->finals)): ?>
                              <?=$value->finals?>
                            <?php else: ?>

                            <?php endif ?>
                          </td>
                          <?php if ($value->prelim != null && $value->midterm != null && $value->prefinals != null && $value->finals != null): ?>
                            <?php if ($value->final_grade != null): ?>
                              <td><?=$value->final_grade?></td>
                            <?php else: ?>
                              <td>
                                <a href="<?=base_url()?>Faculty/Average/<?=$value->prelim?>/<?=$value->midterm?>/<?=$value->prefinals?>/<?=$value->finals?>/<?=$value->subject_id?>/<?=$value->student_id?>" class="btn btn-success">Compute Ave</a>
                              </td>
                            <?php endif ?>
                          <?php endif ?>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.item -->
            </div>
            <!-- /.box (chat box) -->
          </section>
          <!-- /.Left col -->
          <!-- right col -->

        </div>
        <!-- /.row (main row) -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
