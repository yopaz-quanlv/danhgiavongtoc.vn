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
                    <div class="col-md-12">
                        <?php echo the_content() ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="  section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2 class="section-title2">Quy trình thiết kế</h2>
                        <ul class="accordion-box clearfix">
                            <?php
                                $posts = get_posts(
                                    [
                                        'post_type' => 'quy-trinh'
                                    ]
                                );
                            ?>
                            <?php foreach ($posts as $key => $post): ?>

                                <li class="accordion block">
                                    <div class="acc-btn"><span class="count"><?php echo $key + 1 ?>.</span>
                                        <?php echo the_title() ?>
                                     </div>
                                    <div class="acc-content current" style="display: none;">
                                        <div class="content">
                                            <div class="text">
                                                <?php echo the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="  section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2">Tiêu chí thiết kế</h2>
                        <ul><li><strong>Thẩm mỹ</strong> – Cái đẹp của tỉ lệ và nhịp điệu</li><li><strong>Duy nhất</strong> – Thiết kế có bản sắc và hàm lượng sáng tạo cao</li><li><strong>Tinh thần</strong> – Kiến trúc chỉ có ý nghĩa khi chạm tới cảm xúc của cộng đồng</li><li><strong>Môi trường</strong> – Thiết kế thân thiện môi trường</li></ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="team section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2">Đội ngũ</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 owl-carousel owl-theme">
                        <?php
        					$teams = get_posts([
        						'post_type' => 'doi-ngu'
        					]);
        				?>
                        <?php foreach ($teams as $key => $post): ?>
                            <div class="item">
                                <div class="img">
                                    <?php echo get_the_post_thumbnail() ?>
                                </div>
                                <div class="info">
                                    <h6><?php echo the_title() ?></h6>
                                    <p><?php echo the_excerpt() ?></p>

                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </section>



<?php
get_footer();
