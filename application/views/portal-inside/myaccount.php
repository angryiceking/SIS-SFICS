<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Account Details
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-9 thumbnail">
				<div class="col-md-12" style="margin-bottom: 150px;">
					<div class="col-md-12">
						<h4>Edit your account profile.</h4>
						<h6>In this tab you can edit your personal information, including your username and password.</h6>
						<div class="col-md-12">
							<form method="post" action="<?=base_url()?>Student/edit">
								<?php foreach ($profile->result() as $key): ?>
									<input type="hidden" name="id" value="<?=$key->student_id?>">
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
											<a href="#conf" data-toggle="modal" class="btn btn-raised btn-sm">Edit account</a>
										</div>
									</div>
									<div class="modal fade conf" id="conf" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title">Edit Student Account</h4>
												</div>
												<div class="modal-body">
													<h5>Are you sure?</h5>
													<button type="submit" class="btn btn-default btn-sm">Yes </button>
													<button data-dismiss="modal" class="btn btn-default btn-sm">Cancel </button>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->

								<?php endforeach ?>

							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="col-md-12">
					<form method="post" action="<?=base_url()?>Student/UploadPic" enctype="multipart/form-data">
						<div class="form-group">
							<h5>Upload a profile picture! <?=$key->img?>  <?=$this->session->id?></h5>
							<?php if ($key->img != null): ?>
								<img src="<?=base_url()?>assets/img/<?=$key->img?>" class="img img-responsive img-circle center-block" style="width: 150px; height: 150px;">
							<?php else: ?>
								<img src="<?=base_url()?>assets/img/bg.jpg?>" class="img img-responsive img-circle center-block" style="width: 150px; height: 150px;">
							<?php endif ?>
							<div class="col-md-12">
								<div class="col-md-12 center-block">
									<input type="file" name="userfile" class="form-control center-block text-center">
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-12">
									<a href="#conf1" class="btn" data-toggle="modal">Upload Profile Picture</a>
								</div>
							</div>

							<div class="modal fade conf1" id="conf1" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Upload Profile Picture</h4>
										</div>
										<div class="modal-body">
											<h5>Are you sure?</h5>
											<button type="submit" class="btn btn-default btn-sm">Yes </button>
											<button data-dismiss="modal" class="btn btn-default btn-sm">Cancel </button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>