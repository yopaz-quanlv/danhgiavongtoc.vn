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
            <style media="screen">
                img {
                    width: 100% !important;
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h1 class="section-title2"><?php echo the_title() ?></h1>
                    </div>
                </div>
                <div class="row">
    				<?php
    					$services = get_terms('product_cat');
    				?>
    				<?php foreach ($services as $key => $term): ?>
    					<div class="col-md-6">
    						<div class="item">
    							<a href="<?php echo get_term_link($term) ?>">
                                    <?php
                                        // dd($term->term_id);
                                        $posts = get_posts([
                                            'post_type' => 'product',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field' => 'slug',
                                                    'terms' => $term->slug,
                                                ),
                                            ),
                                            'orderby' => 'id',
                                            'order'   => 'DESC',
                                        ]);
                                        if ($posts[0]) {
                                            $post = $posts[0];
                                            echo get_the_post_thumbnail();
                                        }
                                    ?>

    								<h5><?php echo $term->name ?></h5>
    								<div class="line"></div>
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
