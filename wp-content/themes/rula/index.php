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
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
					<h2 class="section-title">Dự án <span>nổi bật</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/project1.jpg" alt=""> </div>
							<div class="con">
								<h6><a href="cotton-house.html">Lorem Ipsum</a></h6>
								<h5><a href="cotton-house.html">Dự án 1</a></h5>
								<div class="line"></div> <a href="cotton-house.html"><i class="ti-arrow-right"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/project2.jpg" alt=""> </div>
							<div class="con">
								<h6><a href="armada-center.html">Lorem Ipsum</a></h6>
								<h5><a href="armada-center.html">Dự án 2</a></h5>
								<div class="line"></div> <a href="armada-center.html"><i class="ti-arrow-right"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/project3.jpg" alt=""> </div>
							<div class="con">
								<h6><a href="stonya-villa.html">Lorem Ipsum</a></h6>
								<h5><a href="stonya-villa.html">Dự án 3</a></h5>
								<div class="line"></div> <a href="stonya-villa.html"><i class="ti-arrow-right"></i></a>
							</div>
						</div>
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/project4.jpg" alt=""> </div>
							<div class="con">
								<h6><a href="prime-hotel.html">Lorem Ipsum</a></h6>
								<h5><a href="prime-hotel.html">Dự án 4</a></h5>
								<div class="line"></div> <a href="prime-hotel.html"><i class="ti-arrow-right"></i></a>
							</div>
						</div>
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
					<h2 class="section-title">Dịch vụ <span>của chúng tôi</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<a href="architecture.html"> <img src="img/icons/icon-1.png" alt="">
							<h5>Dịch vụ 1</h5>
							<div class="line"></div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<div class="numb">01</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<a href="interior-design.html"> <img src="img/icons/icon-2.png" alt="">
							<h5>Dịch vụ 2</h5>
							<div class="line"></div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<div class="numb">02</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<a href="urban-design.html"> <img src="img/icons/icon-3.png" alt="">
							<h5>Dịch vụ 3</h5>
							<div class="line"></div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<div class="numb">03</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog -->
	<section class="bauen-blog section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Tin tức <span>mới nhất</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/new1.jpg" alt=""> </div>
							<div class="con">
								<span class="category">
									<a href="blog.html">Kiến trúc</a> -  20.12.2021
								</span>
								<h5><a href="post.html">Thiết kế phòng net</a></h5>
							</div>
						</div>
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/new2.jpg" alt=""> </div>
							<div class="con"> <span class="category">
									<a href="blog.html">Nội thất</a> - 18.12.2021
								</span>
								<h5><a href="post.html">Nội thất chung cư</a></h5>
							</div>
						</div>
						<div class="item">
							<div class="position-re o-hidden"> <img src="/img/new3.jpg" alt=""> </div>
							<div class="con"> <span class="category">
									<a href="blog.html">Kiến trúc</a> - 16.12.2021
								</span>
								<h5><a href="post.html">Thiết kế nhà hàng</a></h5>
							</div>
						</div>
						<div class="item">
						<div class="position-re o-hidden"> <img src="/img/new4.jpg" alt=""> </div>
						<div class="con"> <span class="category">
								<a href="blog.html">Bảng giá</a> - 14.12.2021
							</span>
							<h5><a href="post.html">Bảng giá thiết kế</a></h5>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('testimonials'); ?>
	<!-- Footer -->
	<footer class="main-footer dark">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-30">
					<div class="item fotcont">
						<div class="fothead">
							<h6>Hotline</h6>
						</div>
						<p>(+84) 974372468</p>
					</div>
				</div>
				<div class="col-md-4 mb-30">
					<div class="item fotcont">
						<div class="fothead">
							<h6>Email</h6>
						</div>
						<p>info@rula.com.vn</p>
					</div>
				</div>
				<div class="col-md-4 mb-30">
					<div class="item fotcont">
						<div class="fothead">
							<h6>Địa chỉ</h6>
						</div>
						<p>Khu phố Kim Thiều - Phường Hương Mạc - Thành phố Từ Sơn - Bắc Ninh</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="text-left">
							<p>© 2021 RULA. All right reserved.</p>
						</div>
					</div>
					<div class="col-md-4 abot">
						<div class="social-icon"> <a href="index.html"><i class="ti-facebook"></i></a> <a href="index.html"><i class="ti-twitter"></i></a> <a href="index.html"><i class="ti-instagram"></i></a> <a href="index.html"><i class="ti-pinterest"></i></a> </div>
					</div>
					<div class="col-md-4">
						<p class="right"><a href="#">Điều khoản &amp; bảo mật</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php
get_footer();
