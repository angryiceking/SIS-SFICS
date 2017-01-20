<aside style="margin-top: 50px;"></aside>
<div class="col-md-12">
	<h6><i class="mdi mdi-exclamation"></i>Website Completeness (including functionality): <strong>30%</strong></h6>
	<hr>
</div>
<!-- <img src="<?=base_url()?>assets/img/bg.jpg" class="img-responsive" style="background: fixed; background-size: cover; background-repeat: no-repeat; width: 100%; height: 20%;"> -->
<div class="container">
	<div class="row" style="margin-bottom: 50px;">	
		<div class="col-md-12">
			<h1>Welcome, <?=$this->session->ad_user;?></h1>
			<h6>There's a lot of things to do, anyway let me show you the list of your students.</h6>
			<br/>
			<div class="input-group form-search col-md-6">
				<input type="text" class="form-control search-query" placeholder="Search students.. (fixing this feature, please wait.)">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary" data-type="last">Search</button>
				</span>
			</div>
			<br/>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Student #</td>
							<td>Student Name:</td>
							<td>Student Contact:</td>
							<td>Student Address:</td>
							<td>Prelim Grade:</td>
							<td>Midterm Grade:</td>
							<td>Finals Grade:</td>
							<td>Average:</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						<?php if ($students->result() == null): ?>
							<h5>Nothing to show</h5>
						<?php else: ?>
							<?php foreach ($students->result() as $key): ?>
								<tr>
									<td><?=$key->studnum?></td>
									<?php if ($key->status == 'active'): ?>
										<td style="color: green;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
									<?php elseif($key->status == 'locked'): ?>
										<td style="color: orange;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
									<?php elseif($key->status == 'archived'): ?>
										<td style="color: red;"><?=$key->lname.", ".$key->fname." ".$key->mname?></td>
									<?php endif ?>
									<td>+63<?=$key->contact?></td>
									<td><?=$key->address?></td>
									<td><small>TBE</small></td>
									<td><small>TBE</small></td>
									<td><small>TBE</small></td>
									<td><small>TBE</small></td>
									<td>
										<!-- Update -->
										<a href="#update" data-toggle="modal" data-placement="left" title="Update" class="btn btn-sm btn-primary"><i class="mdi mdi-update"></i></a>

										<!-- Lock -->
										<a href="#lock" data-toggle="modal" data-placement="left" title="Archive" class="btn btn-sm btn-warning"><i class="mdi mdi-lock"></i></a>

										<!-- Archive -->
										<a href="#archive" class="btn btn-sm btn-danger" data-toggle="modal" data-placement="left" title="Lock"><i class="mdi mdi-archive"></i></a>
									</td>
								</tr>
							<?php endforeach ?>
						<?php endif ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-12">
			<hr>
			<h1>Student Management</h1>
			<h6>This section is for performing basic crud operations, this includes Creating, Updating, Deleting, Archiving, and Locking Students accounts </h6>
			<div class="col-md-12">
				<div class="col-md-2">
					<button type="button" data-toggle="modal" data-target="#create" class="btn btn-success btn-lg btn-block btn-raised"><i class="mdi mdi-grease-pencil"></i><small>Create Account</small></button>
				</div>
				<div class="col-md-2">
					<button type="button" data-toggle="modal" data-target="#update" class="btn btn-primary btn-lg btn-block btn-raised"><i class="mdi mdi-update"></i><small>Update Account</small></button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-danger btn-lg btn-block btn-raised"><i class="mdi mdi-delete"></i><small>Delete Account</small></button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-inversed btn-lg btn-block btn-raised"><i class="mdi mdi-archive"></i><small>Archive Account</small></button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-warning btn-lg btn-block btn-raised"><i class="mdi mdi-lock"></i><small>Lock Account</small></button>
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-link btn-lg btn-block btn-raised"><i class="mdi mdi-lock-open"></i><small>Unlock Account</small></button>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<hr>
			<h1>News & Events Publisher</h1>
			<h6>This section provides the basic function of adding news, events, and other information regarding on what's happening to the school. <br/> So that said, are there future events happening to the school? or you want to share something? you can publish it here!</h6>
			<div class="col-md-12">
				<div class="col-md-7">
					<div class="col-md-12">
						<div class="list" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
							<?php if ($news->result() == null): ?>
								<h4>No news published yet, add some.</h4>
							<?php else: ?>
								<?php foreach ($news->result() as $key): ?>
									<div>
										<img data-lazy="<?=base_url()?>assets/news/<?=$key->img?>" class="img-responsive center-block" style="width: 150px; height: 250px;">
										<div>
											<h6 class="text-center"><?=$key->desc?></h6>
										</div>
									</div>
								<?php endforeach ?>
							<?php endif ?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="col-md-12" style="margin-top: 20px;">
						<form method="post" enctype="multipart/form-data" action="<?=base_url()?>Admin_Dashboard/upload_news">
						<h4>Add some news for the sake of the students!</h4>
						<blockquote>
							<p><i>Lamang ang may alam!</i></p>
							<footer>Kuya Kim Atienza, <cite title="Memo Plus Gold">Memo Plus Gold</cite></footer>
						</blockquote>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-5">Upload Frontpage Photo</label>
								<div class="col-md-7">
									<input type="file" name="userfile" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<br/>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-5">Input some description!</label>
								<div class="col-md-7">
									<input type="text" name="desc" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<br/>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-12">
									<br/>
									<button class="btn btn-raised btn-md center-block">Publish</button>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modals -->
<!-- Create Account Modal -->
<div class="modal fade create" id="create" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create Student Account</h4>
			</div>
			<div class="modal-body">
				<h5>Input the information.</h5>
				<h6>* Important fields, do not leave empty.</h6>
				<form method="post" action="<?=base_url()?>Admin_Dashboard/create_stud">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Student's Last Name:</label>
								<div class="col-md-9">
									<input type="text" name="lname" class="form-control" placeholder="Last name">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Student's First Name:</label>
								<div class="col-md-9">
									<input type="text" name="fname" class="form-control" placeholder="First name">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">Student's Middle Name:</label>
								<div class="col-md-9">
									<input type="text" name="mname" class="form-control" placeholder="Middle name">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Age:</label>
								<div class="col-md-9">
									<input type="text" name="age" class="form-control" placeholder="Age">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Contact Number:</label>
								<div class="col-md-9">
									<input type="text" name="contact" class="form-control" placeholder="Contact">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Student's Address:</label>
								<div class="col-md-9">
									<input type="text" name="address" class="form-control" placeholder="Address">
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-md-12">
						<div class="form-group text-right">
							<button class="btn btn-sm btn-raised btn-success"><i class="mdi mdi-check"></i> <strong>Create</strong></button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Update Modal -->
<div class="modal fade update" id="update" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create Student Account</h4>
			</div>
			<div class="modal-body">
				<h5>Update student account.</h5>
				<h6>* Important fields, do not leave empty.</h6>
				<form method="post" action="<?=base_url()?>Admin_Dashboard/create_stud">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Student's Last Name:</label>
								<div class="col-md-9">
									<input type="text" name="lname" class="form-control" placeholder="Last name" value="...">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Student's First Name:</label>
								<div class="col-md-9">
									<input type="text" name="lname" class="form-control" placeholder="First name" value="...">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">Student's Middle Name:</label>
								<div class="col-md-9">
									<input type="text" name="lname" class="form-control" placeholder="Middle name" value="...">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Age:</label>
								<div class="col-md-9">
									<input type="text" name="age" class="form-control" placeholder="Age" value="...">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Contact Number:</label>
								<div class="col-md-9">
									<input type="text" name="lname" class="form-control" placeholder="Contact" value="...">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">* Student's Address:</label>
								<div class="col-md-9">
									<input type="text" name="lname" class="form-control" placeholder="Address" value="...">
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-md-12">
						<div class="form-group text-right">
							<button class="btn btn-sm btn-raised btn-success"><i class="mdi mdi-check"></i> <strong>Update</strong></button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->