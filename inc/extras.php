creativity_<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_filter( 'body_class', 'creativity_body_classes' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function creativity_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a body class based on the presence of a sidebar.
	$sidebar_pos = get_theme_mod( 'creativity_sidebar_position' );
	if ( is_page_template( 'page-templates/fullwidthpage.php' ) ) {
		$classes[] = 'creativity-no-sidebar';
	} elseif (
		is_page_template(
			array(
				'page-templates/both-sidebarspage.php',
				'page-templates/left-sidebarpage.php',
				'page-templates/right-sidebarpage.php',
			)
		)
	) {
		$classes[] = 'creativity-has-sidebar';
	} elseif ( 'none' !== $sidebar_pos ) {
		$classes[] = 'creativity-has-sidebar';
	} else {
		$classes[] = 'creativity-no-sidebar';
	}
	return $classes;
}

if ( function_exists( 'creativity_adjust_body_class' ) ) {
	/*
	 * creativity_adjust_body_class() deprecated in v0.9.4. We keep adding the
	 * filter for child themes which use their own creativity_adjust_body_class.
	 */
	add_filter( 'body_class', 'creativity_adjust_body_class' );
}

// Filter custom logo with correct classes.
add_filter( 'get_custom_logo', 'creativity_change_logo_class' );

/**
 * Replaces logo CSS class.
 *
 * @param string $html Markup.
 *
 * @return string
 */
function creativity_change_logo_class( $html ) {
	$html = str_replace( 'class="custom-logo"', 'class="img-fluid"', $html );
	$html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html );
	$html = str_replace( 'alt=""', 'title="Home" alt="logo"', $html );

	return $html;
}


/**
 * Add a pingback url auto-discovery header for single posts of any post type.
 */
function creativity_pingback() {
	if ( is_singular() && pings_open() ) {
	echo '<link rel="pingback" href="' . esc_url( get_bloginfo( 'pingback_url' ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'creativity_pingback' );

function creativity_mobile_web_app_meta() {
	echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
	echo '<meta name="apple-mobile-web-app-title" content="' . esc_attr( get_bloginfo( 'name' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
}
add_action( 'wp_head', 'creativity_mobile_web_app_meta' );

/**
 * Adds schema markup to the body element.
 *
 * @param array $atts An associative array of attributes.
 * @return array
 */
function creativity_default_body_attributes( $atts ) {
	$atts['itemscope'] = '';
	$atts['itemtype']  = 'http://schema.org/WebSite';
	return $atts;
}
add_filter( 'creativity_body_attributes', 'creativity_default_body_attributes' );

// Escapes all occurances of 'the_archive_description'.
add_filter( 'get_the_archive_description', 'creativity_escape_the_archive_description' );

/**
 * Escapes the description for an author or post type archive.
 *
 * @param string $description Archive description.
 * @return string Maybe escaped $description.
 */
function creativity_escape_the_archive_description( $description ) {
	if ( is_author() || is_post_type_archive() ) {
		return wp_kses_post( $description );
	}
	/*
	 * All other descriptions are retrieved via term_description() which returns
	 * a sanitized description.
	 */
	return $description;
} // End of if function_exists( 'creativity_escape_the_archive_description' ).

// Escapes all occurances of 'the_title()' and 'get_the_title()'.
add_filter( 'the_title', 'creativity_kses_title' );

// Escapes all occurances of 'the_archive_title' and 'get_the_archive_title()'.
add_filter( 'get_the_archive_title', 'creativity_kses_title' );


/**
	 * Sanitizes data for allowed HTML tags for post title.
	 *
	 * @param string $data Post title to filter.
	 * @return string Filtered post title with allowed HTML tags and attributes intact.
	 */
function creativity_kses_title( $data ) {
	// Tags not supported in HTML5 are not allowed.
	$allowed_tags = array(
		'abbr'             => array(),
		'aria-describedby' => true,
		'aria-details'     => true,
		'aria-label'       => true,
		'aria-labelledby'  => true,
		'aria-hidden'      => true,
		'b'                => array(),
		'bdo'              => array(
		'dir' => true,
		),
		'blockquote'       => array(
			'cite'     => true,
			'lang'     => true,
			'xml:lang' => true,
		),
		'cite'             => array(
			'dir'  => true,
			'lang' => true,
		),
		'dfn'              => array(),
		'em'               => array(),
		'i'                => array(
			'aria-describedby' => true,
			'aria-details'     => true,
			'aria-label'       => true,
			'aria-labelledby'  => true,
			'aria-hidden'      => true,
			'class'            => true,
		),
		'code'             => array(),
		'del'              => array(
			'datetime' => true,
		),
		'img'              => array(
			'src'    => true,
			'alt'    => true,
			'width'  => true,
			'height' => true,
			'class'  => true,
			'style'  => true,
		),
		'ins'              => array(
			'datetime' => true,
			'cite'     => true,
		),
		'kbd'              => array(),
		'mark'             => array(),
		'pre'              => array(
			'width' => true,
		),
		'q'                => array(
			'cite' => true,
		),
		's'                => array(),
		'samp'             => array(),
		'span'             => array(
			'dir'      => true,
			'align'    => true,
			'lang'     => true,
			'xml:lang' => true,
		),
		'small'            => array(),
		'strong'           => array(),
		'sub'              => array(),
		'sup'              => array(),
		'u'                => array(),
		'var'              => array(),
	);
	$allowed_tags = apply_filters( 'creativity_kses_title', $allowed_tags );
	return wp_kses( $data, $allowed_tags );
} // End of if function_exists( 'creativity_kses_title' ).

/**
 * Hides the posted by markup in `creativity_posted_on()`.
 *
 * @param string $byline Posted by HTML markup.
 * @return string Maybe filtered posted by HTML markup.
 */
function creativity_hide_posted_by( $byline ) {
	if ( is_author() ) {
		return '';
	}
	return $byline;
}
add_filter( 'creativity_posted_by', 'creativity_hide_posted_by' );

add_filter( 'excerpt_more', 'creativity_custom_excerpt_more' );

/**
 * Removes the ... from the excerpt read more Link
 *
 * @param string $more The excerpt.
 *
 * @return string
 */
function creativity_custom_excerpt_more( $more ) {
	if ( ! is_admin() ) {
		$more = '';
	}
	return $more;
}

add_filter( 'wp_trim_excerpt', 'creativity_all_excerpts_get_more_link' );

/**
 * Adds a custom read more link to all excerpts, manually or automatically generated
 *
 * @param string $post_excerpt Posts's excerpt.
 *
 * @return string
 */
function creativity_all_excerpts_get_more_link( $post_excerpt ) {
	if ( ! is_admin() ) {
		$post_excerpt = $post_excerpt . ' [...]<p><a class="btn btn-secondary creativity-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __(
			'Read More...',
			'creativity'
		) . '<span class="screen-reader-text"> from ' . get_the_title( get_the_ID() ) . '</span></a></p>';
	}
	return $post_excerpt;
}

/**
 * Returns true if a blog has more than 1 category, else false.
 *
 * @author WebDevStudios
 *
 * @return bool Whether the blog has more than one category.
 */
function creativity_categorized_blog() {
	$category_count = get_transient( 'creativity_categories' );

	if ( false === $category_count ) {
		$category_count_query = get_categories( [ 'fields' => 'count' ] );

		$category_count = isset( $category_count_query[0] ) ? (int) $category_count_query[0] : 0;

		set_transient( 'creativity_categories', $category_count );
	}

	return $category_count > 1;
}

/**
 * Get an attachment ID from it's URL.
 *
 * @author WebDevStudios
 *
 * @param string $attachment_url The URL of the attachment.
 *
 * @return int    The attachment ID.
 */
function creativity_get_attachment_id_from_url( $attachment_url = '' ) {
	global $wpdb;

	$attachment_id = false;

	// If there is no url, return.
	if ( '' === $attachment_url ) {
		return false;
	}

	// Get the upload directory paths.
	$upload_dir_paths = wp_upload_dir();

	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image.
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {

		// If this is the URL of an auto-generated thumbnail, get the URL of the original image.
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );

		// Remove the upload path base directory from the attachment URL.
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );

		// Do something with $result.
		// phpcs:ignore phpcs:ignore WordPress.DB -- db call ok, cache ok, placeholder ok.
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM {$wpdb->posts} wposts, {$wpdb->postmeta} wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = %s AND wposts.post_type = 'attachment'", $attachment_url ) );
	}

	return $attachment_id;
}

/**
 * Shortcode to display copyright year.
 *
 * @author Haris Zulfiqar
 *
 * @param array $atts Optional attributes.
 *     $starting_year Optional. Define starting year to show starting year and current year e.g. 2015 - 2018.
 *     $separator Optional. Separator between starting year and current year.
 *
 * @return string Copyright year text.
 */
function creativity_copyright_year( $atts ) {
	// Setup defaults.
	$args = shortcode_atts(
		[
			'starting_year' => '',
			'separator'     => ' - ',
		],
		$atts
	);

	$current_year = gmdate( 'Y' );

	// Return current year if starting year is empty.
	if ( ! $args['starting_year'] ) {
		return $current_year;
	}

	return esc_html( $args['starting_year'] . $args['separator'] . $current_year );
}

add_shortcode( 'creativity_copyright_year', 'creativity_copyright_year', 15 );

/**
 * Retrieve the URL of the custom logo uploaded, if one exists.
 *
 * @author Corey Collins
 */
function creativity_get_custom_logo_url() {

	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $custom_logo_id ) {
		return;
	}

	$custom_logo_image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

	if ( ! isset( $custom_logo_image[0] ) ) {
		return;
	}

	return $custom_logo_image[0];
}
