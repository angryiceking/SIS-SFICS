<aside style="margin-top: 70px;">	
</aside>
<div class="container">
	<div class="row" style="margin-bottom: 250px; color: #000;">
		<div class="col-md-12 thumbnail">
			<h4><strong>Our course offering:</strong></h4>
			<hr>
			<ul class="">
			<?php foreach ($courses->result() as $key): ?>
				<li><h6><strong style="font-size: 25px;"><?=$key->course_name?></strong> - <?=$key->course_desc?></h6></li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>