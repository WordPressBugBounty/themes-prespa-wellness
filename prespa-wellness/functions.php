<?php
/**
 * Prespa Wellness functions and definitions
 *
 * @since 1.0.0
 */

define( 'PRESPA_THEME_LOGO_URL', get_stylesheet_directory_uri() . '/admin/img/theme-logo.jpg' );

/**
 * Register child theme's styles
 */
function prespa_wellness_enqueue_theme_styles() {
	wp_enqueue_style( 'prespa-wellness-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'prespa_wellness_enqueue_theme_styles' );

/**
 * Registers block patterns categories, and type.
 */
function prespa_wellness_register_block_patterns() {
	$block_pattern_categories = array(
		'prespa-wellness' => array( 'label' => esc_html__( 'Prespa Wellness', 'prespa-wellness' ) ),
	);

	$block_pattern_categories = apply_filters( 'prespa_wellness_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'prespa_wellness_register_block_patterns', 9 );

// Change theme defaults in the customizer preview
function prespa_wellness_customize_register( $wp_customize ) {
	$primary_accent_color_setting   = $wp_customize->get_setting( 'primary_accent_color' );
	$secondary_accent_color_setting = $wp_customize->get_setting( 'secondary_accent_color' );
	$body_bgr_color_setting         = $wp_customize->get_setting( 'body_bgr_color' );
	$content_layout_setting         = $wp_customize->get_setting( 'content_layout' );
	$header_button_text             = $wp_customize->get_setting( 'header_button_text' );

	if ( $primary_accent_color_setting ) {
		$primary_accent_color_setting->default = '#d6aea2';
	}

	if ( $body_bgr_color_setting ) {
		$body_bgr_color_setting->default = '#faf7f6';
	}

	if ( $secondary_accent_color_setting ) {
		$secondary_accent_color_setting->default = '#f5f5f5';
	}

	if ( $header_button_text ) {
		$header_button_text->default = '';
	}
}

add_action( 'customize_register', 'prespa_wellness_customize_register', 999, 1 );

// Overwrite parent theme customizer defaults
function prespa_customizer_values( $value ) {
	$defaults = array(
		'primary_accent_color'   => '#d6aea2',
		'secondary_accent_color' => '#f5f5f5',
		'body_bgr_color'         => '#faf7f6',
		'headings_text_color'      => '#404040',
		'link_headings_text_color' => '#404040',
		'content_layout'         => 'seperate_containers',
		'header_button_text'     => '',
		'has_secondary_menu'     => false,
		'header-menu-position'   => 'static',
		'woo_btn_bgr_color'      => '',
		'woo_btn_text_color'     => '',
	);
	// Return the value from the theme mod, or fallback to the default
	return get_theme_mod( $value, $defaults[ $value ] );
}

// Disable dark mode option from parent theme
function prespa_wellness_remove_dark_mode_setting( $wp_customize ) {
	$wp_customize->remove_section( 'night_mode' );
}

add_action( 'customize_register', 'prespa_wellness_remove_dark_mode_setting', 20 );

function prespa_primary_menu_dark_mode_markup() {
	return null;
}

function prespa_starter_content_setup() {
	$default_page_content = '
	<!-- wp:pattern {"slug":"prespa-wellness/header"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/heading-with-text"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/categories"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/features"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/case-studies"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/features-2"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/cta"} /-->
	<!-- wp:pattern {"slug":"prespa-wellness/atricles"} /-->
	';

	add_theme_support(
		'starter-content',
		array(
			'posts'     => array(
				'home'  => array(
					'post_type'    => 'page',
					'post_title'   => _x( 'Home', 'Theme starter content', 'prespa-wellness' ),
					'post_content' => $default_page_content,
				),
				'blog'
			),
			'options'   => array(
                'show_on_front'  => 'page',
                'page_on_front'  => '{{home}}',
                'page_for_posts' => '{{blog}}'
            ),
			'nav_menus' => array(
                'menu-1' => array(
                    'name'  => __( 'Primary', 'prespa-wellness' ),
                    'items' => array(
                        'page_home',
                        'page_blog',
                    ),
                ),
            )
		)
	);
}

require get_stylesheet_directory() . '/tgm/plugin-activation.php';
require get_stylesheet_directory() . '/tgm/recommended-plugins.php';
