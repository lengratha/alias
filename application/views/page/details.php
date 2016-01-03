
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-left">Items's Details</h2>

						<!-- details gallery zoomer-->
                        <div class="col-sm-5">
							<div class="product-image-wrapper" style="margin-bottom:35px;">
								<div class="single-products" id="single_prod">						
									<img id="zoom_01" src='<?php echo base_url('assets')?>/images/small/image2.jpg' data-zoom-image="<?php echo base_url('assets')?>/images/large/image2.jpg" />
									<?php // echo "<img id='zoom_01' src='".base_url('assets/images/small/'.$_POST['img'])."' data-zoom-image='".base_url('assets/images/large/'.$_POST['img'])."'/>";	?>					
								</div>
							</div>
							<div style="position:aboulute; margin:-25px 0 5px 0; border: 1px solid #f0f0f0;">
								<?php
									
									 	//echo $pr['PR_IMG'];
									$img_arr=explode('#', $pr['PR_IMG']);
							

									foreach ($img_arr as $key => $value) {

										echo '<img src="'.base_url('assets').'/images/thumb/'.$value.'" width="100px;" onClick="getImg(\''.$value.'\')" style="margin-right:5px;" />';
									}


								?>
									
							</div>
						</div>
                        <div class="col-sm-7">
					
							<div class="product-information"><!--/product-information-->
								
								<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
								<p>
									<img src="<?php echo base_url('assets')?>/images/product-details/rating.png" alt="" />
									<label class="label label-success">Ordered items: 10</label> 
									<label class="label label-info">Items left: 50</label>
								</p>
								<span>
									<span>US $59</span>
								</span>
								<p><b>Code:</b> 010200001</p>
								<p><b>Condition:</b> New</p>
								<p><b>Location:</b> Phnom Penh</p>
								<p><b>Contact:</b> 012 36 56 23/081 888 582</p>
								<p><b>Shipping:</b> Phnom Penh(free)</p>
														

							</div>

						</div>
					<div class="col-sm-12">
						<div class="product-information">
							<p><b>Description:</b></p>
							<p>

Twitter Bootstrap is the most popular front end frameworks currently. It is sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. It uses HTML, CSS and Javascript.

This tutorial will teach you basics of Bootstrap Framework using which you can create web projects with ease. Tutorial is divided into sections such as Bootstrap Basic Structure, Bootstrap CSS, Bootstrap Layout Components and Bootstrap Plugins. Each of these sections contain related topics with simple and useful examples.
</p>
						</div>
						<button type="button" class="btn btn-primary fa fa-arrow-left">Back</button>
						
					</div>	
						
					</div><!--features_items-->

					
