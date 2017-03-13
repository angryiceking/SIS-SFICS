    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <?php if ($validation->row('status') == 'notval'): ?>
              <div class="inner">
                <h3>Validate</h3>

                <p>Validate my Gradings.</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?=base_url()?>Faculty/ValidateGrades/<?=$this->session->fac_id?>" class="small-box-footer">Click to submit <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          <?php elseif($validation->row('status') == 'submitted'): ?>
            <div class="inner">
              <h3>In Progress</h3>

              <p>Validation Submitted.</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a  href="#" class="small-box-footer">Please wait for the result </a>
          </div>
        <?php else: ?>
          <div class="inner">
            <h3>Validated</h3>
            <p>My gradings are validated</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?=base_url()?>Faculty/ValidateGrades/<?=$this->session->fac_id?>" class="small-box-footer">Click to resubmit <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      <?php endif ?>
    </div>
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

          <h3 class="box-title">
            My Subjects
            <small style="font-size: 15px;">
              <a href="<?=base_url()?>Faculty_Dashboard/ExportCSV" class="btn btn-success"> Export Grades (.xlsx format) </a>
            </small>
          </h3>


        </div>
        <div class="box-body chat" id="chat-box">
          <!-- chat item -->
          <div class="row">
            <?php foreach ($subjects->result() as $key): ?>
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3><?=$key->subject_code?><sup style="font-size: 20px"></sup></h3>
                    <p><?=$key->subject_desc?></p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?=base_url()?>Faculty/MySubject/<?=$key->subject_id?>" class="small-box-footer">See students <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <!-- /.item -->
        </div>
        <!-- /.box (chat box) -->
      </section>
      <!-- /.Left col -->
      <!-- right col -->
      
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>