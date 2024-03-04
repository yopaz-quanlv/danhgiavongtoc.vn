
	<section class="testimonials">
		<div class="background bg-img bg-fixed section-padding pb-0" data-background="/wp-content/uploads/2021/06/IQ3A4750-HDR-scaled.jpg" data-overlay-dark="3">
			<div class="container">
				<div class="row">
					<!-- Promo video -->
					<div class="col-md-6">
						<div class="vid-area">
							<div class="vid-icon">
								<a class="play-button vid" href="https://www.youtube.com/watch?v=yBPcREHyNmk">
									<svg class="circle-fill">
										<circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
									</svg>
									<svg class="circle-track">
										<circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
									</svg> <span class="polygon">
										<i class="ti-control-play"></i>
									</span> </a>
							</div>
							<div class="cont mt-15 mb-30">
								<h5>Xem video</h5>
							</div>
						</div>
					</div>
					<!-- Testiominals -->
					<div class="col-md-5 offset-md-1">
						<div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
							<div class="head-box">
								<h4>Phản hồi của khách hàng</h4>
							</div>
							<div class="owl-carousel owl-theme">
								<?php
									$feedbacks = get_posts([
										'post_type' => 'feedback'
									]);
								?>
								<?php foreach ($feedbacks as $key => $post): ?>
								<div class="item">

									<p><?php echo the_content(); ?></p>
									<div class="info">
										<div class="author-img">
											<?php echo get_the_post_thumbnail() ?>

										</div>
										<div class="cont">
											<h6><?php echo the_title() ?></h6>
											<span><?php echo the_excerpt() ?></span>
										</div>
									</div>
								</div>
								<?php endforeach; ?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Clients -->
	<section class="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-7 owl-carousel owl-theme">
					<?php
						$feedbacks = get_posts([
							'post_type' => 'partner',
							'numberposts' => 1000
						]);
					?>
					<?php foreach ($feedbacks as $key => $post): ?>
					<div class="clients-logo">
						<a href="<?php echo the_permalink() ?>">
							<?php echo get_the_post_thumbnail() ?>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
