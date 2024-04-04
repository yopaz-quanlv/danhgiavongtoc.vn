<?php


	class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

		// Hàm bắt đầu (start) của một phần tử menu
		public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$args = (object) $args;

			// Kiểm tra nếu menu có thêm dropdown
			$has_children = !empty($args->has_children) ? ' dropdown' : '';

			// Xác định nếu mục hiện tại có mục con
			$args->li_class_names = $has_children ? 'nav-item dropdown' : 'nav-item';

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			// Tạo ID cho mục menu
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			// Xây dựng phần tử menu
			$output .= $indent . '<li' . $id . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
			$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

			// Kiểm tra nếu mục có thêm dropdown
			if($has_children){
				$atts['class'] = 'nav-link dropdown-toggle';
				$atts['data-toggle'] = 'dropdown';
				$atts['aria-haspopup'] = 'true';
				$atts['aria-expanded'] = 'false';
			} else {
				$atts['class'] = 'nav-link';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$title = apply_filters( 'the_title', $item->title, $item->ID );

			// Tạo link cho mục menu
			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		// Hàm bắt đầu (start) của một phần tử mục menu có dropdown
		public function start_lvl( &$output, $depth = 0, $args = null ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
		}

		// Hàm kết thúc (end) của một phần tử mục menu
		public function end_el( &$output, $item, $depth = 0, $args = null ) {
			$output .= "</li>\n";
		}

		// Hàm kết thúc (end) của một phần tử mục menu có dropdown
		public function end_lvl( &$output, $depth = 0, $args = null ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "$indent</ul>\n";
		}
	}
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
	<a href="tel:0932268778" class="" style="margin-bottom: 10px;">
		<img src="/icon-phone.png" alt="">
	</a>
	<a href="https://zalo.me/0932268778" target="_blank" class="">
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
			</a>
		</div>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">


	<?php

		wp_nav_menu(array(
			'theme_location' => 'menu-1', // Sử dụng menu đã đăng ký có tên là 'primary-menu'.
			'menu_id' => 'primary-menu', // ID của menu.
			'menu_class' => 'navbar-nav ml-auto', // Lớp CSS của menu.
			'container' => false, // Không sử dụng container cho menu.
			'depth' => 2, // Số cấp menu tối đa.
			'fallback_cb' => false, // Không có callback nếu menu không tồn tại.
			'walker' => new WP_Bootstrap_Navwalker(), // Sử dụng walker cho menu, điều này cần được khai báo trước.
		));
	?>
	
</div>

</nav>
