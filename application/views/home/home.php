<aside style="margin-top: 70px;">	
</aside>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="col-md-12">
						<div class="col-md-5">
							<div class="col-md-12">
								<div class="col-md-10 col-md-pull-4" style="margin-top: 50px;">
									<?php if ($video->result() == null): ?>
										<video width="640" height="360" controls="">
											<source src="<?=base_url()?>assets/videos" type="video/mp4">
												your browser doesn't support the video tag.
											</video>
										<?php else: ?>
											<video width="640" height="360" controls="">
											<source src="<?=base_url()?>assets/<?=$video->row('video')?>" type="video/mp4">
													your browser doesn't support the video tag.
												</video>
											<?php endif ?>
										</div>
									</div>
								</div>
								<div class="col-md-5 col-md-offset-2">
									<h3>Our news</h3>
									<div class="col-md-12 thumbnail">
										<div class="list" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

