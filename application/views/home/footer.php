<aside style="margin-top: 150px;">
	
</aside>
<div class="footer" style="color: #fff;">
	<h6 class="text-center center-block">Looking for admin? <a href="#admin" data-toggle="modal">here!</a></h6>
</div>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.1.1.min.js "></script>
<script>
	$(document).ready(function(){	

		$('#faculty-switcher').click(function(){
			$('#students').slideUp();
			$('#faculty').slideDown();
		});

		$('#student-switcher').click(function(){
			$('#students').slideDown();
			$('#faculty').slideUp();
		});
	})
</script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js "></script>
</body>
</html>