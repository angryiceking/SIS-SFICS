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
