<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Grades
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-12">
				<div class="col-md-12" style="margin-bottom: 150px;">
					<div class="col-md-12">
						<h4>Student Grading Module.</h4>
						<?php if ($grades->result() != null): ?>
							<?php
							$ab = 0;
							$total = 0;
							$counter = 0;
							$determiner = 3;
							?>
							<?php $count = 0;?>
							<?php $average = 0;?>
							<?php $av = 0?>
							<?php foreach ($grades->result() as $a): ?>
								<?php if ($a->prelim != null && $a->midterm != null && $a->prefinals != null && $a->finals != null): ?>
									
									<?php $total = $a->prelim + $a->midterm + $a->prefinals + $a->finals; ?>
									<?php $av = $total / 4;?>
									<?php $count += 1;?>
								<?php else: ?>

								<?php endif ?>

								<?php $average += $av?>
							<?php endforeach ?>
							<?php if ($average != 0): ?>
								<?php if ($average/$count < 3): ?>
									<?php $passer = 'Regular'; ?>
								<?php else: ?>
									<?php $passer = 'Warning'; ?>
								<?php endif ?>
							<?php endif ?>
						<?php endif ?>
						<div class="col-md-12">
						</div>
						<section class="col-lg-12 connectedSortable">
							<!-- Chat box -->
							<div class="box box-success">
								<div class="box-header">
									<div class="col-md-6">
										<h5>Student: <strong><?=$a->lname." ".$a->fname." ".$a->mname?></strong><br/>
											Semester: <strong><?=$a->sem_type?> Semester</strong><br/>
											GWA:  
											<?php if ($average != 0): ?>
												<strong><?=$average/$count;?> (<?=$passer?>)</strong>
											<?php else: ?>
												<strong>Waiting</strong>
											<?php endif ?>
										</h5>
									</div>
									<div class="col-md-6">
										<h5 class="text-right">Year and Section: <strong><?=$a->course_name." ".$a->stud_year_id."-".$a->section_id?></strong><br/>
											<a href="<?=base_url()?>Student/print_pdf" class="btn btn-link">Print form</a>
										</h5>
									</div>
								</div>
								<div class="box-body chat" id="chat-box">
									<!-- chat item -->
									<div class="item">
										<div class="table-responsive">
											<table class="table table-stripped">
												<thead>
													<tr>
														<td>Subject Code</td>
														<td>Subject Description</td>
														<td>Subject Course</td>
														<td>Section</td>
														<td>Professor</td>
														<td>Final Grade</td>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($student->result() as $s => $nval): ?>
														<tr>
															<?php $ar[$s] = $nval->subject_id;?>
															<td><?=$nval->subject_code?></td>
															<td><?=$nval->subject_desc?></td>
															<td><?=$nval->course_desc?></td>
															<td><?=$nval->course_name?> <?=$nval->year_id."-".$nval->section_id?></td>
															<td><?=$nval->fac_lname." ".$nval->fac_fname." ".$nval->fac_mname?></td>
															<?php if ($nval->status == 'submitted' || $nval->status == 'notval'): ?>
															<?php else: ?>
																<?php foreach ($grades->result() as $key => $value): ?>
																	<?php if ($value->student_id == $nval->student_id && $value->subject_id == $nval->subject_id): ?>
																		<?php if ($value->final_grade != null): ?>
																			<td><?=$value->final_grade?></td>
																		<?php else: ?>
																			<td></td>
																		<?php endif ?>
																	<?php endif ?>
																<?php endforeach ?>
															<?php endif ?>
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
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>