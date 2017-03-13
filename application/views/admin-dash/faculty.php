<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Faculty List <a href="<?=base_url()?>Admin/Faculty/Add/Faculty"><i class="fa fa-plus"></i> Add Faculty</a></h3>

      </div>

      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        
        <div class="item">
          <div class="table-responsive">
            <table class="table table-bordered" id="table">
              <thead>
                <tr>
                  <td>Faculty ID</td>
                  <td>Username</td>
                  <td>Faculty Name:</td>
                  <td>Email</td>
                  <td>Faculty Contact:</td>
                  <td>Faculty Address:</td>
                  <td>Subjects</td>
                  <td>Edit</td>
                </tr>
              </thead>
              <tbody>
                <?php if ($faculty->result() == null): ?>
                  <h5>Nothing to show</h5>
                <?php else: ?>
                  <?php foreach ($faculty->result() as $key): ?>
                    <tr>
                      <td><?=$key->id?></td>
                      <td><?=$key->username?></td>
                      <td style="color: green;"><?=$key->fac_lname.", ".$key->fac_fname." ".$key->fac_mname?></td>
                      <td><?=$key->fac_email?></td>
                      <td>+63<?=$key->fac_contact?></td>
                      <td><?=$key->fac_address?></td>
                      <?php
                      $id = $key->id
                      ?>
                      <td>
                        <?php foreach ($subjects->result() as $subj): ?>
                          <?php if ($id == $subj->faculty_id): ?>
                            <small>
                              <?=$subj->subject_code?>
                            </small>
                          <?php endif ?>
                        <?php endforeach ?>
                      </td>
                      <td><a href="<?=base_url()?>Admin/Edit/Faculty/<?=$key->id?>"><i class="fa fa-edit"></i> Edit</a></td>
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
            <input class="form-control" placeholder="Search faculty...">

            <div class="input-group-btn">
              <button type="button" class="btn btn-success"><i class="fa fa-search"></i></button>
            </div>
          </div>

        </div>
      </div>
      <!-- /.box (chat box) -->
    </section>
  </div>
</div>