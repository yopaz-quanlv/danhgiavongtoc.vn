<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rula
 */

get_header();
get_template_part('slider');
?>

<div class="content-wrapper">
	<!-- Lines -->
	<section class="content-lines-wrapper">
		<div class="content-lines-inner">
			<div class="content-lines"></div>
		</div>
	</section>
	<!-- About -->
	<section class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
					<h2 class="section-title">Về<span>RULA</span></h2>
					<p>RULA Architects là chuyên gia thiết kế & thi công các công trình kiến trúc nội thất hiện đại. Tại RULA, chúng tôi trau chuốt từ khâu lên ý tưởng, phát triển concept đến ứng dụng thực tế. Tất cả dự án của RULA là sự kết hợp chặt chẽ giữa thẩm mỹ kiến trúc với công năng sử dụng.<br/>
			</p>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
					<div class="about-img">
						<div class="img"> <img src="/wp-content/uploads/2021/06/AY8A3731_4.jpg" class="img-fluid" alt=""> </div>
						<div class="about-img-2 about-buro">RULA Team</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Projects -->
	<section class="projects section-padding2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
					<h2 class="section-title">Dự án</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<?php $slides = get_posts([
							'post_type' => 'product'
						]);

						// print_r($slides);
						 ?>
						<?php foreach ($slides as $key => $post): ?>

						<div class="item">

							<div class="position-re o-hidden">
								<?php echo get_the_post_thumbnail() ?>
							</div>
							<div class="con">

								<h5><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h5>
								<div class="line"></div> <a href="<?php echo get_permalink() ?>">
									<i class="ti-arrow-right"></i>
								</a>

							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	<section class="services section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Dịch vụ</h2>
				</div>
			</div>
			<div class="row">
				<?php
					$services = get_posts([
						'post_type' => 'dich-vu'
					]);
				?>
				<?php foreach ($services as $key => $post): ?>
				<div class="col-md-4">
					<div class="item">
						<a href="<?php echo the_permalink() ?>">
							<?php echo get_the_post_thumbnail() ?>
							<h5><?php echo the_title() ?></h5>
							<div class="line"></div>
							<p><?php echo the_excerpt() ?></p>
							<div class="numb">0<?php echo $key + 1?></div>
						</a>
					</div>
				</div>
				<?php endforeach; ?>


			</div>
		</div>
	</section>
	<!-- Blog -->
	<section class="bauen-blog section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Tin nổi bật</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<?php $slides = get_posts([
						]);

						// print_r($slides);
						 ?>
						<?php foreach ($slides as $key => $post): ?>

						<div class="item">
							<div class="position-re o-hidden"><?php echo get_the_post_thumbnail() ?></div>
							<div class="con">

								<h5><a href="<?php echo get_permalink() ?>"><?php echo the_title() ?></a></h5>
							</div>
						</div>
						<?php endforeach; ?>


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Promo video - Testiominals -->
	<?php get_template_part('testimonials'); ?>




	<?php
get_footer();
