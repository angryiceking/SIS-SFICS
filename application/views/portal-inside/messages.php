<?php foreach ($messages->result() as $key => $value): ?>
	<div class="row msg_container base_sent">
		<div class="col-xs-10 col-md-10">
			<div class="messages msg_sent">
				<p>
					<?=$value->message?>
				</p>
				<time datetime="2009-11-13T20:00"><strong><?=$value->user?></strong> • <?=$value->time?></time>
			</div>
		</div>
		<div class="col-md-2 col-xs-2 avatar">
			<?php if ($this->session->img != null): ?>
				<img src="<?=base_url()?>assets/img/<?=$value->img?>" class=" img-responsive img-circle" style="width: 50px; height: 50px;">
			<?php else: ?>
				<img src="<?=base_url()?>assets/img/logo.png" class=" img-responsive img-circle">
			<?php endif ?>
		</div>
	</div>
<?php endforeach ?>