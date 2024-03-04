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

<style media="screen">
    .header {
        min-height: 66vh;
        max-height: 66vh;
        height: 66vh;
    }
</style>

<div class="content-wrapper">
        <!-- Lines -->


        <!-- Projects -->
        <section class="projects section-padding2" style="padding-top: 90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h2 class="section-title">Dự án <span><?php echo single_term_title() ?></span></h2>
                    </div>
                </div>

                <div class="row">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                    ?>

                        <div class="col-md-6 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                            <div class="item">
                                <div class="position-re o-hidden">
                                    <?php echo get_the_post_thumbnail() ?>
                                </div>
                                <div class="con">
                                    <h5><a href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h5>
                                    <div class="line"></div> <a href="<?php echo the_permalink() ?>"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->
    	<?php get_template_part('testimonials'); ?>
        <!-- Clients -->

        <!-- Footer -->

	<!-- Footer -->



<?php
get_footer();
