<?php
/**
 * Author: Todd Motto | @toddmotto
 * URL: html5blank.com | @html5blank
 * Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

// CMB2
if ( file_exists( dirname( __FILE__ ) . '/assets/php/cmb2/init.php' ) ) {
  require_once dirname( __FILE__ ) . '/assets/php/cmb2/init.php';
} elseif ( file_exists(  dirname( __FILE__ ) . '/assets/php/CMB2/init.php' ) ) {
  require_once dirname( __FILE__ ) . '/assets/php/CMB2/init.php';
}
// CMB2 attached posts
if ( file_exists( dirname( __FILE__ ) . '/assets/php/cmb2-attached-posts/cmb2-attached-posts-field.php' ) ) {
  require_once dirname( __FILE__ ) . '/assets/php/cmb2-attached-posts/cmb2-attached-posts-field.php';
}

// metaboxes include
if ( file_exists( dirname( __FILE__ ) . '/assets/php/metaboxes.php' ) ) {
  require_once dirname( __FILE__ ) . '/assets/php/metaboxes.php';
}

// tabbed admin menu include
if ( file_exists( dirname( __FILE__ ) . '/assets/php/metaboxes.php' ) ) {
  require_once dirname( __FILE__ ) . '/assets/php/metaboxes.php';
}

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (!isset($content_width)){
    $content_width = 900;
}

if (function_exists('add_theme_support')){

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true);
    add_image_size('main-review', 230, 230, true);
    add_image_size('about-photo', 350, 350, true);
    add_image_size('news-img', 355, 237, true);
    add_image_size('main-projects', 700, 418, true);
    add_image_size('main-photos', 901, 600, true);
    add_image_size('feat-projects-photos', 960, 530, true);
    add_image_size('main-videos', 340, 191, true);
    add_image_size('single-header', 1600, '', true);
    add_image_size('genpartner', 430, '', true);
    add_image_size('nominations-img', 446, 384, true);
    add_image_size('schoolproj-mainimg-loop', 376, 435, true);

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
    'default-color' => 'FFF',
    'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
    'default-image'          => get_template_directory_uri() . '/img/headers/default.jpg',
    'header-text'            => false,
    'default-text-color'     => '000',
    'width'                  => 1000,
    'height'                 => 198,
    'random-default'         => false,
    'wp-head-callback'       => $wphead_cb,
    'admin-head-callback'    => $adminhead_cb,
    'admin-preview-callback' => $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Enable HTML5 support
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    // Localisation Support
    load_theme_textdomain('generic', get_template_directory() . '/assets/languages');
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// Global options Define
function generic_globals(){
	global $options;
	$options['brnc']=get_option('generic_options');
	$options['gnrl']=get_option('general_options');
	$options['socl']=get_option('social_options');
	$options['advd']=get_option('advanced_options');
	$options['translate'] = array(
		"am" => "дп",
		"pm" => "пп",
		"AM" => "ДП",
		"PM" => "ПП",
		"Monday" => "Понедельник",
		"Mon" => "пн",
		"Tuesday" => "Вторник",
		"Tue" => "вт",
		"Wednesday" => "Среда",
		"Wed" => "ср",
		"Thursday" => "Четверг",
		"Thu" => "чт",
		"Friday" => "Пятница",
		"Fri" => "пт",
		"Saturday" => "Суббота",
		"Sat" => "сб",
		"Sunday" => "Воскресенье",
		"Sun" => "вс",
		"January" => "Января",
		"Jan" => "янв",
		"February" => "Февраля",
		"Feb" => "фев",
		"March" => "Марта",
		"Mar" => "мар",
		"April" => "Апреля",
		"Apr" => "апр",
		"May" => "мая",
		"June" => "Июня",
		"Jun" => "июн",
		"July" => "Июля",
		"Jul" => "июл",
		"August" => "Августа",
		"Aug" => "авг",
		"September" => "Сентября",
		"Sep" => "сен",
		"October" => "Октября",
		"Oct" => "окт",
		"November" => "Ноября",
		"Nov" => "ноя",
		"December" => "Декабря",
		"Dec" => "дек",
		"st" => "ое",
		"nd" => "ое",
		"rd" => "е",
		"th" => "ое"
	);
}

// HTML5 Blank navigation
function generic_nav(){
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="header__bottom-menu-list">%3$s</ul>',
        'depth'           => 0,
        'walker'          => new Nav_Menu_Walker
        )
    );
}

// Menu walker
class Nav_Menu_Walker extends Walker_Nav_Menu{
	/**
	 * Start the element output.
	 *
	 * @param  string $output Passed by reference. Used to append additional content.
	 * @param  object $item   Menu item data object.
	 * @param  int $depth     Depth of menu item. May be used for padding.
	 * @param  array $args    Additional strings.
	 * @return void
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){
		// print_r($item);
		$class=($depth>=1) ? 'header__bottom-sub-menu-item' : 'header__bottom-menu-item';
		$class.=($depth==0&&$item->current) ? ' active':'';
		// $class.=($depth>=1 ? 'header__bottom-sub-menu-link ' : 'header__bottom-menu-link ');
		$class.=($depth>=1&&$item->current ? ' active ':'');
		$class.=' d-'.$depth;
		$output.= '<li class="'.$class.'">';
		$jsbtn=(in_array('menu-item-has-children', $item->classes)) ? ' js-drop-btn' : '';
		$attributes  = ($depth>=1) ? ' class="header__bottom-sub-menu-link"' : ' class="header__bottom-menu-link'.$jsbtn.'"';
		if( !empty ( $item->attr_title ) && $item->attr_title !== $item->title ){
			// Avoid redundant titles
			$attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
		} else {
			$title       = apply_filters( 'the_title', $item->title, $item->ID );
			$attributes .= ' title="' . $title .'"';
		}
		! empty ( $item->url )
			and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
		$attributes  = trim( $attributes );
		$title       = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = "$args->before<a $attributes>$args->link_before$title</a>"
						. "$args->link_after$args->after";
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters('walker_nav_menu_start_el',   $item_output,   $item,   $depth,   $args);
	}
	/**
	 * @see Walker::start_lvl()
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return void
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ){
		if($depth>=0){
			$output .= '<div class="js-sub-menu header__bottom-sub-menu"><ul class="header__bottom-sub-menu-list">';
		} else {
			$output .= '<ul class="header__bottom-menu-list">';
		}
	}
	/**
	 * @see Walker::end_lvl()
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return void
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ){
		// $output .= '</ul>';
		if($depth>=0){
			$output .= '</ul></div>';
		} else {
			$output .= '</li>';
		}
	}
	/**
	 * @see Walker::end_el()
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return void
	 */
	function end_el( &$output, $item, $depth = 0, $args = array() ){
		$output .= '</li>';
	}
}

function generic_footer_nav(){
    wp_nav_menu(
    array(
        'theme_location'  => 'footer-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="footer-main-list clearfix">%3$s</ul>',
        'depth'           => 0,
		'walker'          => new Nav_Footer_Menu_Walker
        )
    );
}

// Menu walker
class Nav_Footer_Menu_Walker extends Walker_Nav_Menu{
	/**
	 * Start the element output.
	 *
	 * @param  string $output Passed by reference. Used to append additional content.
	 * @param  object $item   Menu item data object.
	 * @param  int $depth     Depth of menu item. May be used for padding.
	 * @param  array $args    Additional strings.
	 * @return void
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){
		// print_r($item);
		$jsbtn=(in_array('menu-item-has-children', $item->classes)) ? ' js-footer-submenu' : '';
		$class='footer-main__item'.$jsbtn;
		$class.=($depth==0&&$item->current) ? ' active':'';
		$class.=($depth>=1 ? 'footer-main__link ':'');
		$class.=($depth>=1&&$item->current ? 'active ':'');
		$class.=' d-'.$depth;
		$output.= '<li class="'.$class.'">';
		$attributes  = ($depth>=1) ? '' : ' class="footer-main__link"';
		// $attributes  = '';
		if( !empty ( $item->attr_title ) && $item->attr_title !== $item->title ){
			// Avoid redundant titles
			$attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
		} else {
			$title       = apply_filters( 'the_title', $item->title, $item->ID );
			$attributes .= ' title="' . $title .'"';
		}
		! empty ( $item->url )
			and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
		$attributes  = trim( $attributes );
		$title       = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = "$args->before<a $attributes>$args->link_before$title</a>"
						. "$args->link_after$args->after";
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters('walker_nav_menu_start_el',   $item_output,   $item,   $depth,   $args);
	}
	/**
	 * @see Walker::start_lvl()
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return void
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ){
		if($depth>=0){
			$output .= '<ul class="footer-main-sublist">';
		} else {
			$output .= '<ul class="footer-main-list clearfix">';
		}
	}
	/**
	 * @see Walker::end_lvl()
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return void
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ){
		$output .= '</ul>';
	}
	/**
	 * @see Walker::end_el()
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return void
	 */
	function end_el( &$output, $item, $depth = 0, $args = array() ){
		$output .= '</li>';
	}
}

// Load HTML5 Blank scripts (header.php)
function generic_header_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );
		wp_enqueue_script('jquery', '//cdn.jsdelivr.net/g/jquery@2.2.4', array(), '2.2.4');
    }
}

// Load HTML5 Blank conditional scripts
function generic_conditional_scripts(){
    if (is_page('pagenamehere')) {
        // Conditional script(s)
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0');
        wp_enqueue_script('scriptname');
    }
}

// Load HTML5 Blank styles
function generic_styles(){
	// global $post;
	// print_r($GLOBALS);
	wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('simple', get_template_directory_uri().'/assets/css/simple.min.css', array(), '1.0', 'all');
}

// footer scripts
function generic_footer_scripts(){
	wp_deregister_script( 'wp-embed' );
	wp_enqueue_script('footer-scripts', '//cdn.jsdelivr.net/g/jquery.magnific-popup@1.0.0,blazy@1.8.2', array('jquery'), '1.0');
	wp_enqueue_script('slickslider', get_template_directory_uri() . '/assets/js/libs/slick/slick/slick.min.js', array('jquery'), '1.6.1');
	wp_enqueue_script('genericscripts-min', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery', 'jquery.inputmask', 'pickMeUp', 'slickslider'), '1.0.0');
}

//cleanup version tag
function remove_cssjs_ver( $src ) {
	$src = remove_query_arg( array('v', 'ver', 'rev', 'id'), $src );
	return $src;
}

// remove emoji
function disable_wp_emojicons() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  // add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

// Register HTML5 Blank Navigation
function register_generic_menu(){
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Главное меню', 'generic'), // Main Navigation
        'footer-menu' => __('Меню футера', 'generic'), // Sidebar Navigation
        // 'extra-menu' => __('Extra Menu', 'generic') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var){
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist){
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes){
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Remove the width and height attributes from inserted images
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')){
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'generic'),
        'description' => __('Description for this widget-area...', 'generic'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'generic'),
        'description' => __('Description for this widget-area...', 'generic'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style(){
    global $wp_widget_factory;

    if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
        remove_action('wp_head', array(
            $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
            'recent_comments_style'
        ));
    }
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination(){
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// set custom number for 'posts_per_page' per posttype
function posts_per_page_func( $query ) {
	if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'project' ) ) {
		$query->set( 'posts_per_page', '100' );
	}
	if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'post' ) ) {
	// if ( !is_admin() && $query->is_main_query() && is_page( 'novosti' ) ) {
		// $query->set( 'posts_per_page', '-1' );
		$query->set( 'orderby', 'date' );
		$query->set( 'order', 'asc' );
	}
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length){
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = ''){
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function generic_blank_view_article($more){
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'generic') . '</a>';
}

// Remove Admin bar
function remove_admin_bar(){
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function generic_style_remove($tag){
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ){
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults){
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments(){
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
    <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
    </div>
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }

// likes function
function generic_news_like() {
	// global $post;
	$id=$_POST['params']['like_id'];
	$liked=0;
	$exp=time()+60*60*24*30;
	// if($_COOKIE['liked']!==$id){
		// exit(json_encode($_POST));
	    $love = get_post_meta( $id, 'generic_post_likes', true );
	    $love++;
	    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
	        update_post_meta( $id, 'generic_post_likes', $love );
	        echo $love;
			$liked=1;
	    }
		// setcookie('liked', $id, $exp);
	// }
	$response=[
		'id' => $id,
		'time' => $exp,
		'liked' => $liked
	];
    die(json_encode($response));
}

// ajax get posts for main page
function generic_ajax_posts(){
	// global $post;
	$params=$_POST;
	$offset=$params['params']['p']*8;
	$args=array(
		'post_type'=>'post',
		'posts_per_page'=>8,
		'offset'=>$offset
	);
	$news=new WP_Query($args);
	ob_start();
	if ($news->have_posts()): while ($news->have_posts()) : $news->the_post();
		get_template_part('loop', 'post');
	endwhile;
	else : ?>
		<div class="section-title section-title--news js-animation-up animated fadeInUp" style="position:absolute;bottom:-135px;left:0;right:0">Больше нет новостей. Приходите позже!</div>
	<?php endif;
	// die(json_encode($args));
	$cont=ob_get_clean();
	$cont=str_replace('data-src', 'src', $cont);
	// $response=[
	// 	'offset' => $offset,
	// 	'total_posts' => wp_count_posts('post'),
	// 	'content' => $cont
	// ];
	$response['offset']=$offset;
	$response['total_posts']=wp_count_posts('post');
	$response['content']=$cont;
	die(json_encode($response));
}

// callback for diltering html tags in admin input
function unfilter_html_tags( $value, $field_args, $field ) {
    /*
     * Do your custom sanitization.
     * strip_tags can allow whitelisted tags
     * http://php.net/manual/en/function.strip-tags.php
     */
    $value = strip_tags( $value, '<p><a><br><br/><span>' );

    return $value;
}

// check if this $post->ID has children
function has_children($pid) {
	$children = get_children( array(
		'post_parent' => $pid,
		'post_type'   => 'any',
		'numberposts' => -1,
		'post_status' => 'publish'
	) );
    if( count( $children ) > 0 ) {
        return true;
    } else {
        return false;
    }
}

// unwrap wpcf7 fields
// add_filter('wpcf7_form_elements', function($content) {
//     $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
//     return $content;
// });

/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('cmb2_admin_init', 'generic_metaboxes' );
add_action('wp_enqueue_scripts', 'generic_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'generic_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'generic_styles'); // Add Theme Stylesheet
add_action('init', 'register_generic_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action('init', 'generic_globals');
add_action('init', 'disable_wp_emojicons');
add_action('wp_footer', 'generic_footer_scripts');
add_action( 'wp_ajax_nopriv_generic_news_like', 'generic_news_like' );
add_action( 'wp_ajax_generic_news_like', 'generic_news_like' );
add_action( 'wp_ajax_nopriv_generic_ajax_posts', 'generic_ajax_posts' );
add_action( 'wp_ajax_generic_ajax_posts', 'generic_ajax_posts' );
add_action( 'pre_get_posts', 'posts_per_page_func' );

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'generic_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
// add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'generic_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('post_thumbnail_html', 'remove_width_attribute', 10 ); // Remove width and height dynamic attributes to post images
add_filter('image_send_to_editor', 'remove_width_attribute', 10 ); // Remove width and height dynamic attributes to post images
add_filter( 'script_loader_src', 'remove_cssjs_ver', 15, 1 );
add_filter( 'style_loader_src', 'remove_cssjs_ver', 15, 1 );
// add_filter( 'wpcf7_load_css', '__return_false' );
add_filter( 'emoji_svg_url', '__return_false' );

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes above would be nested like this -
// [generic_shortcode_demo] [generic_shortcode_demo_2] Here's the page title! [/generic_shortcode_demo_2] [/generic_shortcode_demo]

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5(){
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
