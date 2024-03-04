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
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="img/banner.jpg">
        <!-- Left Panel -->
        <div class="left-panel"></div>
    </section>
    <!-- Team -->
    <section class="testimonials section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title2"><?php echo the_title() ?></h1>
                </div>
            </div>
            <div class="row">
                <?php
                    $posts = get_posts([
                        'post_type' => 'feedback'
                    ]);
                ?>
                <?php foreach ($posts as $key => $post): ?>
                <div class="col-md-4">
                    <div class="item testimonials-box" style="background: #323232">
                        <span class="quote"><img src="<?php echo get_template_directory_uri() ?>/img/quot.png" alt=""></span>
                        <p><?php echo the_content() ?></p>
                        <div class="info">
                            <div class="author-img"><?php echo get_the_post_thumbnail() ?></div>
                            <div class="cont">
                                <h6><?php echo the_title() ?></h6> <span><?php echo the_excerpt() ?></span>
                            </div>
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
