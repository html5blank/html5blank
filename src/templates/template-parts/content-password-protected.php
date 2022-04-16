<?php
/**
 * Template part for displaying the password protection form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			echo wp_kses(
				get_the_password_form(),
				[
					'p'     => [],
					'label' => [
						'for' => [],
					],
					'form'  => [
						'action' => [],
						'class'  => [],
						'method' => [],
					],
					'input' => [
						'id'    => [],
						'name'  => [],
						'size'  => [],
						'type'  => [],
						'value' => [],
					],
				]
			);
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
