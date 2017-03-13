<div class="row">
	<section class="col-lg-12 connectedSortable">
		<!-- Chat box -->
		<div class="box box-success"  style="margin-bottom: 150px;">
			<div class="box-header">
				<i class="fa fa-comments-o"></i>

				<h3 class="box-title">Courses List <a href="#" data-target="#add_course" data-toggle="modal"><i class="fa fa-plus"></i> Add New Course</a></h3>
			</div>
			<div class="box-body chat" id="chat-box">
				<!-- chat item -->
				<div class="item">
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<td>Course Name</td>
									<td>Course Description</td>
									<td>Subjects</td>
									<td>Actions</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($courses->result() as $key => $value): ?>
									<tr>
										<td><?=$value->course_name?></td>
										<td><?=$value->course_desc?></td>
										<?php $id = $value->course_id; ?>
										<td><?php if ($subjects->result() == null): ?>
											no subject yet
										<?php else: ?>
											<?php foreach ($subjects->result() as $key): ?>
												<?php if ($id == $key->course_id): ?>
													<?=$key->subject_code?>
												<?php else: ?>

												<?php endif ?>
											<?php endforeach ?>
										</td>
										<td>
											<a href="<?=base_url()?>Admin/Courses/Edit/<?=$key->course_id?>"><i class="fa fa-edit"></i> Edit</a>
										</td>
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
	</div>
	<!-- /.box (chat box) -->
</section>
</div>