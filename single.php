<?php get_header(); ?>
	
	<!-- Section -->
	<section>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- Post Thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /Post Thumbnail -->
			
			<!-- Post Title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /Post Title -->
			
			<!-- Post Details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /Post Details -->
			
			<?php the_content(); // Dynamic Content ?>
			
			<br class="clear">
			
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php comments_template(); ?>
			
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
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>