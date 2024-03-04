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
get_template_part('slider-lien-he');
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

    <!-- Services Page -->
    <section class="section-padding2" style="padding-top:90px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title2">Liên hệ</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo the_content();
                        if ( comments_open() || get_comments_number() ) :
            				comments_template();
            			endif;
                     ?>
                </div>


            </div>

        </div>
    </section>



    <?php
get_footer();
