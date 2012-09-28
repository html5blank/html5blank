	<footer>
		&copy; <?php echo date("Y"); ?> Copyright.
	</footer>
	
	<?php wp_footer(); ?>
	
	</div>
	<!-- /Wrapper -->
	
	<!-- Optimised Asynchronous Google Analytics -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
	<!-- /Optimised Asynchronous Google Analytics -->
	
	<!-- Protocol Relative jQuery fall back if Google CDN offline -->
	<script>
		window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.2.min.js"><\/script>')
	</script>

</body>
</html>