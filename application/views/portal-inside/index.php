	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				The Student Lounge
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-12 thumbnail">
					<div class="col-md-12">
						<h5>University Announcements</h5>
						<?php if ($news->result() == null): ?>
							<h5>No announcements yet.</h5>
						<?php else: ?>
							<ul class="media-list">
								<?php foreach ($news->result() as $key): ?>
									<li class="media">
										<div class="media-body">
											<h5 class="media-heading">
												<img src="<?=base_url()?>assets/news/<?=$key->img?>" style="width:30px; height:30px;" class="img-rounded">
												<?=$key->desc?> on <?=$key->date?>
												<a href="<?=base_url()?>Student/Read/News/<?=$key->id?>"><small>Click here for more info..</small></a>
											</h5>
										</div>
									</li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
					</div>
				</div>
				<div class="col-lg-9 thumbnail">
					<div class="col-md-12" style="margin-bottom: 150px;">
						<div class="col-md-12">
							<h6>Check the latest news in this slider.</h6>
							<div class="list" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
								<?php if ($news->result() == null): ?>
									<h4>No news published yet, add some.</h4>
								<?php else: ?>
									<?php foreach ($news->result() as $key): ?>
										<div>
											<img data-lazy="<?=base_url()?>assets/news/<?=$key->img?>" class="img-responsive center-block" style="width: 250px; height: 250px;">
											<div>
												<h6 class="text-center"><?=$key->desc?></h6>
											</div>
										</div>
									<?php endforeach ?>
								<?php endif ?>
							</div>
						</div>
						<div class="col-md-12">
							<h4>Your activities.</h4>
							<hr>
							<h6>
								You have no recent searches. <a href="#">Search something..</a><br/>
								You have no recent club invitations. <a href="#">View club lists</a><br/>
								You have no recent chats. <a href="#">Search student in school</a><br/>
							</h6>
						</div>

						<div class="col-md-12">
							<h4>Your Notifications</h4>
							<hr>
							<h6>
								This <a href="#">professor</a> gave you an A. thank him.
							</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					
				</div>
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>

	