<?php
/**
 * The template used for displaying forms in the scaffolding library.
 *
 * @package _s
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Forms', '_s' ); ?></h2>

	<?php
	// Search form.
	_s_display_scaffolding_section(
		[
			'title'       => 'Search Form',
			'description' => 'Display the search form.',
			'usage'       => '<?php get_search_form(); ?>',
			'output'      => get_search_form( false ), // set echo to false so the search form outputs correctly.
		]
	);

	// Input.
	_s_display_scaffolding_section(
		[
			'title'       => 'Input',
			'description' => 'Display a normal input.',
			'usage'       => '<input type="text">',
			'output'      => '<input type="text">',
		]
	);

	// Default Select.
	_s_display_scaffolding_section(
		[
			'title'       => 'Default Select',
			'description' => 'Display default select.',
			'usage'       => '<select><option value="option1">Option 1</option><option value="option2">Option 2</option></select>',
			'output'      => '<select><option value="option1">Option 1</option><option value="option2">Option 2</option></select>',
		]
	);

	// Checkbox.
	_s_display_scaffolding_section(
		[
			'title'       => 'Checkboxes',
			'description' => 'Display checkboxes.',
			'usage'       => '
				<p>
					<label><input type="checkbox" name="checkboxes" value="check_1"> Radio 1</label><br />
					<label><input type="checkbox" name="checkboxes" value="check_2"> Radio 2</label><br />
					<label><input type="checkbox" name="checkboxes" value="check_3"> Radio 3</label>
				</p>
			',
			'output'      => '
				<p>
					<label><input type="checkbox" name="checkboxes" value="check_1"> Radio 1</label><br />
					<label><input type="checkbox" name="checkboxes" value="check_2"> Radio 2</label><br />
					<label><input type="checkbox" name="checkboxes" value="check_3"> Radio 3</label>
				</p>
			',
		]
	);

	// Radio boxes.
	_s_display_scaffolding_section(
		[
			'title'       => 'Radio boxes.',
			'description' => 'Display radio boxes.',
			'usage'       => '
				<p>
					<label><input type="radio" name="radio_button" value="check_1"> Radio 1</label><br />
					<label><input type="radio" name="radio_button" value="check_2"> Radio 2</label><br />
					<label><input type="radio" name="radio_button" value="check_3"> Radio 3</label>
				</p>
			',
			'output'      => '
				<p>
					<label><input type="radio" name="radio_button" value="check_1"> Radio 1</label><br />
					<label><input type="radio" name="radio_button" value="check_2"> Radio 2</label><br />
					<label><input type="radio" name="radio_button" value="check_3"> Radio 3</label>
				</p>
			',
		]
	);

	// Textarea.
	_s_display_scaffolding_section(
		[
			'title'       => 'Textarea',
			'description' => 'Display a textarea.',
			'usage'       => '<textarea id="text_area"></textarea>',
			'output'      => '<textarea id="text_area"></textarea>',
		]
	);
	?>
</section>
