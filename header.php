<!DOCTYPE html>
<!--
No more Conditional statements
Conditionizr legacy, retina scripts and style loading
conditionizr.com/docs.php
-->
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0;">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

	<!-- Header -->
	<header>
	
		<!-- Wrapper -->
		<div class="wrapper">
		
			<!-- Logo -->
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- SVG Logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->
			
			<!-- Nav -->
			<nav>
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /Nav -->
			
			<br class="clear">
			
		</div>
		<!-- /Wrapper -->
	
	</header>
	<!-- /Header -->
	
	<!-- Wrapper -->
	<div class="wrapper">
