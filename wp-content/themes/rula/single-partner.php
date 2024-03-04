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

    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="<?php echo get_the_post_thumbnail_url() ?>">
        <!-- Left Panel -->
        <div class="left-panel"></div>
    </section>
    <!-- Project Page -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title2"><?php echo the_title() ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo the_excerpt() ?>
                </div>
                <!-- <div class="col-md-4">
                    <p><b>Year : </b> 2021</p>
                    <p><b>Company : </b> WPS International</p>
                    <p><b>Project Name : </b> <?php echo the_title() ?></p>
                    <p><b>Location : </b> Toronto, Canada</p>
                </div> -->
            </div>
            <div class="row mt-30">
                <?php echo the_content(); ?>

            </div>
        </div>
    </section>
    <!-- Prev-Next Projects -->
    <section class="projects-prev-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="projects-prev-next-left">
                            <a href="#"> <i class="ti-arrow-left"></i> Dự án trước</a>
                        </div> <a href="#"><i class="ti-layout-grid3-alt"></i></a>
                        <div class="projects-prev-next-right"> <a href="#">Dự án tiếp theo <i class="ti-arrow-right"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->




<?php
get_footer();
