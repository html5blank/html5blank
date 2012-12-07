<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--> 
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="author" href="https://plus.google.com/104299354981726045306/posts">
		
	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>
<!--[if lte IE 10]><script src="<?php echo get_template_directory_uri(); ?>/js/mediaqueries.min.js"></script><![endif]-->
</head>
<body <?php body_class(); ?>>

	<!-- Header -->
	<header>
	
		<!-- Wrapper -->
		<div class="wrapper">
		
			<!-- Logo -->
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->
			
			<!-- Nav -->
			<nav>
				<ul class="menu">
					<li<?php if (is_front_page()) { echo " class=\"current\""; }?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li<?php if (is_category('web-development')) { echo " class=\"current\""; }?>><a href="<?php bloginfo('url'); ?>/topics/web-development">Web Development</a></li>
					<li<?php if (is_category('plugins-downloads')) { echo " class=\"current\""; }?>><a href="<?php bloginfo('url'); ?>/topics/plugins-downloads">Plugins/Downloads</a></li>
					<li<?php if (is_category('wordpress')) { echo " class=\"current\""; }?>><a href="<?php bloginfo('url'); ?>/topics/wordpress">WordPress</a></li>
					<li<?php if (is_page('contact')) { echo " class=\"current\""; }?>><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
				</ul>
			</nav>
			<!-- /Nav -->
			
			<br class="clear">
			
		</div>
		<!-- /Wrapper -->
	
	</header>
	<!-- /Header -->
	
	<!-- Wrapper -->
	<div class="wrapper">