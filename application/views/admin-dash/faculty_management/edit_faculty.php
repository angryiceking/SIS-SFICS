<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Faculty Information <a href="<?=base_url()?>Admin/Faculty" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

      </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item">
          <div class="form-group">
            <div class="col-md-12">
              <h5>Please do some changes as you wish</h5>
            </div>
            <div class="col-md-12">
              <?php foreach ($faculty->result() as $key): ?>
                <form method="post" action="<?=base_url()?>Admin/Faculty/Edit/Submitted/<?=$key->id?>">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        First Name:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fac_fname" class="form-control" value="<?=$key->fac_fname?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Last Name:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fac_lname" class="form-control" value="<?=$key->fac_lname?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Middle Name:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fac_mname" class="form-control" value="<?=$key->fac_mname?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Email
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fac_email" class="form-control" value="<?=$key->fac_email?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Address
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fac_address" class="form-control" value="<?=$key->fac_address?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Contact
                      </label>
                      <div class="col-sm-9">
                        <input type="text" name="fac_contact" class="form-control" value="<?=$key->fac_contact?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-default btn-raised btn-md pull-right">Submit</button>
                        <a href="<?=base_url()?>Admin/Faculty" class="btn btn-default btn-raised btn-md pull-right">Cancel</a>
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