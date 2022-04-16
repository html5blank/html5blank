<?php
/**
 * The template used for displaying media in the scaffolding library.
 *
 * @package _s
 */

global $wp_embed;
?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Media', '_s' ); ?></h2>

	<?php
	// Right-aligned Image.
	_s_display_scaffolding_section(
		[
			'title'       => 'Right-aligned Image',
			'description' => 'Display a right-aligned image.',
			'usage'       => '
				<p><img class="alignright size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /></p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
			'output'      => '
				<p><img class="alignright size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /></p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
		]
	);

	// Left-aligned Image.
	_s_display_scaffolding_section(
		[
			'title'       => 'Left-aligned Image',
			'description' => 'Display a left-aligned image.',
			'usage'       => '
				<p><img class="alignleft size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /></p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
			'output'      => '
				<p><img class="alignleft size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /></p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
		]
	);

	// Center-aligned Image.
	_s_display_scaffolding_section(
		[
			'title'       => 'Center-aligned Image',
			'description' => 'Display a center-aligned image.',
			'usage'       => '
				<p><img class="aligncenter size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /></p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
			'output'      => '
				<p><img class="aligncenter size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /></p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
		]
	);

	// Image with caption.
	_s_display_scaffolding_section(
		[
			'title'       => 'Image with Caption',
			'description' => 'Display an image with a caption.',
			'usage'       => '
				<p>[caption id="" align="alignright" width="250"]<img class="size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /> Image Caption.[/caption]</p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
			'output'      => '
				<p>[caption id="" align="alignright" width="250"]<img class="size-medium" src="https://via.placeholder.com/250x250.png" width="250" height="250" /> Image Caption.[/caption]</p>
				<p>Phasellus quis lacus feugiat, imperdiet urna sollicitudin, efficitur nulla. Maecenas dolor sapien, rhoncus et placerat sit amet, lobortis non diam. In porttitor risus ac malesuada mattis. In hac habitasse platea dictumst. Maecenas auctor nec dui id imperdiet. Maecenas mattis scelerisque feugiat. Maecenas faucibus neque a sapien tincidunt, sed ultrices ipsum porttitor. Praesent eleifend leo vitae purus fringilla, et rhoncus arcu tempus. Nullam euismod scelerisque dolor. Morbi quis nibh ac risus imperdiet accumsan. Nullam a ante suscipit, tincidunt sem congue, volutpat mi. Integer lacus ligula, mollis ac ullamcorper in, tincidunt et augue. Praesent bibendum tellus massa, eu interdum felis eleifend sed. Maecenas aliquet sapien et sapien sagittis, quis faucibus risus vulputate. Cras eleifend iaculis erat ut facilisis. Curabitur eget commodo lorem.</p>
			',
		]
	);

	// Youtube embed.
	_s_display_scaffolding_section(
		[
			'title'       => 'Youtube Embed',
			'description' => 'Display a youtube video.',
			'usage'       => '[embed]https://www.youtube.com/watch?v=72xdCU__XCk[/embed]',
			'output'      => $wp_embed->run_shortcode( '[embed]https://www.youtube.com/watch?v=72xdCU__XCk[/embed]' ),
		]
	);

	// Youtube embed.
	_s_display_scaffolding_section(
		[
			'title'       => 'Vimeo Embed',
			'description' => 'Display a vimeo video.',
			'usage'       => '[embed]https://vimeo.com/259411563[/embed]',
			'output'      => $wp_embed->run_shortcode( '[embed]https://vimeo.com/259411563[/embed]' ),
		]
	);
	?>
</section>
