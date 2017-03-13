<div class="row" style="margin-top: 50px;">
  <section class="col-lg-8 col-lg-offset-2 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Register your Information</h3>
      </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item">
          <div class="form-group">
            <div class="col-md-12">
              <h5>Are you a legitimate student of St. Francis? Fill up these information to register an account on the student portal</h5>
            </div>
            <div class="col-md-12">
              <form method="post" action="<?=base_url()?>Home/create_unverified_stud">
                <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h5>Student Info Section</h5>
                    </div>  
                  </div>
                  <input type="hidden" name="status" value="unverified">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3">* Student's Last Name:</label>
                      <div class="col-md-9">
                        <input type="text" name="lname" class="form-control" required placeholder="Last name">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3">* Student's First Name:</label>
                      <div class="col-md-9">
                        <input type="text" name="fname" class="form-control" required placeholder="First name">
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
                      <label class="control-label col-md-3">Student's Email:</label>
                      <div class="col-md-9">
                        <input type="email" name="email" class="form-control" required placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3">* Age:</label>
                      <div class="col-md-9">
                        <input type="text" name="age" class="form-control" required placeholder="Age">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3">* Contact Number:</label>
                      <div class="col-md-9">
                        <input type="number" name="contact" class="form-control" placeholder="Contact">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3">* Student's Address:</label>
                      <div class="col-md-9">
                        <input type="text" name="address" class="form-control" required placeholder="Address">
                      </div>
                    </div>  
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <h5>Course Section</h5>
                    </div>  
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label col-md-3">Section:</label>
                      <div class="col-md-9">
                        <select class="form-control" name="section">
                          <option><-- SELECT --></option>
                          <?php foreach ($sections->result() as $key): ?>
                            <option value="<?=$key->course_id?><?=$key->year_id?><?=$key->section_id?>">
                              <?=$key->course_name?> <?=$key->year_id?>-<?=$key->section_id?>
                            </option>
                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="modal fade conf" id="conf" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Create Student Account</h4>
                    </div>
                    <div class="modal-body">
                      <h5>Are you sure?</h5>
                      <button type="submit" class="btn btn-default btn-sm">Yes </button>
                      <button data-dismiss="modal" class="btn btn-default btn-sm">Cancel </button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
              <div class="modal-footer">
                <div class="col-md-12">
                  <div class="form-group text-right">
                    <br/>
                    <div class="col-md-12">
                      <div class="col-md-12">
                        <a href="#conf" data-toggle="modal" class="btn btn-sm btn-raised btn-success"><i class="mdi mdi-check"></i> <strong>Create</strong></a>
                        <a href="<?=base_url()?>" class="btn btn-sm btn-raised btn-default">Back</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.item -->
      </div>
      <!-- /.box (chat box) -->
    </section>
  </div> 
</div>