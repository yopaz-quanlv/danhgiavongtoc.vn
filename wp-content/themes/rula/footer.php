<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rula
 */

?>

<footer class="main-footer dark">
    <div class="container">
        <div class="row">
            <?php for($i = 1; $i < 4 ; $i++): ?>
                <div class="col-md-4 mb-30">
                    <?php dynamic_sidebar( "footer-$i" ); ?>
                </div>
            <?php endfor ?>


        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <?php for($i = 4; $i < 7 ; $i++): ?>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( "footer-$i" ); ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Content -->

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/pace.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/scrollIt.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/YouTubePopUp.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>

<?php wp_footer(); ?>
</body>
</html>
