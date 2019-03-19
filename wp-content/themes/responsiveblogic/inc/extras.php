<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package responsiveblogic
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function responsiveblogic_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'responsiveblogic_body_classes' );

/**
 * Custom excerpt more
 */
function responsiveblogic_custom_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	return '&hellip; ';
}
add_filter( 'excerpt_more', 'responsiveblogic_custom_excerpt_more' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function responsiveblogic_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'responsiveblogic_pingback_header' );

function responsiveblogic_light_get_image_src( $image_id, $size = 'full' ) {
	$img_attr = wp_get_attachment_image_src( intval( $image_id ), $size );
	if ( ! empty( $img_attr[0] ) ) {
		return $img_attr[0];
	}
}




/**
 * Load theme information customizer.
 */
require_once( trailingslashit( get_template_directory() ) . 'customizer-cta/class-customize.php' );


/**
 * Load theme information site css.
 */

function responsiveblogic_themepage_css_loop( $hook ) {
	if ( 'appearance_page_responsiveblogic-themepage' !== $hook ) {
		return;
	}
	wp_enqueue_style( 'responsiveblogic-tp-css', get_template_directory_uri() . '/css/tp.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'responsiveblogic_themepage_css_loop' );

/**
 * Load theme information site html.
 */
add_action( 'admin_menu', 'responsiveblogic_tp' );
function responsiveblogic_tp() {
	add_theme_page( __('ResponsiveBlogic', 'responsiveblogic'), __('ResponsiveBlogic', 'responsiveblogic'), 'edit_theme_options', 'responsiveblogic-themepage.php', 'coporatebits_theme_page_css');
}

function coporatebits_theme_page_css(){ ?>
<div class="DesignLab-tp">
	<div class="DesignLab-tp-leftside">
		<h2><?php esc_html_e( 'Contact Support', 'responsiveblogic' ); ?></h2>

		<div class="tp-info-box">
			<h3>ResponsiveBlogic Premium</h3>
			<p><?php esc_html_e( 'While sharing a large part of the codebase and design, our premium version has a sprinkle of uniqueness and a bunch of extra features.', 'responsiveblogic' ); ?> 
				</p>
				<a class="tp-button" target="_blank" href="http://develobots.com/responsiveblogic"><?php esc_html_e( 'View Pro version', 'responsiveblogic' ); ?></a>
			</div>

			<div class="tp-info-box">
				<h3><?php esc_html_e( 'DesignLab Contact', 'responsiveblogic' ); ?></h3>
				<p><?php esc_html_e( 'Please be ware that we cannot assist with plugin issues, only theme related issues. If you are having issues setting the theme up, or if you have questions please contact us by clicking the button below', 'responsiveblogic' ); ?></p>
				<a class="tp-button" target="_blank" href="http://develobots.com/contact/"><?php esc_html_e( 'Contact DesignLab', 'responsiveblogic' ); ?></a>
			</div>

			<h2>Useful Plugins</h2>
			<div class="tp-info-box">
				<h3><?php esc_html_e( 'Yoast SEO', 'responsiveblogic' ); ?></h3>
				<p><?php esc_html_e( 'Write better content and have a fully optimized WordPress site using the Yoast SEO plugin.', 'responsiveblogic' ); ?></p>
				<a class="tp-button" target="_blank" href="https://wordpress.org/plugins/wordpress-seo/"><?php esc_html_e( 'Download Plugin', 'responsiveblogic' ); ?></a>
			</div>

			<div class="tp-info-box">
				<h3><?php esc_html_e( 'WP Super Cache', 'responsiveblogic' ); ?></h3>
				<p><?php esc_html_e( 'A very fast caching engine for WordPress that produces static html files.', 'responsiveblogic' ); ?></p>
				<a class="tp-button" target="_blank" href="https://wordpress.org/plugins/wp-super-cache/">Download Plugin</a>
			</div>

			<div class="tp-info-box">
				<h3><?php esc_html_e( 'Google Analaytics for WP', 'responsiveblogic' ); ?></h3>
				<p><?php esc_html_e( 'The best Google Analytics plugin for WordPress. See how visitors find and use your website.', 'responsiveblogic' ); ?></p>
				<a class="tp-button" target="_blank" href="https://wordpress.org/plugins/google-analytics-for-wordpress/"><?php esc_html_e( 'Download Plugin', 'responsiveblogic' ); ?></a>
			</div>
		</div>
	</div>
	<?php }



