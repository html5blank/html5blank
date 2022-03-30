<?php
/**
 * Breadcrumb
*/
?>

<div class="wrapper cst-breadcrumb mar-bot-35">
	<div class="container" data-aos="slide-right" <?php echo is_singular('films') ? 'data-aos-duration="750" ': 'data-aos-duration="1250"'; ?> data-aos-easing="ease-in">
		<div class="row">
			<div class="col-12">
				<?php echo get_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>