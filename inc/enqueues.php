<?php
/**
 * Styles and Scripts
*/
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );

function theme_styles_and_scripts() {
        // CSS
        wp_register_style('main-style', get_template_directory_uri() . '/style.css', array(), 'all');


        wp_enqueue_style('main-style');

        // JS
        wp_enqueue_script('main-js', get_template_directory_uri() . '/main.min.js', array(), '', true);
}
function understrap_scripts() {
  // Get the theme data.
  $the_theme         = wp_get_theme();
  $theme_version     = $the_theme->get( 'Version' );
  $bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
  $suffix            = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

  // Grab asset urls.
  $theme_styles  = "/css/theme{$suffix}.css";
  $theme_scripts = "/js/theme{$suffix}.js";
  if ( 'bootstrap4' === $bootstrap_version ) {
    $theme_styles  = "/css/theme-bootstrap4{$suffix}.css";
    $theme_scripts = "/js/theme-bootstrap4{$suffix}.js";
  }

  $css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
  wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );

  wp_enqueue_script( 'jquery' );

  $js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
  wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . $theme_scripts, array(), $js_version, true );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

function _s_scripts() {
	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}


  // Register styles & scripts.
	wp_enqueue_style( 'wd_s', get_stylesheet_directory_uri() . '/build/index.css', [], $asset_file['version'] );
	wp_enqueue_script( 'wds-scripts', get_stylesheet_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Preload styles and scripts.
 *
 * @author WebDevStudios
 */
function _s_preload_scripts() {
	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	?>
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.css?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="style">
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.js?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="script">
	<?php
}
add_action( 'wp_head', '_s_preload_scripts', 1 );

/**
 * Preload assets.
 *
 * @author Corey Collins
 */
function _s_preload_assets() {
	?>
	<?php if ( _s_get_custom_logo_url() ) : ?>
		<link rel="preload" href="<?php echo esc_url( _s_get_custom_logo_url() ); ?>" as="image">
	<?php endif; ?>
	<?php
}
add_action( 'wp_head', '_s_preload_assets', 1 );
