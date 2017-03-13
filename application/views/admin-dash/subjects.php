<div class="row">
	<section class="col-lg-12 connectedSortable">
		<!-- Chat box -->
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-comments-o"></i>

				<h3 class="box-title">Subject List <a href="<?=base_url()?>Admin/Subjects/Add_Subjects"><i class="fa fa-plus"></i> Add New Subject</a></h3>
			</div>
			<div class="box-body chat" id="chat-box">
				<!-- chat item -->
				<div class="item">
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<td>Subject Name</td>
									<td>Subject Description</td>
									<td>Subject Professor</td>
									<td>Actions</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($subjects->result() as $key => $subj): ?>
									<tr>
										<td><?=$subj->subject_code?> (<?=$subj->sem_type?>)</td>
										<td><?=$subj->subject_desc?></td>
										<td><?=$subj->fac_lname.", ".$subj->fac_fname." ".$subj->fac_mname?></td>
										<td><a href="<?=base_url()?>Admin/Subjects/Edit/<?=$subj->subject_id?>"><i class="fa fa-edit"></i> Edit</a></td>
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