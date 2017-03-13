<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-10">
			<div class="col-md-3 thumbnail" id="chatbox">
				<div id="messages">
					<div class="panel panel-default">
						<div class="panel-heading top-bar">
							<div class="col-md-8 col-xs-8">
								<h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Everyone</h3>
							</div>
							<div class="col-md-4 col-xs-4" style="text-align: right;">
								<a href="#"><span id="minimize" class="glyphicon glyphicon-minus icon_minim"></span></a>
								<a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
							</div>
						</div>
						<div class="panel-body msg_container_base" id="msgcol" style="height: 250px;">
							<!-- Dito lalabas yung mga message -->
						</div>
						<div class="panel-footer">
							<div class="input-group">
								<input id="message" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
								<span class="input-group-btn">
									<button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
								</span>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
		<div class="col-md-2 col-md-offset-10">
			<div class="col-md-3 thumbnail" id="max">
				<div class="col-xs-12 btn btn-primary btn-xs" id="maximize" >
					<div class="col-sm-10">
						<h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Everyone</h3>
					</div>
					<div class="col-sm-2">
					</div>
				</div>
			</div>
		</div>
	</div>
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
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- Create Account Modal -->
<script type="text/javascript">
	$('#minimize').click(function (){
		$('#chatbox').slideToggle();
		$('#max').show();
	});

	$('#maximize').click(function (){
		$('#chatbox').slideDown();
		$('#max').hide();
	})

	$(document).on('click', '.panel-heading span.icon_minim', function (e) {
		var $this = $(this);
		if (!$this.hasClass('panel-collapsed')) {
			$this.parents('.panel').find('.panel-body').slideUp();
			$this.addClass('panel-collapsed');
			$this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
		} else {
			$this.parents('.panel').find('.panel-body').slideDown();
			$this.removeClass('panel-collapsed');
			$this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
		}
	});
	$(document).on('focus', '.panel-footer input.chat_input', function (e) {
		var $this = $(this);
		if ($('#minim_chat_window').hasClass('panel-collapsed')) {
			$this.parents('.panel').find('.panel-body').slideDown();
			$('#minim_chat_window').removeClass('panel-collapsed');
			$('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
		}
	});
	$(document).on('click', '#new_chat', function (e) {
		var size = $( ".chat-window:last-child" ).css("margin-left");
		size_total = parseInt(size) + 400;
		alert(size_total);
		var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
		clone.css("margin-left", size_total);
	});
	$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});

</script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js "></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/slick.min.js "></script>
<script type="">
	$('.list').slick({
		dots: true,
		infinite: true,
		autoplay: true,
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>assets/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/js/demo.js"></script>
</body>
</html>
