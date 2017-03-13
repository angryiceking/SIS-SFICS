<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Course Information <a href="<?=base_url()?>Admin/Courses" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

      </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item">
          <div class="form-group">
            <div class="col-md-12">
              <h5>Please do some changes as you wish</h5>
            </div>
            <div class="col-md-12">
              <?php foreach ($course->result() as $key): ?>
                <form method="post" action="<?=base_url()?>Admin/Courses/Edit/Submitted/<?=$key->course_id?>">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Course Name
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="course_name" class="form-control" value="<?=$key->course_name?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Course Description
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="course_desc" class="form-control" value="<?=$key->course_desc?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-raised btn-md pull-right">Submit</button>
                        <a href="<?=base_url()?>Admin/Course" class="btn btn-default btn-raised btn-md pull-right">Cancel</a>
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