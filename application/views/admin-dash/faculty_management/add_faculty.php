<div class="row">
	<section class="col-lg-12 connectedSortable">
		<!-- Chat box -->
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-comments-o"></i>

				<h3 class="box-title">Faculty Information <a href="<?=base_url()?>Admin/Faculty" class="btn btn-link"><i class="fa fa-arrow-left"></i> Go back</a></h3>

			</div>
			<div class="box-body chat" id="chat-box">
				<!-- chat item -->
				<div class="item">
					<div class="form-group">
						<div class="col-md-12">
							<h5>Please do some changes as you wish</h5>
						</div>
						<div class="col-md-12">
							<form method="post" action="<?=base_url()?>Admin_Dashboard/add_faculty">
								<div class="col-md-12">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">* Faculty's Last Name:</label>
											<div class="col-md-9">
												<input type="text" name="fac_lname" class="form-control" required placeholder="Last name">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">* Faculty's First Name:</label>
											<div class="col-md-9">
												<input type="text" name="fac_fname" class="form-control" required placeholder="First name">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">Faculty's Middle Name:</label>
											<div class="col-md-9">
												<input type="text" name="fac_mname" class="form-control" placeholder="Middle name">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">* Faculty's Email:</label>
											<div class="col-md-9">
												<input type="text" name="fac_email" class="form-control" required placeholder="Email">
											</div>
										</div>  
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">* Contact Number:</label>
											<div class="col-md-9">
												<input type="text" name="fac_contact" class="form-control" placeholder="Contact">
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-md-3">* Faculty's Address:</label>
											<div class="col-md-9">
												<input type="text" name="fac_address" class="form-control" required placeholder="Address">
											</div>
										</div>  
									</div>

								</div>
							</div>
							<div class="modal fade conff" id="conff" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Create Faculty Account</h4>
										</div>
										<div class="modal-body">
											<h5>Are you sure?</h5>
											<button type="submit" class="btn btn-default btn-sm">Yes </button>
											<button data-dismiss="modal" class="btn btn-default btn-sm">Cancel </button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal --> 
							<div class="modal-footer">
								<div class="col-md-12">
									<div class="form-group text-right">
										<br/>
										<div class="col-md-12">
											<div class="col-md-12">
												<a href="#conff" data-toggle="modal" class="btn btn-sm btn-raised btn-success"><i class="mdi mdi-check"></i> <strong>Create</strong></a>
												<a href="<?=base_url()?>Admin/Faculty" class="btn btn-sm btn-raised btn-default">Back</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /.item -->
			</div>
			<!-- /.box (chat box) -->
		</section>
	</div> 
</div>