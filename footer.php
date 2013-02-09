	<!-- Footer -->
	<footer>
		
		<!-- Copyright -->
		<p class="copyright">
			&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?> 
			<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
		</p>
		<!-- /Copyright -->
		
	</footer>
	<!-- /Footer -->
	
	</div>
	<!-- /Wrapper -->
	
	<!-- jQuery CDN Failsafe to CloudFlare CDN -->
	<script>window.jQuery || document.write('<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"><\/script>');</script>
	
	<!-- Google Analytics -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src='//www.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)})(document,'script');
	</script>
	
	<?php wp_footer(); ?>

</body>
</html>