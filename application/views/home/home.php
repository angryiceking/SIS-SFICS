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
								<div class="col-md-10 col-md-offset-1" style="margin-top: 50px; color: #fff;">
									<h1>
										Expand the capabilities.
									</h1>
									<h4>
										Imagine the possibilities.
									</h4>
								</div>
							</div>
						</div>
						<div class="col-md-5 col-md-offset-2" style="margin-top: 50px;">
							<div class="col-md-12 thumbnail" id="students">
								<form method="post" action="<?=base_url()?>Home">
									<div class="form-group">
										<div class="col-md-12">
											<i class="mdi mdi-account-box center-block text-center" style="font-size: 100px; color: #2980b9; margin-bottom: -20px;"></i>
											<h3 class="text-center" style="color: #2c3e50;">Student Login <a class="btn btn-link" id="faculty-switcher"><small style="font-size: 10px; color: #000;"> Faculty >></small></a></h3>

											<hr>
											<h6 class="text-center" style="color: #2c3e50;">Please login your account to access the site.</h6>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" name="username" id="username" class="form-control" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<br/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<input type="password" name="password" id="password" class="form-control" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<br/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<button class="btn btn-md btn-block center-block hover" id="submit">Login <i class="mdi mdi-login"></i></button>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<br/>
										</div>
									</div>
								</form>
							</div>

							<div class="col-md-12 thumbnail" id="faculty" style="display: none;">
								<form method="post" action="<?=base_url()?>Faculty">
									<div class="form-group">
										<div class="col-md-12">
											<i class="mdi mdi-account-box center-block text-center" style="font-size: 100px; color: #2980b9; margin-bottom: -20px;"></i>
											<h3 class="text-center" style="color: #2c3e50;">  <a class="btn btn-link" id="student-switcher"><small style="font-size: 10px; color: #000;"> << Students</small></a> Faculty Login</h3>
											<hr>
											<h6 class="text-center" style="color: #2c3e50;">Please login your account to access the site.</h6>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" name="username" id="username" class="form-control" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<br/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<input type="password" name="password" id="password" class="form-control" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<br/>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<button class="btn btn-md btn-block center-block hover" id="submit">Login <i class="mdi mdi-login"></i></button>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<br/>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade admin" id="admin" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Administrator Login</h4>
			</div>
			<div class="modal-body">
				<div class="col-md-12">
					<form method="post" action="<?=base_url()?>Admin">
						<div class="form-group">
							<div class="col-md-12">
								<input type="text" name="username" id="username" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="password" name="password" id="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-md btn-block center-block hover" id="submit">Login <i class="mdi mdi-login"></i></button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->