<!-- Sidebar -->
<aside id="sidebar">

	<?php get_template_part('searchform'); ?>
    		
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1')) ?>
	</div>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 2')) ?>
	</div>
		
</aside>
<!-- /Sidebar -->