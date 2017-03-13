<aside style="margin-top: 150px;">
	
</aside>
<div class="footer" style="color: #fff;">
	<h6 class="text-center center-block">Contact us @ sficssupport@gmail.com</h6>
</div>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.1.1.min.js "></script>
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
</body>
</html>