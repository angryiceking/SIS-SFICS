<aside style="margin-top: 100px;"></aside>

<div class="container">
	<div class="row" style="margin-bottom: 150px;">
		<div class="col-md-12">
			<h1>The Student Lounge</h1>
			<h6>Here are the current trends in our school..</h6>
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