<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			See conversations of students and faculty.
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-9 thumbnail">
				<div class="col-md-12" style="margin-bottom: 150px;">
					<div class="col-md-12">
						<h4>Recent Chat History</h4>
						<?php foreach ($chats->result() as $msg): ?>
							<div class="media">
								<div class="media-left media-top">
									<a href="#">
										<img class="media-object img-circle" style="width: 30px; height:30px;" src="<?=base_url()?>contrata/ProfilePic/FPS.jpg" alt="...">
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading"><?=$msg->user?><small style="font-size: 12px; color: #000;"> <?=$msg->time?></small></h4>
									<?=$msg->message?><br/>
									<?=$msg->time?>
								</div>
								<hr>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>