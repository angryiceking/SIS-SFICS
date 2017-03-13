<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Grading Module </h3>
        <h6 class="text-info">Encode the grades of your students here. <a href="<?=base_url()?>Faculty/Dashboard">Go back</a> </h6>
      </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="box-body chat" id="chat-box">
          <!-- chat item -->
          <div class="item"> 
            <div class="col-md-12">
              <?php foreach ($student->result() as $key): ?>
              <?php endforeach ?>
              <div class="col-md-12">
                Encoding grades for student <?=$key->fname." ".$key->mname." ".$key->lname?> of <?=$key->course_name?> <br/>
                Encoding grades for the subject <?=$key->subject_code." ".$key->subject_desc?>
              </div>
              <div class="col-md-8 col-md-offset-2">
              <form method="post" action="<?=base_url()?>Faculty/Encode/Submitted">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-md-3">Grade Type</label>
                      <div class="col-md-9">
                        <select class="form-control" name="grade_type">
                          <option value="prelim">Preliminaries</option>
                          <option value="midterm">Midterm</option>

                          <option value="prefinals">Pre Final</option>
                          <option value="finals">Final</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <input type="hidden" name="subject_id" value="<?=$key->subject_id?>">
                      <input type="hidden" name="student_id" value="<?=$key->student_id?>">
                      <label class="control-label col-md-3">Grade 
                      <h5>( please choose only one on the selection )</h5></label>
                      <div class="col-md-9">
                        <select class="form-control" name="grade">
                          <option value="5.0">5 - Failed</option>
                          <option value="4.0">4 - Incomplete</option>
                          <option value="3.0">3</option>
                          <option value="2.75">2.75</option>
                          <option value="2.50">2.50</option>
                          <option value="2.25">2.25</option>
                          <option value="2.0">2.0</option>
                          <option value="1.75">1.75</option>
                          <option value="1.50">1.50</option>
                          <option value="1.25">1.25</option>
                          <option value="1.0">1.0</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <button class="btn btn-default pull-right" type="submit">Encode</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.item -->
        </div>
      </div>
    </div>
  </section>
</div>