<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$courses->row('fac_lname')."-".$courses->row('fac_fname')."-gradingsheet-".date('Y-m-d h:i:s').".xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table id="table">
					<thead>
						<tr>
							<td>Student ID</td>
							<td>Student Name</td>
							<td>Section</td>
							<td>Subject</td>
							<td>Course Name</td>
							<td>Course Description</td>
							<td>Preliminaries Grade</td>
							<td>Midterm Grade</td>
							<td>Prefinals Grade</td>
							<td>Final Grade</td>
							<td>Average Grade</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($courses->result() as $key => $value): ?>
							<tr>
								<td><?=$value->studnum?></td>
								<?php if ($value->final_grade != null): ?>
									<td>
										<?=$value->fname." ".$value->mname." ".$value->lname?>
									</td>
								<?php else: ?>
									<td>
										<?=$value->fname." ".$value->mname." ".$value->lname?>
									</td>
								<?php endif ?>
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
								<?php if ($value->prelim != null && $value->midterm != null && $value->prefinals != null && $value->finals != null): ?>
									<?php if ($value->final_grade != null): ?>
										<td><?=$value->final_grade?></td>
									<?php else: ?>
										<td>
											Average Not Yet Computed
										</td>
									<?php endif ?>
								<?php endif ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>