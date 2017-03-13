<div class="row">
  <section class="col-lg-12 connectedSortable">
    <!-- Chat box -->
    <div class="box box-success">
      <div class="box-header">
        <i class="fa fa-comments-o"></i>

        <h3 class="box-title">Class Information <a href="<?=base_url()?>Admin/Classes" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

      </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item">
          <div class="form-group">
            <div class="col-md-12">
              <h5>Please do some changes as you wish</h5>
            </div>
            <div class="col-md-12">
              <?php foreach ($sections->result() as $key): ?>
                <form method="post" action="<?=base_url()?>Admin/Classes/RemoveSubject/Submitted/<?=$key->id?>">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label class="control-label col-sm-3">
                        Please choose subjects for this section.
                      </label>
                      <div class="col-sm-9">
                      <?php if ($subjects->result() == null): ?>
                        <h5>There seems to be no subjects yet in this class. <a href="<?=base_url()?>Admin/Classes/AddSubject/<?=$key->id?>" class="btn btn-link">Click here to add.</a></h5>
                      <?php else: ?>
                        <?php foreach ($subjects->result() as $value): ?>
                          <div class="checkbox">
                           <input type="checkbox" name ="subj[]" value="<?=$value->subject_id?>"><?=$value->subject_code." - ".$value->subject_desc?> <br/>
                         </div>
                       <?php endforeach ?>
                      <?php endif ?>
                     </div>
                   </div>
                   <div class="col-md-12">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-default btn-raised btn-md pull-right">Submit</button>
                      <a href="<?=base_url()?>Admin/Classes" class="btn btn-default btn-raised btn-md pull-right">Cancel</a>
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