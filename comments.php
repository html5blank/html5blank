<div id="comments">
	<?php if (post_password_required()) : ?>
	<p>Post is password protected. Enter the password to view any comments.</p>
</div> <!-- END: comments if password protected -->

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments(); ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	
	<p>Comments are closed here.</p>
	
<?php endif; ?>

<?php comment_form(); ?>

</div> <!-- END: comments if not password protected -->