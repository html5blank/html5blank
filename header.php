<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="dns-prefetch" href="//www.google-analytics.com">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			
		<!-- CSS + jQuery + JavaScript -->
		<?php wp_head(); ?>
		<script>
		conditionizr({
			debug      : false,
			scriptSrc  : '<?php echo get_template_directory_uri(); ?>/js/conditionizr/',
			styleSrc   : '<?php echo get_template_directory_uri(); ?>/css/conditionizr/',
			ieLessThan : {active: true, version: '9', scripts: true, styles: true, classes: true, customScript: '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js'},
			chrome     : { scripts: false, styles: false, classes: true, customScript: false },
			safari     : { scripts: false, styles: false, classes: true, customScript: false },
			opera      : { scripts: false, styles: false, classes: true, customScript: false },
			firefox    : { scripts: false, styles: false, classes: true, customScript: false },
			ie10       : { scripts: false, styles: false, classes: true, customScript: false },
			ie9        : { scripts: false, styles: false, classes: true, customScript: false },
			ie8        : { scripts: false, styles: false, classes: true, customScript: false },
			ie7        : { scripts: false, styles: false, classes: true, customScript: false },
			ie6        : { scripts: false, styles: false, classes: true, customScript: false },
			retina     : { scripts: false, styles: false, classes: true, customScript: false },
			mac        : true,
			win        : true,
			x11        : true,
			linux      : true
		});
		</script>
		
	</head>
	<body <?php body_class(); ?>>
	
		<!-- Wrapper -->
		<div class="wrapper">
	
			<!-- Header -->
			<header class="header">
				
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- SVG Logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
						</a>
					</div>
					<!-- /Logo -->
					
					<!-- Nav -->
					<nav class="nav">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /Nav -->
					
					<br class="clear">
			
			</header>
			<!-- /Header -->