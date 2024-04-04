<!-- Slider -->

	<header class="header slider-fade">
		<div class="owl-carousel owl-theme">
			<!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
			<?php $slides = get_posts([
				'post_type' => 'post'
			]);
			function get_post_custom_value ($key) {
				$retval = "";
				try {
					$metas  = get_post_custom_values($key);
					if (isset($metas[0])) {
						return $metas[0];
					}
				} catch (\Exception $e) {

				}
				// echo $retval;
				return $retval;

			}
			// print_r($slides);
			 ?>

			 <?php foreach ($slides as $key => $post): ?>

				 <div class="text-right item bg-img" data-overlay-dark="3" data-background="<?php echo get_the_post_thumbnail_url(); ?>">
		 			<div class="v-middle caption mt-30">
		 				<div class="container">
		 					<div class="row">
		 						<div class="col-md-7 offset-md-5">
		 							<div class="o-hidden">
		 								<h3><?php echo the_title() ?></h3>
										<div class="butn-light mt-30 mb-30"><a href="<?php echo the_permalink() ?>"><span>Chi tiết</span></a></div>
		 							</div>
		 						</div>
		 					</div>
		 				</div>
		 			</div>
		 		</div>
			 <?php endforeach; ?>

		</div>
		<!-- Corner -->
		<div class="hero-corner"></div>
		<div class="hero-corner3"></div>
		<!-- Left Panel -->
		<div class="left-panel">
			<ul class="social-left clearfix">
				<!-- <li><a href="https://www.pinterest.com/rulaesportsvietnam/"><i class="ti-pinterest"></i></a></li> -->
				<!-- <li><a href="https://www.instagram.com/rulaesportsvn/"><i class="ti-instagram"></i></a></li> -->
				<!-- <li><a href="https://www.facebook.com/rulaesportsvn/"><i class="ti-facebook"></i></a></li> -->
			</ul>
		</div>
	</header>
