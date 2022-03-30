<?php
/**
 * Removes Admin Bar if User not Logged in
*/
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	if(!is_user_logged_in()){
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
}


/**
* Removes Comment Support from Posts and Pages
*/
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}


/**
* Removes Posts and Comments from Admin Dashboard
*/
function remove_menu_items(){
	global $menu;
	$restricted = array(
  		__('Posts'),
  		__('Comments'),
	);
  	end ($menu);
  	while (prev($menu)){
    	$value = explode(' ',$menu[key($menu)][0]);
    	if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
      		unset($menu[key($menu)]);
      	}
    }
}
add_action('admin_menu', 'remove_menu_items');



/**
* Remove +New post in top Admin Menu Bar
*/
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}
