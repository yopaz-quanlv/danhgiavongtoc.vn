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
				<div class="col-md-6 mb-30 ">
					<h2 class="section-title" style="text-align: center;font-size: 24px;"><span>TẬP ĐOÀN <br>DANH GIA VỌNG TỘC</span></h2>
					<div class="about-img">
						<div class="img"> <img src="https://danhgiavongtoc.vn/wp-content/uploads/2024/04/z5314988611216_45576ca6ea3ffe14bee090c4e1608a91.jpg" class="img-fluid" alt=""> </div>
						<div class="about-img-2 about-buro">Danh gia vọng tộc</div>
					</div>
					
			</p>
				</div>
				<div class="col-md-6 ">
				<p>DANH GIA VỌNG TỘC là nơi hội tụ những nghệ nhân thủ công mỹ nghệ hàng đầu Việt Nam, là hiện thân của văn hóa truyền thống dân tộc. <br>

					Mỗi tác phẩm của các nghệ nhân DANH GIA VỌNG TỘC được chế tác ngoài yếu tố nghệ thuật còn đảm bảo các yếu tố: <span style="color: #fcec03">TÀI NĂNG - TÂM HUYẾT - TINH HOA - SÁNG TẠO.</span><br>

					Sự sáng tạo của các nghệ nhân sẽ mang lại cho khách hàng những trải nghiệm mới lạ thông qua từng hoa văn, hoạ tiết, kiểu dáng nhằm truyền tải trong đó những câu chuyện, thông điệp ý nghĩa.<br>

					Tác phẩm được chế tác bởi các nghệ nhân "bàn tay vàng" của DANH GIA VỌNG TỘC có kinh nghiệm và tài năng mang lại vẻ đẹp sang trọng và độc đáo cho không gian sống thể hiện đẳng cấp thượng lưu của giới tinh hoa.<br>

					Mỗi tác phẩm sẽ có những hoa văn, hoạ tiết độc đáo, được chế tác từ những chất liệu cao cấp và có thiết kế sang trọng, phù hợp cho việc trang trí trong không gian sống và làm việc.<br>

					Các tác phẩm của DANH GIA VỌNG TỘC phù hợp để sưu tầm hoặc làm quà biếu tặng cho người thân, bạn bè, đối tác hoặc lãnh đạo  thể hiện sự tinh tế, đẳng cấp.<br>
				</div>
			</div>
		</div>
	</section>
	<!-- Projects -->
	<section class="projects section-padding2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<h2 class="section-title">Dự án</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<?php $slides = get_posts([
							'post_type' => 'du-an'
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
