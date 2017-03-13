          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
          	<div class="pull-right hidden-xs">
          		<b>Version</b> 2.3.7
          	</div>
          	<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
          	reserved.
          </footer>

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
          	<!-- Create the tabs -->
          	<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          	</ul>
          	<!-- Tab panes -->
          	<div class="tab-content">
          		<!-- Home tab content -->
          		<div class="tab-pane" id="control-sidebar-home-tab">
          			<!-- /.control-sidebar-menu -->
          		</div>
          		<!-- /.tab-pane -->
          	</div>
          </aside>
          <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be required placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- Create Faculty Account Modal -->
<div class="modal fade create_fac" id="create_fac" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Create Faculty Account</h4>
			</div>
			<div class="modal-body">
				<h5>Input the information.</h5>
				<h6>* Important fields, do not leave empty.</h6>
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


<div class="modal fade add_course" id="add_course" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add new course</h4>
			</div>
			<div class="modal-body">
				<h5>Please input the course name and description</h5>
				<form method="post" action="<?=base_url()?>Admin_Dashboard/add_course">
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">Course Name</label>
								<div class="col-md-9">
									<input type="text" name="course_name" class="form-control" required placeholder="Course Name / Code">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label col-md-3">Course Description</label>
								<div class="col-md-9">
									<input type="text" name="course_desc" class="form-control" required placeholder="A short description of the course">
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


<script src="<?=base_url()?>assets/js/jquery-1.12.0.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets/js/slick.min.js "></script>
<script type="">
	$('.list').slick({
		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});

</script>
<!-- Morris.js charts -->

<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#table').DataTable();
  })
</script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=base_url()?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/js/demo.js"></script>
</body>
</html>
