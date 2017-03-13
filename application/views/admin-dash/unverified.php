<div class="row">
	<section class="col-lg-12 connectedSortable">
		<!-- Chat box -->
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-comments-o"></i>

				<h3 class="box-title">Student List with their individual subjects</h3>

				<div class="box-tools pull-right" data-toggle="tooltip" title="Add student">
					<div class="btn-group">
						<a href="<?=base_url()?>Admin/Students/Add/Student" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="box-body chat" id="chat-box">
				<!-- chat item -->
				<div class="item">
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<td>Student #</td>
									<td>Student Name:</td>
									<td>Student Email:</td>
									<td>Actions</td>
								</tr>
							</thead>
							<tbody>
								<?php if ($students->result() == null): ?>
									<h5>Nothing to show</h5>
								<?php else: ?>
									<?php foreach ($students->result() as $key => $value): ?>
										<div class="modal fade lock" id="lock" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Lock Student Account</h4>
													</div>
													<div class="modal-body">
														<h5>This action will locks the student account.</h5>
														<h6>Once you do this, the student will be unable to access his/her account.</h6>
														<a href="<?=base_url()?>Admin/Students/Lock/<?=$value->id?>" class="btn btn-default btn-sm"> Ok, I understand the consequences. </a>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->
										<div class="modal fade unlock" id="unlock" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-connulltent">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Unlock Student Account</h4>
													</div>
													<div class="modal-body">
														<h5>This action will unlock the student account.</h5>
														<h6>Once you do this, the student will regain access his/her account.</h6>
														<a href="<?=base_url()?>Admin/Students/Unlock/<?=$value->id?>" class="btn btn-default btn-sm"> Ok, I understand the consequences.</a>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->

										<div class="modal fade archive" id="archive" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Archive Student Account</h4>
													</div>
													<div class="modal-body">
														<h5>This action will archive the student account.</h5>
														<h6>Once you do this, the student will be transferred to archive.</h6>
														<a href="<?=base_url()?>Admin/Students/Archive/<?=$value->id?>" class="btn btn-default btn-sm"> Yes, I know.</a>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->
										<?php if ($value->status == 'active'): ?>
											<tr class="active">
											<?php elseif($value->status == 'locked'): ?>
												<tr class="danger">
												<?php endif ?>
												<td><?=$value->studnum?></td>
												<td><?=$value->username."<br/>".$value->password?></td>
												<?php if ($value->status == 'active'): ?>
													<td style="color: green;"><?=$value->lname.", ".$value->fname." ".$value->mname?></td>
												<?php elseif($value->status == 'locked'): ?>
													<td style="color: orange;"><?=$value->lname.", ".$value->fname." ".$value->mname?></td>
												<?php elseif($value->status == 'archived'): ?>
													<td style="color: red;"><?=$value->lname.", ".$value->fname." ".$value->mname?></td>
												<?php endif ?>
												<td><small><?=$value->email?></small></td>
												<td>
													<!-- Update -->
													<a href="<?=base_url()?>Admin/Students/Verify/<?=$value->student_id?>" data-placement="left" title="Update" class="btn btn-sm btn-primary"><i class="mdi mdi-update"></i> Verify Student </a>


													<!-- Archive -->
													<!-- <a href="#archive" class="btn btn-sm btn-danger" data-toggle="modal" data-placement="left" title="Archive"><i class="mdi mdi-archive"></i></a> -->
												</td>
											</tr>

											
										<?php endforeach ?>
									<?php endif ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /.item -->
				</div>
				<!-- /.box (chat box) -->
			</section>
		</div>