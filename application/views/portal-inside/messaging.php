<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Message Faculty Members
		</h1>
	</section>
	<?php foreach ($student->result() as $stud): ?>
		
	<?php endforeach ?>
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-9 thumbnail">
				<div class="col-md-12" style="margin-bottom: 150px;">
					<div class="col-md-12">
						<form method="post" action="<?=base_url()?>Student/Send">
							<div class="form-group">
								<div class="col-md-12">
									<h4>Choose Faculty to message</h4>
									<select class="form-control" required name="faculty">
										<option></option>
										<?php foreach ($faculty->result() as $key): ?>
											<option value="<?=$key->id?>"><?=$key->fac_fname." ".$key->fac_mname." ".$key->fac_lname?></option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="col-md-12">
									<textarea class="form-control" required name="message" rows="8"></textarea>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-default pull-right">Send Message</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-12">
						<h4>Recent Chat History</h4>
						<?php foreach ($chats->result() as $msg): ?>
							<?php if ($msg->type=="student"): ?>
								<div class="media">
									<div class="media-left media-top">
										<a href="#">
											<img class="media-object img-circle" style="width: 30px; height:30px;" src="<?=base_url()?>contrata/ProfilePic/FPS.jpg" alt="...">
										</a>
									</div>
									<div class="media-body">
										<h4 class="media-heading"><?=$msg->fname." ".$msg->lname?><small style="font-size: 12px; color: #000;"> <?=$msg->time?></small></h4>
										<?=$msg->message?><br/>
									</div>

									<hr>
								</div>
							<?php elseif($msg->type == "faculty"): ?>
								<div class="media">
									<div class="media-body text-right">
										<h4 class="media-heading"><?=$msg->fac_fname." ".$msg->fac_lname?><small style="font-size: 12px; color: #000;"> <?=$msg->time?></small></h4>
										<?=$msg->message?><br/>
									</div>
									<div class="media-right media-top">
										<a href="#">
											<img class="media-object img-circle" style="width: 30px; height:30px;" 
											<?php if ($msg->img == null): ?>
												src="<?=base_url()?>assets/img/user-silhouette.svg"
											<?php else: ?>
												src="<?=base_url()?>assets/img/<?=$stud->img?>"
											<?php endif ?>
											alt="...">
										</a>
									</div>

									<hr>
								</div>
							<?php endif ?>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>