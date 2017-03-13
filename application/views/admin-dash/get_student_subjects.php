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
					<?php foreach ($grades->result() as $key): ?>
						<tr>
							<td><?=$key->subject_code?></td>
							<td><?=$key->subject_desc?></td>
							<td><?=$key->course_name?></td>
							<td><?=$key->course_name?> <?=$key->year_id."-".$key->section_id?></td>
							<td><?=$key->fac_lname." ".$key->fname." ".$key->mname?></td>
							<?php if ($key->grade != null): ?>
								<td><?=$key->grade?>.00 <small class="text-success">(<?=$key->grade_type?>)</small></td>
							<?php else: ?>
								<td></td>
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