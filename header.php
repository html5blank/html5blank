<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- DNS Prefetch -->
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		
	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>
	<script>
	conditionizr({
		debug      : true,
		scriptSrc  : 'js/conditionizr/',
		styleSrc   : 'css/conditionizr/',
		ieLessThan : { active: true, version: '9', scripts: true, styles: true, classes: true, customScript: 'none'},
		chrome     : { scripts: true, styles: true, classes: true, customScript: 'none' },
		safari     : { scripts: true, styles: true, classes: true, customScript: 'none' },
		opera      : { scripts: true, styles: true, classes: true, customScript: 'none' },
		firefox    : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie10       : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie9        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie8        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie7        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie6        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		retina     : { scripts: true, styles: true, classes: true, customScript: 'none' },
		mac    : true,
		win    : true,
		x11    : true,
		linux  : true
	});
	</script>
	
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
