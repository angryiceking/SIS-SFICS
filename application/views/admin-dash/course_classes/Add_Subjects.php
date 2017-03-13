<div class="row">
	<section class="col-lg-12 connectedSortable">
		<!-- Chat box -->
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-comments-o"></i>

				<h3 class="box-title">Add Subject<a href="<?=base_url()?>Admin/Subjects" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

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
							<form method="post" action="<?=base_url()?>Admin_Dashboard/add_subject">
								<div class="col-md-12">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">Subject Course</label>
											<div class="col-md-9">
												<select name="course" class="form-control">
													<option><-- SELECT --></option>
													<?php foreach ($courses->result() as $val): ?>
														<option value="<?=$val->course_id?>"><?=$val->course_name?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">Subject Code</label>
											<div class="col-md-9">
												<input type="text" name="subject_code" class="form-control" required placeholder="Subject Code">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">Subject Description</label>
											<div class="col-md-9">
												<input type="text" name="subject_desc" class="form-control" required placeholder="Subject Description">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">Subject Semester</label>
											<div class="col-md-9">
												<select class="form-control" name="semester">
													<option value="1st">1st Semester</option>
													<option value="2nd">2nd Semester</option>
													<option value="Summer">Summer</option>
												</select>
											</div>
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
													<a href="<?=base_url()?>Admin/Students" class="btn btn-sm btn-raised btn-default">Back</a>
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