<!-- Sidebar -->
<aside id="sidebar">
	
	<div class="todd item">
		<img src="<?php echo get_template_directory_uri(); ?>/img/todd.jpg" alt="Todd Motto">
	</div>
	
	<?php get_template_part('searchform'); ?>
	
	<!-- Facebook Like -->
	<div class="item">
		<div class="fb-like" data-href="http://www.facebook.com/toddmottodesign" data-send="false" data-width="100" data-show-faces="false" data-colorscheme="dark"></div>
	</div>
	<!-- /Facebook Like -->
	
	<!-- Follow Button -->
	<div class="item">
		<a href="//twitter.com/toddmotto" class="twitter-follow-button" data-show-count="true">Follow @toddmotto</a>
	</div>
	<!-- /Follow Button -->
		
	<!-- Influads -->
	<div id="influads" class="item">
		<div id="influads_block" class="influads_block"></div>
	</div>
	<!-- /Influads -->
	
	<!-- HTML5 Blank -->
	<div class="item">
		<a href="//html5blank.com/?utm_source=toddmotto" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/img/h5blank.svg" alt="HTML5 Blank" class="h5blank-banner">
		</a>
	</div>
	<!-- /HTML5 Blank -->
	
	<!-- RSS -->
	<div class="item rss">
		<h3>RSS Updates</h3>
		<h4>Free updates via email or grab the <a href="//feeds.feedburner.com/toddmotto" target="_blank">feed</a>.</h4>
		<img src="<?php echo get_template_directory_uri(); ?>/img/rss.svg" alt="RSS" class="item-img">
		<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" 
			onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=toddmotto', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<input type="text" class="rss-email" placeholder="Email address" name="email">
			<input type="hidden" value="toddmotto" name="uri">
			<input type="hidden" name="loc" value="en_US">
			<input type="submit" value="Subscribe" class="rss-button">
		</form>
	</div>
	<!-- /RSS -->
	
	<!-- Random Articles -->
	<div class="item random">
		<h3>More Articles</h3>
		<ul>
		<?php $my_query = new WP_Query('orderby=rand&showposts=6'); while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; ?>
		</ul>
	</div>
	<!-- /Random Articles -->
	
	<!-- Latest Tweets -->
	<div class="item tweet">
		<h3>Tweets</h3>
		<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="RSS" class="item-img">
	</div>
	<!-- /Latest Tweets -->
	
</aside>
<!-- /Sidebar -->