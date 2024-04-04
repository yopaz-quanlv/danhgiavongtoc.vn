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
    <!-- Services Page -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title2"><?php echo the_title() ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php echo the_content();
                        if ( comments_open() || get_comments_number() ) :
            				comments_template();
            			endif;
                     ?>
                </div>
                <div class="col-md-4">
                    <section id="recent-posts-widget-with-thumbnails-2" class="widget recent-posts-widget-with-thumbnails">
                        <div id="rpwwt-recent-posts-widget-with-thumbnails-2" class="rpwwt-widget">
                            <h3 class="widget-title">Dự án nổi bật</h3>
                            <ul>
                                <?php
                                    $products = get_posts(['post_type' => 'du-an']);
                                ?>
                                <?php foreach ($products as $key => $post): ?>
                                    <li><a href="<?php  the_permalink(); ?>">
                                        <?php  the_post_thumbnail() ?>
                                        <span class="rpwwt-post-title"><?php  the_title(); ?></span></a></li>

                                <?php endforeach; ?>


                            </ul>
                        </div><!-- .rpwwt-widget -->
                    </section>
                    <?php echo get_sidebar(); ?>
                </div>

            </div>

        </div>
    </section>



    <?php
get_footer();
