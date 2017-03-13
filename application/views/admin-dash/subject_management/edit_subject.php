<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Subject Information <a href="<?=base_url()?>Admin/Subjects" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

      </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item">
          <div class="form-group">
            <div class="col-md-12">
              <h5>Please do some changes as you wish</h5>
            </div>
            <div class="col-md-12">
              <?php foreach ($subjects->result() as $key): ?>
                <form method="post" action="<?=base_url()?>Admin/Subjects/Edit/Submitted/<?=$key->subject_id?>">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Subject Code
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="subject_code" class="form-control" required value="<?=$key->subject_code?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label col-md-3">Year</label>
                        <div class="col-md-9">
                          <select class="form-control" required name="year">
                            <option value="1">First Year</option>
                            <option value="2">Second Year</option>
                            <option value="3">Third Year</option>
                            <option value="4">Fourth Year</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Subject Description
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="subject_desc" class="form-control" required value="<?=$key->subject_desc?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-md-3">Course</label>
                      <div class="col-md-9">
                        <select class="form-control" required name="course">
                          <option>< -- Select Course --></option>
                          <?php foreach ($courses->result() as $key): ?>
                            <option value="<?=$key->course_id?>"><?=$key->course_id?><?=$key->course_name?></option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Subject Semester
                      </label>
                      <div class="col-sm-9">
                      <select class="form-control" required name="semester">
                            <option value="1st">1st Semester</option>
                            <option value="2nd">2nd Semester</option>
                            <option value="Summer">3rd Semester</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label col-md-3">Subject Professor</label>
                        <div class="col-md-9">
                          <select name="faculty" class="form-control">
                            <?php foreach ($faculty->result() as $key): ?>
                              <option value="<?=$key->id?>"><?=$key->fac_lname.", ".$key->fac_fname." ".$key->fac_mname?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-raised btn-md pull-right">Submit</button>
                        <a href="<?=base_url()?>Admin/Subject" class="btn btn-default btn-raised btn-md pull-right">Cancel</a>
                      </div>
                    </div>
                  </div>
                </form>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <!-- /.item -->
      </div>
      <!-- /.box (chat box) -->
    </section>
  </div> 
</div>