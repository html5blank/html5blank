<!-- search -->
<form class="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<div role="search">
		<input class="search-input" type="search" name="s" aria-label="Search site for:" placeholder="<?php esc_html_e( 'To search, type and hit enter.', 'html5blank' ); ?>">
		<button class="search-submit" type="submit"><?php esc_html_e( 'Search', 'html5blank' ); ?></button>
	</div>
</form>
<!-- /search -->
