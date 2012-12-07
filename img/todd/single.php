<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
		<!-- Blog -->
		<div id="blog">
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			<!-- Article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<!-- Post Title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /Post Title -->
				
				<!-- Post Details -->
				<div class="post-details">
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				</div>
				<!-- /Post Details -->
			
				<!-- Post Thumbnail -->
				<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
				<!-- /Post Thumbnail -->
				
				<!-- Dynamic -->
				<div class="single-content">
					<?php the_content(); ?>
				</div>
				<!-- /Dynamic -->
				
				<span class="clear"></span>
				
				<?php edit_post_link(); ?>
				
				<div id="bio">
					<img src="<?php echo get_template_directory_uri(); ?>/img/author-todd.jpg" alt="Author Todd Motto" class="authorimg">
					<h3>Todd Motto</h3>
					<h4>Killer front-end web dev. HTML5, CSS3, jQuery, WordPress. Creator of <a href="//html5blank.com" target="_blank">HTML5 Blank</a>. Diet Coke head.</h4>
					<h4>
						<a href="//twitter.com/toddmotto" target="_blank">Twitter</a> <span>/</span> 
						<a href="//facebook.com/toddmottodesign" target="_blank">Facebook</a> <span>/</span> 
						<a href="//linkedin.com/in/toddmotto" target="_blank">LinkedIn</a> <span>/</span> 
						<a href="//plus.google.com/u/0/104299354981726045306/posts" target="_blank">G+</a> <span>/</span> 
						<a href="//github.com/toddmotto" target="_blank">GitHub</a>
					</h4>
				</div>
				
				<span class="divide"></span>
				
				<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); ?></p>
				
				<span class="divide"></span>
				
				<!-- Share -->
				<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_linkedin_counter"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
					<a class="addthis_button_pinterest_pinit"></a>
					<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script src="//s7.addthis.com/js/300/addthis_widget.js"></script>
				<!-- Share -->
				
				<span class="divide"></span>
				
				<!-- Related Articles -->
			<?php $backup = $post; $tags = wp_get_post_tags($post->ID);
				if ($tags) {
				echo '<div id="related"><h4>Related Articles</h4><ul>';
				$first_tag = $tags[0]->term_id;
				$args=array(
					'tag__in' => array($first_tag),
					'post__not_in' => array($post->ID),
					'showposts'=>4,
					'caller_get_posts'=>1
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) { while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a></li>
			<?php endwhile; } echo '</ul></div>'; $post = $backup; wp_reset_query(); } ?>
			<!-- /Related Articles -->
			
			<span class="divide"></span>
			
			<!-- Comments -->
			<?php comments_template(); ?>
			<!-- /Comments -->
				
		</article>
		<!-- /Article -->
			
		<?php endwhile; ?>
		
		<?php else: ?>
		
			<!-- Article -->
			<article>
				
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				
			</article>
			<!-- /Article -->
		
		<?php endif; ?>
	
		</div>
		<!-- /Blog -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>