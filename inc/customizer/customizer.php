<?php
/**
 * Set up the theme customizer.
 *
 * @package _s
 */

/**
 * Removes default customizer fields that we generally don't use.
 *
 * @param object $wp_customize The default Customizer settings.
 * @author Corey Collins
 */
function _s_remove_default_customizer_sections( $wp_customize ) {

	// Remove sections.
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'colors' );
}
add_action( 'customize_register', '_s_remove_default_customizer_sections', 15 );

/**
 * Include other customizer files.
 *
 * @author WebDevStudios
 */
function _s_include_custom_controls() {
	require get_template_directory() . '/inc/customizer/panels.php';
	require get_template_directory() . '/inc/customizer/sections.php';
	require get_template_directory() . '/inc/customizer/settings.php';
	require get_template_directory() . '/inc/customizer/class-text-editor-custom-control.php';
}
add_action( 'customize_register', '_s_include_custom_controls', -999 );

/**
 * Enqueue customizer related scripts.
 *
 * @author WebDevStudios
 */
function _s_customize_scripts() {
	wp_enqueue_script( '_s-customize-livepreview', get_template_directory_uri() . '/inc/customizer/assets/scripts/livepreview.js', [ 'jquery', 'customize-preview' ], '1.0.0', true );
}
add_action( 'customize_preview_init', '_s_customize_scripts' );

/**
 * Add support for the fancy new edit icons.
 *
 * @param object $wp_customize Instance of WP_Customize_Class.
 *
 * @author WebDevStudios
 * @link https://make.wordpress.org/core/2016/02/16/selective-refresh-in-the-customizer/.
 */
function _s_selective_refresh_support( $wp_customize ) {

	// The <div> classname to append edit icon too.
	$settings = [
		'blogname'          => '.site-title a',
		'blogdescription'   => '.site-description',
		'_s_copyright_text' => '.site-info',
	];

	// Loop through, and add selector partials.
	foreach ( (array) $settings as $setting => $selector ) {
		$args = [ 'selector' => $selector ];
		$wp_customize->selective_refresh->add_partial( $setting, $args );
	}
}
add_action( 'customize_register', '_s_selective_refresh_support' );

/**
 * Add live preview support via postMessage.
 *
 * Note: You will need to hook this up via livepreview.js
 *
 * @author WebDevStudios
 *
 * @param object $wp_customize Instance of WP_Customize_Class.
 * @link https://codex.wordpress.org/Theme_Customization_API#Part_3:_Configure_Live_Preview_.28Optional.29.
 */
function _s_live_preview_support( $wp_customize ) {

	// Settings to apply live preview to.
	$settings = [
		'blogname',
		'blogdescription',
		'header_textcolor',
		'background_image',
		'_s_copyright_text',
	];

	// Loop through and add the live preview to each setting.
	foreach ( (array) $settings as $setting_name ) {

		// Try to get the customizer setting.
		$setting = $wp_customize->get_setting( $setting_name );

		// Skip if it is not an object to avoid notices.
		if ( ! is_object( $setting ) ) {
			continue;
		}

		// Set the transport to avoid page refresh.
		$setting->transport = 'postMessage';
	}
}
add_action( 'customize_register', '_s_live_preview_support', 999 );
