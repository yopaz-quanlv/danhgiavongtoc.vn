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
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="<?php echo get_template_directory_uri() ?>/img/banner.jpg" style="background-image: url(&quot;<?php echo get_template_directory_uri() ?>/img/banner.jpg&quot;);">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- Services -->
        <section class="services section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h1 class="section-title2"><?php echo the_title() ?></h1>
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
        <!-- Promo video - Testiominals -->
        <?php get_template_part('testimonials'); ?>




<?php
get_footer();
