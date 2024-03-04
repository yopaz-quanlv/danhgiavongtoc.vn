<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
	<!-- Header Banner -->
	<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="<?php echo get_template_directory_uri() ?>/img/banner.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri() ?>/img/banner.jpg&quot;);">
		<!-- Left Panel -->
		<div class="left-panel"></div>
	</section>
	<!-- Not found 404 -->
	<section class="pb-90">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3"> <img src="<?php echo get_template_directory_uri() ?>/img/404-image.png" class="mb-30" alt="">
					<h2 class="section-title2 mb-10">Sorry We Can't Find That Page!</h2>
					<p>The page you are looking for was moved, removed, renamed or never existed.</p>
					<div class="error-form">
						<form method="post" action="blog.html">
							<div class="form-group clearfix">
								<input type="search" name="text" value="" placeholder="Search here" required="">
								<button type="submit" class="theme-btn"><span class="ti-search"></span></button>
							</div>
						</form>
					</div>
					<div class="butn-dark mt-30 text-center"><a href="#0"><span>Back to home</span></a></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->


<?php
get_footer();
