	</div>
	<!-- /Wrapper -->

	<!-- Footer -->
	<footer>
	
		<!-- Wrapper -->
		<div class="wrapper">
		
			<!-- Going Up -->
			<a href="#goingup" class="goingup">Going up!</a>
		
			<div class="column">
				<h3>Keep in touch</h3>
				<span class="social">
					<a href="//twitter.com/toddmotto" class="twitter-follow-button" data-show-count="true">Follow @toddmotto</a>
					<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
					</script>
				</span>
				<span class="social">
					<div class="fb-like" data-href="http://www.facebook.com/toddmottodesign" data-send="false" data-width="100" data-show-faces="false" data-colorscheme="dark"></div>
				</span>
				<span class="social">
					<div class="g-plusone" data-annotation="inline" data-width="120"></div>
					<script>
					  window.___gcfg = {lang: 'en-GB'};
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
				</span>
			</div>
			
			<div class="column rss-footer">
				<h3>RSS Updates</h3>
				<h4>Free updates via email or grab the <a href="//feeds.feedburner.com/toddmotto" target="_blank">feed</a>.</h4>
				<img src="http://new.toddmotto.com/wp-content/themes/todd/img/rss.svg" alt="RSS" class="icon">
				<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" 
					onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=toddmotto', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
					<input type="text" class="rss-email" placeholder="Email address" name="email">
					<input type="hidden" value="toddmotto" name="uri">
					<input type="hidden" name="loc" value="en_US">
					<input type="submit" value="Subscribe" class="rss-button">
				</form>
			</div>
			
			<div class="column html5b">
				<a href="//html5blank.com" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/img/support.svg" alt="Logo" class="footer-h5">
					<p>HTML5 Blank is a powerful shell for rapidly deploying your WordPress projects. Get developing in minutes, with the robust, preloaded shell &rarr;</p>
				</a>
			</div>
			
			<!-- Strip -->
			<div class="strip">
			
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo">
				
				<!-- Copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright Todd Motto. <?php _e('Powered by', 'html5blank'); ?> 
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /Copyright -->
				
				<span class="clear"></span>
				
			</div>
			<!-- /Strip -->
		
		</div>
		<!-- /Wrapper -->
		
	</footer>
	<!-- /Footer -->
	
	<?php wp_footer(); ?>
	
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=252993844735607";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

</body>
</html>