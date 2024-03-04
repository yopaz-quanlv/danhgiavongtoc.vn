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
get_template_part('slider-post');
?>

<style media="screen">
    .header {
        min-height: 66vh;
        max-height: 66vh;
        height: 66vh;
    }
</style>

<div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->

        <!-- Services -->
        <style media="screen">
            .services .item img {
                width: 100%;
            }
        </style>
        <section class="bauen-blog section-padding2" style="padding-top: 90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h1 class="section-title2"><?php echo the_title() ?></h1>
                    </div>
                </div>
                <div class="row">
    				<?php
    					$services = get_posts([

    					]);
    				?>
    				<?php foreach ($services as $key => $post): ?>
                        <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <?php echo get_the_post_thumbnail() ?> </div>
                            <div class="con">
                                <h5><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h5>
                            </div>
                        </div>
                    </div>

    				<?php endforeach; ?>


    			</div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->

        <!-- Clients -->

        <!-- Footer -->




<?php
get_footer();
