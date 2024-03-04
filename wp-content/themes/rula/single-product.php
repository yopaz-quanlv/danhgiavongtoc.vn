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
                <div class="col-md-8">
                    <?php echo the_excerpt() ?>
                </div>
                <?php
                    function get_post_custom_value ($key) {
                        $retval = "";
                        try {
                            $metas  = get_post_custom_values($key);
                            $retval = $metas[0];
                        } catch (\Exception $e) {

                        }
                        echo $retval;
                        return $retval;

                    }
                ?>
                <div class="col-md-4">
                    <?php
                        $keys = [
                            'Diện tích', 'Năm', 'Dịch vụ', 'Địa chỉ'
                        ];
                        foreach ($keys as $key): ?>
                            <p><b><?php echo $key ?> : </b> <?php get_post_custom_value($key); ?></p>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="row">

                <?php
                    global $product;

                    $attachment_ids = $product->get_gallery_image_ids();

                    foreach( $attachment_ids as $attachment_id ) {
                         $image_link = wp_get_attachment_url( $attachment_id );

                ?>
                    <div class="col-md-4 gallery-item">
                        <a href="<?php echo  $image_link ?>" class="img-zoom">
                            <div class="gallery-box">
                                <?php echo wp_get_attachment_image($attachment_id, 'gallery'); ?>
                            </div>
                        </a>
                    </div>
                <?php
                    }
                 ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                <div>

            </div>
        </div>
    </section>
    <?php
        global $product;

        if( ! is_a( $product, 'WC_Product' ) ){
            $product = wc_get_product(get_the_id());
        }

        woocommerce_related_products( array(
            'posts_per_page' => 3,
            'columns'        => 3,
            'orderby'        => 'rand'
        ));

        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    ?>


    <!-- Prev-Next Projects -->
    <section class="projects-prev-next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div class="projects-prev-next-left">
                            <?php echo previous_post_link() ?>
                        </div>
                        <?php
                            $categories = get_terms('product_cat');
                            if (isset($categories[0])) {
                                $url = get_term_link($categories[0]);
                                ?>
                                    <a href="<?php echo $url ?>"><i class="ti-layout-grid3-alt"></i></a>
                                <?php
                            }
                        ?>
                        <div class="projects-prev-next-right">
                            <?php echo next_post_link() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->

<?php
get_footer();
