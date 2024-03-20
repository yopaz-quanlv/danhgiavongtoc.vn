<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rula
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PKP7NVN');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/plugins.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKP7NVN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Progress scroll totop -->
<style media="screen">
	.progress-wrap {
		bottom: 150px;
		opacity: 1;
		    visibility: visible;
	}
	a.round {
		width: 40px;
		height: 40px;
		border-radius: 20px;
		border: 1px solid #fcec03;
		text-align: center;
		color: #fcec03;
		line-height: 40px;
		margin-bottom: 5px;
	}

</style>
<div class="progress-wrap cursor-pointer active-progress">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
	</svg>
	<a href="tel:+84944229938" class="" style="margin-bottom: 10px;">
		<img src="/icon-phone.png" alt="">
	</a>
	<a href="https://zalo.me/0944229938" target="_blank" class="">
		<img src="/icon-zalo.png" alt="">
	</a>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
	<!-- Logo -->
	<div class="logo-wrapper valign">
		<div class="logo">
			<a href="/">
				<img src="/wp-content/uploads/2021/06/op6.svg" class="logo-img" alt="">
				<h2>RULA<span>ARCHITECTS · CONSTRUCTS</span></h2>
			</a>
		</div>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">


	<?php

		$projects = get_terms('product_cat');
		$projectsMenu = [];
		foreach ($projects as $term) {
			$projectsMenu[] = [
				'url' => get_term_link($term),
				'title' => $term->name
			];
		}
		wp_reset_postdata();

		$menu = [
			// [
			// 	'title' => 'Trang chủ',
			// 	'url' => '/',
			// ],
           [
				'title' => 'Trang chủ',
				'url' => '/',
			],
			[
				'title' => 'Giới thiệu',
				'url' => '/ve-rula',
			],
			[
				'title' => 'Dịch vụ',
				'url' => '/dich-vu',
				'children' => [
						[
							'title' => 'Thiết kế',
							'url' => '/dich-vu/thiet-ke/',
						],
						[
							'title' => 'Thi công',
							'url' => '/dich-vu/thi-cong/',
						],
					    [
							'title' => 'Thiết kế bộ nhận diện',
							'url' => '/dich-vu/thiet-ke-bo-nhan-dien/',
						],
					]
			],
			[
							'title' => 'Bảng giá',
							'url' => '/bang-gia',
						],
			[
				'title' => 'Dự án',
				'url' => '/danh-sach-du-an/gaming-center/',
			],
			[
				'title' => 'Feedback',
				'url' => '/feedback',
			],
			[
				'title' => 'Blog',
				'url' => '/blog',
				'children' => [
					[
							'title' => 'Tin game',
							'url' => '/tin-game',
						],
						[
							'title' => 'Tin chuyên ngành',
							'url' => '/tin-chuyen-nganh',
						],
						[
							'title' => 'Tuyển dụng',
							'url' => '/category/tuyen-dung',
						],
						[
							'title' => 'FAQs',
							'url' => '/faqs',
						],
					]
			],
			[
				'title' => 'Liên hệ',
				'url' => '/lien-he',
			],
		];
	?>
	<ul id="primary-menu" class="navbar-nav ml-auto">
	<?php foreach ($menu as $key => $item): ?>
		<?php if (isset($item['children'])): ?>
			<li class="nav-item dropdown"> <a class="nav-link"  href="<?php echo $item['url'] ?>"> <?php echo $item['title'] ?> <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu last">
						<?php foreach ($item['children'] as $item2): ?>
							<li class="dropdown-item"><a href="<?php echo $item2['url'] ?>"><?php echo $item2['title'] ?></a></li>
						<?php endforeach; ?>
                    </ul>
                </li>
		<?php else: ?>
			<li class="menu-item"><a class="nav-link" href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a></li>
		<?php endif; ?>

	<?php endforeach; ?>
	</ul>
</div>

</nav>
