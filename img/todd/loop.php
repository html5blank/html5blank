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
		<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php } else { ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/default.jpg" class="wp-post-image" alt="Default Image">
			</a>
		<?php } ?>
		<!-- /Post Thumbnail -->
		
		<?php html5wp_excerpt('html5wp_index'); ?>
		
		<br class="clear">
		
		<?php // edit_post_link(); ?>
		
	</article>
	<!-- /Article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- Article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /Article -->

<?php endif; ?>