<aside style="margin-top: 100px;"></aside>

<div class="container">
	<div class="row" style="margin-bottom: 170px;">
		<div class="col-md-8 col-md-offset-2">
			<h4>Edit your account profile.</h4>
			<h6>In this tab you can edit your personal information, including your username and password.</h6>
			<div class="col-md-12">
			<form method="post" action="<?=base_url()?>Student/edit">
				<?php foreach ($profile->result() as $key): ?>
					<input type="hidden" name="id" value="<?=$key->id?>">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-4">Username:</label>
							<div class="col-md-8">
								<input type="text" name="username" value="<?=$key->username?>" class="form-control" disabled="disabled">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-4">Password:</label>
							<div class="col-md-8">
								<input type="password" name="password" value="<?=$key->password?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-4">Full Name:</label>
							<div class="col-md-8">
								<input type="text" value="<?=$key->fname." ".$key->mname." ".$key->lname?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-4">Age:</label>
							<div class="col-md-8">
								<input type="text" name="age" value="<?=$key->age?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-4">Contact:</label>
							<div class="col-md-8">
								<input type="text" name="contact" value="<?=$key->contact?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-4">Address:</label>
							<div class="col-md-8">
								<input type="text" name="address" value="<?=$key->address?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<button class="btn btn-raised btn-sm">Edit account</button>
						</div>
					</div>
				<?php endforeach ?>
			</form>
			</div>
		</div>
	</div>
</div>