<!-- Searchform -->
<form method="get" class="search" action="<?php echo home_url(); ?>" >
	<input id="s" type="text" name="s" onfocus="if(this.value==''){this.value=''};" 
	onblur="if(this.value==''){this.value=''};" value="">
	<input class="searchsubmit" type="submit" value="<?php _e( 'Search', 'html5blank' ); ?>">
</form>
<!-- /Searchform -->