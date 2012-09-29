<?php
/*
Author: Todd Motto
URL: html5blank.com

Custom functions, support, custom post types and more.
*/

/* =============================================================================
   External Modules/Files
   ========================================================================== */

   // Load any external files you have here

/* =============================================================================
   Theme Support
   ========================================================================== */
   
   if ( function_exists( 'add_theme_support' ) ) {
   	
   	// Add Menu Support
   	add_theme_support('menus');
	
	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
	add_image_size( 'large', 700, '', true ); // Large Thumbnail
	add_image_size( 'medium', 250, '', true ); // Medium Thumbnail
	add_image_size( 'small', 120, '', true ); // Small Thumbnail
	add_image_size( 'custom-size', 700, 200, true ); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
	
	// Add Support for Custom Backgrounds
	add_theme_support( 'custom-background', array(
		'default-color' => $default_background_color,
   		)
   	  );
   }
   
/* =============================================================================
   Functions
   ========================================================================== */
   
   // Load Custom Theme Scripts using Enqueue
   function html5blank_scripts() {

		if(!is_admin()){
   
   		wp_deregister_script( 'jquery' ); // Deregister WordPress jQuery
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', 'jquery', '1.8.2'); // Load Google CDN jQuery
		wp_enqueue_script('jquery'); // Enqueue it!
		
		wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', 'jquery', '2.6.2'); // Modernizr with version Number at the end
		wp_enqueue_script('modernizr'); // Enqueue it!
		
		wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', 'jquery', '1.0.0'); // HTML5 Blank script with version number
		wp_enqueue_script('html5blankscripts'); // Enqueue it!
		
		}
	}
	
	// Loading Conditional Scripts
	function conditional_scripts() {
		if (is_page('pagenamehere')) {
			wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', 'jquery', '1.0.0'); // Our Script for Conditional loading
			wp_enqueue_script('scriptname'); // Enqueue it!
		}
	}
	
	// Theme Stylesheets using Enqueue
	function html5blank_styles() {

		wp_register_style( 'html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
		wp_enqueue_style( 'html5blank' ); // Enqueue it!
	}

	// Register HTML5 Blank's Navigation
	function register_html5_menu() {
	  register_nav_menus(
	    array( // Using array to specify more menus if needed
	      'header-menu' => __( 'Header Menu' ), // Main Navigation
	      'sidebar-menu' => __( 'Sidebar Menu' ), // Sidebar Navigation
	      'extra-menu' => __( 'Extra Menu' ) // Extra Navigation if needed (duplicate as many as you need!)
	    )
	  );
	}

	// Remove the <div> surrounding the dynamic navigation to cleanup markup
	function my_wp_nav_menu_args( $args = '' ) {
		$args['container'] = false;
		return $args;
	}

	// Remove Injected classes, ID's and Page ID's from Navigation <li> items
	function my_css_attributes_filter($var) {
		return is_array($var) ? array() : '';
	}
	
	// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
	function add_slug_to_body_class( $classes ) {
		global $post;
		if( is_home() ) {			
			$key = array_search( 'blog', $classes );
			if($key > -1) {
				unset( $classes[$key] );
			};
		} elseif( is_page() ) {
			$classes[] = sanitize_html_class( $post->post_name );
		} elseif(is_singular()) {
			$classes[] = sanitize_html_class( $post->post_name );
		};

		return $classes;
	}
	
	// If Dynamic Sidebar Exists
	if(function_exists('register_sidebar')) {
	
		// Define Sidebar Widget Area 1
		register_sidebar(array(
			'name' => 'Widget Area 1',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		
		// Define Sidebar Widget Area 2
		register_sidebar(array(
			'name' => 'Widget Area 2',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
	}

	// Remove wp_head() injected Recent Comment styles
	function my_remove_recent_comments_style() {
		global $wp_widget_factory;
		remove_action(
			'wp_head',
			array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 
			'recent_comments_style'
			)
		);
	}
	
	// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
	function html5wp_pagination() {
		global $wp_query;
		$big = 999999999;
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages )
		);
	}

	// Custom Excerpts
	function html5wp_index($length) { // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
	    return 20;
	}
	function html5wp_custom_post($length) { // Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
	    return 40;
	}

	// Create the Custom Excerpts callback
	function html5wp_excerpt($length_callback='', $more_callback='') {
	    global $post;
	    if(function_exists($length_callback)){
	        add_filter('excerpt_length', $length_callback);
	    }
	    if(function_exists($more_callback)){
	        add_filter('excerpt_more', $more_callback);
	    }
	    $output = get_the_excerpt();
	    $output = apply_filters('wptexturize', $output);
	    $output = apply_filters('convert_chars', $output);
	    $output = '<p>'.$output.'</p>';
	    echo $output;
	}
	
	// Custom View Article link to Post
	function html5wp_view_article($more) {
		return '... <a class="view-article" href="'. get_permalink($post->ID) . '">' . 'View Article' . '</a>';
	}
	
	// Remove Admin bar
	function remove_admin_bar(){
	    return false;
	}
	
	// Remove 'text/css' from our enqueued stylesheet
	function html5_style_remove($tag) {
		return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
	}

/* =============================================================================
   Actions + Filters + ShortCodes
   ========================================================================== */

   // Actions
   add_action('init', 'html5blank_scripts'); // Add Custom Scripts
   add_action('wp_print_scripts', 'conditional_scripts'); // Add Conditional Page Scripts
   add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
   add_action( 'init', 'register_html5_menu' ); // Add HTML5 Blank Menu
   add_action( 'init', 'create_post_type_html5' ); // Add our HTML5 Blank Custom Post Type
   add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
   add_action( 'init', 'html5wp_pagination' ); // Add our HTML5 Pagination
   
   // Remove Actions
   remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
   remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
   remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
   remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
   remove_action( 'wp_head', 'index_rel_link' ); // index link
   remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
   remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
   remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
   remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
   remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
   remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head',10, 0 );
   remove_action( 'wp_head', 'rel_canonical');
   remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
   
   // Filters
   add_filter( 'body_class', 'add_slug_to_body_class' ); // Add slug to body class (Starkers build)
   add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
   add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
   add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); // Remove surrounding <div> from WP Navigation
   add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes
   add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID
   add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's
   add_filter('excerpt_more', 'html5wp_view_article'); // Add 'View Article' button instead of [...] for Excerpts
   add_filter( 'show_admin_bar' , 'remove_admin_bar'); // Remove Admin bar
   add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
   
   // Shortcodes
   add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
   add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.
   
   // Shortcodes above would be nested like this -
   // [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]
   
/* =============================================================================
   Custom Post Types
   ========================================================================== */

	function create_post_type_html5() { // Create 1 Custom Post type for a Demo, called HTML5-Blank
			register_taxonomy_for_object_type('category','html5-blank'); // Register Taxonomies for Category
			register_taxonomy_for_object_type('post_tag','html5-blank');
	        register_post_type( 'html5-blank', // Register Custom Post Type
	                array(
	                        'labels' => array(
	                                'name' => __( 'HTML5 Blank Custom Post' ), // Rename these to suit
									'singular_name' => __( 'HTML5 Blank Custom Post' ),
									'add_new' => __( 'Add New' ),
									'add_new_item' => __( 'Add New HTML5 Blank Custom Post' ),
									'edit' => __( 'Edit' ),
									'edit_item' => __( 'Edit HTML5 Blank Custom Post' ),
									'new_item' => __( 'New HTML5 Blank Custom Post' ),
									'view' => __( 'View HTML5 Blank Custom Post' ),
									'view_item' => __( 'View HTML5 Blank Custom Post' ),
									'search_items' => __( 'Search HTML5 Blank Custom Post' ),
									'not_found' => __( 'No HTML5 Blank Custom Posts found' ),
									'not_found_in_trash' => __( 'No HTML5 Blank Custom Posts found in Trash' ),
	                        ),
	                'public' => true,
	                'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
	                'has_archive' => true,
					'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ), // Go to Dashboard Custom HTML5 Blank post for supports
					'can_export' => true, // Allows export in Tools > Export
					'taxonomies' => array( 'post_tag', 'category'), // Add Category and Post Tags support
	                )
	        );
	}

/* =============================================================================
   Shortcodes
   ========================================================================== */
   
   	// Shortcode Demo with Nested Capability
	function html5_shortcode_demo( $atts, $content = null ) {  
	    return '<div class="shortcode-demo">'.do_shortcode($content).'</div>'; // do_shortcode allows for nested Shortcodes
	}

	// Shortcode Demo with simple <h2> tag
	function html5_shortcode_demo_2( $atts, $content = null ) { // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
	    return '<h2>'.$content.'</h2>';
	}
    
?>