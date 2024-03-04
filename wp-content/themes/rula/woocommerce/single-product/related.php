<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="projects section-padding2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
							<h2 class="section-title text-center">Các dự án cùng danh mục</span></h2>
						</div>
					</div>
					<div class="row">

				<?php //woocommerce_product_loop_start(); ?>

					<?php foreach ( $related_products as $related_product ) : ?>

							<?php
							$post_object = get_post( $related_product->get_id() );

							setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

							// wc_get_template_part( 'content', 'product' );
							?>
							<div class="col-md-4 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
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

					<?php endforeach; ?>

				<?php //woocommerce_product_loop_end(); ?>
			</div>
		</div>

	</section>
	<?php
endif;

wp_reset_postdata();
