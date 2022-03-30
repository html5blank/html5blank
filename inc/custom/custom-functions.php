<?php
/**
 * Get Pages by Template
*/
function get_pages_by_template( $template_page = null ){
	if( !is_null( $template_page ) ){
		$pages_tpl = get_pages( array(
			'meta_key' => '_wp_page_template',
			'meta_value' => $template_page
		));
	}

	return $pages_tpl;
}


/**
* Get Breadcrumb
*/
function get_breadcrumb() {
	global $post;

	echo "<ul class='breadcrumb secondary-font'>";
		echo '<li><a href="' . home_url() . '">Homepage&nbsp;</a></li>';

		if( !is_tax() ){
			if( is_page() ){
				$id_p = wp_get_post_parent_id( get_the_ID() );
				if( $id_p && $id_p != 0 ){
					echo "<li><a href=" . get_the_permalink( $id_p ) . ">" . "&nbsp;" . get_the_title( $id_p ) . " </a></li>";
				}
			}
			elseif( is_post_type_archive() || is_single() ) {

				$post_type_name = is_post_type_archive()
					?  post_type_archive_title( '', false )
					:  $post->post_type;

				echo "<li><a href=" . get_post_type_archive_link( get_post_type() ) . ">" . "|&nbsp;" . $post_type_name . "&nbsp;</a></li>";

			}
			if( !is_post_type_archive() ) {
				echo "<li><a href=" . get_the_permalink( get_the_ID() ) . ">" . "|&nbsp;" . get_the_title( get_the_ID() ) . "</a></li>";
			}
		}

    echo "</ul>";
}


/**
* Get Alt Text
*/
function get_alt_text( $post_block ) {
	if( is_object( $post_block ) ) {
		$alt = get_post_meta ( get_post_thumbnail_id( $post_block->ID ), '_wp_attachment_image_alt', true );
	}

	if( is_array( $post_block ) )  { //ACF field
		if( $post_block[ 'type' ] === 'image' ) { //$post_block = get_field( $acf_array_img )
			$alt = $post_block[ 'alt' ];
		}
		else {
			$alt = $post_block[ 'image' ][ 'alt' ]; //$post_block = $single_block_array (repeater single block)
		}
	}

	return __( esc_html( $alt ), 'lprd' );
}



/**
* WPML Functions:
*
* function my_flag_only_language_switcher() {
*	$all_languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
*	if ( $all_languages && is_array( $all_languages ) ){
*		return $all_languages;
*	}
*	else {
*		$all_languages = icl_get_languages( 'skip_missing=N&orderby=KEY' );
*		return $all_languages;
*	}
* }

* function get_dynamic_home_url() {
* 	return apply_filters( 'wpml_home_url', get_option( 'home' ) );
* }

* function get_different_languages_url( $dynamic_url ) {
*	return apply_filters( 'wpml_permalink', $dynamic_url);
* }
*/


