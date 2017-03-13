<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="box-header">
      <i class="fa fa-comments-o"></i>

      <h3 class="box-title">Encoded Grades of <?=$faculty->row('fac_fname')." ".$faculty->row('fac_lname');?> 
        <form method="post" action="<?=base_url()?>Admin/Validation/Approve/<?=$faculty->row('id')?>">
          <button class="btn btn-success">Approve this grading</button>
          <a href="<?=base_url()?>/Admin/Validation" class="btn btn-warning">Not now.</a>
        </form>
      </h3>

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

                  <td><a href="<?=base_url()?>Faculty/Encode/<?=$value->student_id?>/<?=$value->subject_id?>" class="btn btn-link"><?=$value->fname." ".$value->mname." ".$value->lname?></a>
                  </td>
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
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.item -->
    </div>
  </section>
</div>

