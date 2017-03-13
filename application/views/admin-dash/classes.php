<div class="row">
	<section class="col-lg-12 connectedSortable">
		<!-- Chat box -->
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-comments-o"></i>

				<h3 class="box-title">Section List <a href="#" data-target="#add_class" data-toggle="modal"><i class="fa fa-plus"></i> Add New Section</a></h3>
				<h6 class="text-info">Note: you can assign the students in their class at <a href="#">Assigners Module</a> </h6>
			</div>
			<div class="box-body chat" id="chat-box">
				<!-- chat item -->
				<div class="item">
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<td>Year and Section</td>
									<td>Subjects</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($sections->result() as $key): ?>
									<tr>
										<td><?=$key->course_name?> <?=$key->year_id?>-<?=$key->section_id?></td>
										<td>
											<?php
											$section_id = $key->sec_id;
											?>
											
											<a href="<?=base_url()?>Admin/Classes/AddSubject/<?=$section_id?>" class="btn btn-default">Add subjects</a> 
											<br/>
											<?php foreach ($subjects->result() as $val): ?>
												<?php if ($val->class_id == $section_id): ?>
													<?=$val->subject_code?>
												<?php endif ?>

											<?php endforeach ?>
											<?php if ($subjects->result() != null): ?>
												<br/>
												<a href="<?=base_url()?>Admin/Classes/RemoveSubject/<?=$section_id?>" class="btn btn-danger">
													Remove Subjects
												</a>
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
			<!-- /.box (chat box) -->
		</section>
	</div>

	<div class="modal fade add_class" id="add_class" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add new class</h4>
				</div>
				<div class="modal-body">
					<h5>Please input the class name and other information</h5>
					<form method="post" action="<?=base_url()?>Admin_Dashboard/add_class">
						<div class="col-md-12">
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label col-md-3">Year</label>
									<div class="col-md-9">
										<select class="form-control" name="year">
											<option><-- SELECT --></option>
											<option value="1">First Year</option>
											<option value="2">Second Year</option>
											<option value="3">Third Year</option>
											<option value="4">Fourth Year</option>
										</select>
									</div>
								</div>
							</div><div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">Section</label>
								<div class="col-md-9">
									<select class="form-control" name="section">
										<option><-- SELECT --></option>
										<option value="1">Section 1</option>
										<option value="2">Section 2</option>
										<option value="3">Section 3</option>
										<option value="4">Section 4</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">Course</label>
								<div class="col-md-9">
									<select class="form-control" name="course">
										<option>< -- Select Course --></option>
										<?php foreach ($courses->result() as $key): ?>
											<option value="<?=$key->course_id?>"><?=$key->course_name?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-md-12">
						<div class="form-group text-right">
							<button class="btn btn-sm btn-raised btn-success"><i class="mdi mdi-check"></i> <strong>Create</strong></button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->