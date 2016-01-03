	<footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Subscribe to alerts</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 alias.com. All rights reserved.</p>
					<!--<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>-->
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  	<script>
    	$('#zoom_01').elevateZoom({
    		zoomType: "inner",
			cursor: "crosshair",
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 750
   		}); 
	</script>

	<script>
	function getImg(var_src)
	{
		$.ajax({
			type: "POST",
			url:"<?php echo base_url('home/getImg') ?>",
			data:'img='+var_src,
			success:function(data)
			{
				$('#single_prod').html(data);
			}

		});
		
	}
	</script>

    <script src="<?php echo base_url('assets')?>/js/jquery.js"></script>
	<script src="<?php echo base_url('assets')?>/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets')?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url('assets')?>/js/price-range.js"></script>
    <script src="<?php echo base_url('assets')?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url('assets')?>/js/main.js"></script>
    

</body>
</html>