<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- Article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<!-- Post Thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /Post Thumbnail -->
		
		<!-- Post Title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /Post Title -->
		
		<!-- Post Details -->
		<span class="date"><?php the_date(); ?></span>
		<span class="time"><?php the_time(); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /Post Details -->
		
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		
		<br class="clear">
		
		<?php edit_post_link(); ?>
		
	</article>
	<!-- /Article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- Article -->
	<article>
		<?php if ( is_search() ) { // If the search results are showing ?> 
			<h2><?php echo sprintf( __( '%s results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
		<?php  } else { // If anything else then the search results are showing ?>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		<?php } ?>
	</article>
	<!-- /Article -->

<?php endif; ?>