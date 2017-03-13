<div class="content-wrapper">
	<section class="content-header">
		University Announcements
	</section>
	<section class="content">
		<div class="row">
			<?php foreach ($curnews->result() as $key): ?>
				<div class="col-lg-12 thumbnail">
					<h5>You are reading <strong><?=$key->desc?></strong> <a href="<?=base_url()?>Student">Go back to homepage</a></h5>
				</div>
				<div class="col-lg-12 thumbnail">
					<div class="col-lg-12">
						<h5>published on <i><?=$key->date?></i></h5>
						<img src="<?=base_url()?>assets/news/<?=$key->img?>" class="img-rounded" style="width: 300px; height: 300px;">
						<hr>
						<h5><?=$key->details?></h5>
					</div>
				</div>
			<?php endforeach ?>
			
		</div>
	</section>
</div>