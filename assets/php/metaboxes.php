<?php
function generic_metaboxes() {
	// Start with an underscore to hide fields from custom fields list
	global $options;
	// $prefix = 'startime_';
	$prefix = $options['prefix'];

	/**
	 * Initiate the metabox
	 */
	if(isset($_GET['post'])){
		$post_id = $_GET['post'];
	} elseif(isset($_POST['post_ID'])){
		$post_id = $_POST['post_ID'];
	} else {
		$post_id='';
	}
	$mpost=get_post($post_id);
	// print_r($post_id);
	//$post_id = get_the_ID() ;
	$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);
	// $pt=get_post_type($post_id);
	// $pt=get_current_screen()->post_type;
	// check for a template type

}
