<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Students Information <a href="<?=base_url()?>Admin/Dashboard" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

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
          <div class="form-group">
            <div class="col-md-12">
              <h5>Please do some changes as you wish</h5>
            </div>
            <div class="col-md-12">
              <?php foreach ($students->result() as $key): ?>
                <form method="post" action="<?=base_url()?>Admin/Students/Edit/Submitted/<?=$key->student_id?>">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        First Name:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fname" class="form-control" value="<?=$key->fname?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Last Name:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="lname" class="form-control" value="<?=$key->lname?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Middle Name:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="mname" class="form-control" value="<?=$key->mname?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Email
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="email" class="form-control" value="<?=$key->email?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Address
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" value="<?=$key->address?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Contact
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="contact" class="form-control" value="<?=$key->contact?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-raised btn-md pull-right">Submit</button>
                        <a href="<?=base_url()?>Admin/Dashboard" class="btn btn-default btn-raised btn-md pull-right">Cancel</a>
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