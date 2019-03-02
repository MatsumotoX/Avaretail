</script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/particlesRun.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/form-validator.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>

<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript">
	/* ---- Counter (our count) ---- */
	$('#ourcount').one('inview', function (event, isInView) {
		if (isInView) {
			$('.timer').countTo({
				speed: 3000
			});
		}
	});
</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/scrollreveal.min.js"></script>
<script type="text/javascript" src="js/style-switcher.js"></script>
<!-- Remove for production -->
<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
<script type="text/javascript" src="js/main1.js"></script>