<?php
/**
 * The template used for displaying typography in the scaffolding library.
 *
 * @package _s
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Typography', '_s' ); ?></h2>

	<?php
	// H1.
	_s_display_scaffolding_section(
		[
			'title'       => 'H1',
			'description' => 'Display an H1',
			'usage'       => '<h1>This is a headline</h1> or <div class="h1">This is a headline</div>',
			'output'      => '<h1>This is a headline one</h1>',
		]
	);

	// H2.
	_s_display_scaffolding_section(
		[
			'title'       => 'H2',
			'description' => 'Display an H2',
			'usage'       => '<h2>This is a headline</h2> or <div class="h2">This is a headline</div>',
			'output'      => '<h2>This is a headline two</h2>',
		]
	);

	// H3.
	_s_display_scaffolding_section(
		[
			'title'       => 'H3',
			'description' => 'Display an H3',
			'usage'       => '<h3>This is a headline</h3> or <div class="h3">This is a headline</div>',
			'output'      => '<h3>This is a headline three</h3>',
		]
	);

	// H4.
	_s_display_scaffolding_section(
		[
			'title'       => 'H4',
			'description' => 'Display an H4',
			'usage'       => '<h4>This is a headline</h4> or <div class="h4">This is a headline</div>',
			'output'      => '<h4>This is a headline four</h4>',
		]
	);

	// H5.
	_s_display_scaffolding_section(
		[
			'title'       => 'H5',
			'description' => 'Display an H5',
			'usage'       => '<h5>This is a headline</h5> or <div class="h5">This is a headline</div>',
			'output'      => '<h5>This is a headline five</h5>',
		]
	);

	// H6.
	_s_display_scaffolding_section(
		[
			'title'       => 'H6',
			'description' => 'Display an H6',
			'usage'       => '<h6>This is a headline</h6> or <div class="h6">This is a headline</div>',
			'output'      => '<h6>This is a headline six</h6>',
		]
	);

	// Body.
	_s_display_scaffolding_section(
		[
			'title'       => 'Paragraph',
			'description' => 'Display a paragraph',
			'usage'       => '<p>Elementum faucibus vehicula id neque magnis scelerisque quam conubia torquent, auctor nisl quis aliquet venenatis sem sagittis morbi eu, fermentum ipsum congue ultrices non dui lectus pulvinar. Sapien etiam convallis urna suscipit euismod pharetra tellus himenaeos, dignissim consectetur cum suspendisse sem ornare eros enim egestas, cubilia venenatis mauris vivamus elit fringilla duis.</p>',
			'output'      => '<p>Elementum faucibus vehicula id neque magnis scelerisque quam conubia torquent, auctor nisl quis aliquet venenatis sem sagittis morbi eu, fermentum ipsum congue ultrices non dui lectus pulvinar. Sapien etiam convallis urna suscipit euismod pharetra tellus himenaeos, dignissim consectetur cum suspendisse sem ornare eros enim egestas, cubilia venenatis mauris vivamus elit fringilla duis.</p>',
		]
	);

	// Link.
	_s_display_scaffolding_section(
		[
			'title'       => 'Link',
			'description' => 'Displays a link.',
			'usage'       => '<a href="#">Link</a>',
			'output'      => '<a href="#">Link</a>',
		]
	);

	// HTML table.
	_s_display_scaffolding_section(
		[
			'title'       => 'Table',
			'description' => 'Display a table',
			'usage'       => '
				<table title="A simple data table" aria-label="A simple data table">
					<thead>
						<tr>
							<th scope="col">Table Header 1</th>
							<th scope="col">Table Header 2</th>
							<th scope="col">Table Header 3</th>
							<th scope="col">Table Header 4</th>
							<th scope="col">Table Header 5</th>
							<th scope="col">Table Header 6</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							<td>Division 4</td>
							<td>Division 5</td>
							<td>Division 6</td>
						</tr>
						<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							<td>Division 4</td>
							<td>Division 5</td>
							<td>Division 6</td>
						</tr>
						<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							<td>Division 4</td>
							<td>Division 5</td>
							<td>Division 6</td>
						</tr>
					</tbody>
				</table>
			',
			'output'      => '
				<table title="A simple data table" aria-label="A simple data table">
					<thead>
						<tr>
							<th scope="col">Table Header 1</th>
							<th scope="col">Table Header 2</th>
							<th scope="col">Table Header 3</th>
							<th scope="col">Table Header 4</th>
							<th scope="col">Table Header 5</th>
							<th scope="col">Table Header 6</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							<td>Division 4</td>
							<td>Division 5</td>
							<td>Division 6</td>
						</tr>
						<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							<td>Division 4</td>
							<td>Division 5</td>
							<td>Division 6</td>
						</tr>
						<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							<td>Division 4</td>
							<td>Division 5</td>
							<td>Division 6</td>
						</tr>
					</tbody>
				</table>
			',
		]
	);


	// Ordered List.
	_s_display_scaffolding_section(
		[
			'title'       => 'Ordered List',
			'description' => 'Display an ordered list.',
			'usage'       => '
				<ol>
					<li>ordered item</li>
					<li>ordered item
						<ul>
							<li><strong>unordered</strong></li>
							<li><strong>unordered</strong>
								<ol>
									<li>ordered item</li>
									<li>ordered item</li>
								</ol>
							</li>
						</ul>
					</li>
					<li>ordered item</li>
					<li>ordered item</li>
				</ol>
			',
			'output'      => '
				<ol>
					<li>ordered item</li>
					<li>ordered item
						<ul>
							<li><strong>unordered</strong></li>
							<li><strong>unordered</strong>
								<ol>
									<li>ordered item</li>
									<li>ordered item</li>
								</ol>
							</li>
						</ul>
					</li>
					<li>ordered item</li>
					<li>ordered item</li>
				</ol>
			',
		]
	);

	// Unordered List.
	_s_display_scaffolding_section(
		[
			'title'       => 'Unordered List',
			'description' => 'Display an unordered list.',
			'usage'       => '
				<ul>
					<li>unordered item</li>
					<li>unordered item
						<ul>
							<li>unordered</li>
							<li>unordered
								<ol>
									<li><strong>ordered item</strong></li>
									<li><strong>ordered item</strong></li>
								</ol>
							</li>
						</ul>
					</li>
					<li>unordered item</li>
					<li>unordered item</li>
				</ul>
			',
			'output'      => '
				<ul>
					<li>unordered item</li>
					<li>unordered item
						<ul>
							<li>unordered</li>
							<li>unordered
								<ol>
									<li><strong>ordered item</strong></li>
									<li><strong>ordered item</strong></li>
								</ol>
							</li>
						</ul>
					</li>
					<li>unordered item</li>
					<li>unordered item</li>
				</ul>
			',
		]
	);

	// Blockquote.
	_s_display_scaffolding_section(
		[
			'title'       => 'Blockquote',
			'description' => 'Display a blockquote.',
			'usage'       => '<blockquote><p>Stay hungry. Stay foolish.</p></blockquote>',
			'output'      => '<blockquote><p>Stay hungry. Stay foolish.</p></blockquote>',
		]
	);

	// Code tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Code Tag',
			'description' => 'Display a code tag.',
			'usage'       => '<code>word-wrap: break-word;</code>',
			'output'      => '<p>You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>',
		]
	);

	// Em tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Emphasize Tag',
			'description' => 'Display an <em> tag.',
			'usage'       => '<em>italicize</em>',
			'output'      => 'The emphasize tag should <em>italicize</em> text.',
		]
	);

	// Strong tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Strong Tag',
			'description' => 'Display bold text.',
			'usage'       => '<strong>bold<strong>',
			'output'      => '<p>This tag shows <strong>bold<strong> text.</strong></strong></p>',
		]
	);

	// Abbreviation Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Abbreviation Tag',
			'description' => 'Display an abbreviation.',
			'usage'       => '<abbr title="Seriously">srsly</abbr>',
			'output'      => '<p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for "seriously".</p>',
		]
	);

	// Cite Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Cite Tag',
			'description' => 'Display a citation.',
			'usage'       => '<cite>Automattic</cite>',
			'output'      => '<p>"Code is poetry." &mdash;<cite>Automattic</cite></p>',
		]
	);

	// Strikeout Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Strikeout Text',
			'description' => 'Display strikeout text.',
			'usage'       => '<s>strikeout text</s>',
			'output'      => '<p>This tag will let you <s>strikeout text</s>.</p>',
		]
	);

	// Delete Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Delete Text',
			'description' => 'Display the edited content of a text string.',
			'usage'       => '<del>_s</del>',
			'output'      => '<p>We use <del>_s</del> wd_s to build themes.</p>',
		]
	);

	// Preformatted Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Preformatted tag.',
			'description' => 'This tag styles large blocks of code.',
			'usage'       => '
				<pre>.post-title {
					margin: 0 0 5px;
					font-weight: bold;
					font-size: 38px;
					line-height: 1.2;
				}</pre>
			',
			'output'      => '
				<pre>.post-title {
					margin: 0 0 5px;
					font-weight: bold;
					font-size: 38px;
					line-height: 1.2;
				}</pre>
			',
		]
	);

	// Keyboard Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Keyboard Tag',
			'description' => 'To display a key.',
			'usage'       => '<kbd>Shift/kbd>',
			'output'      => '<p>To paste copied text content stripped of formatting, use <kbd>&#8984;</kbd>+<kbd>Opt</kbd>+<kbd>Shift</kbd>+<kbd>V</kbd>.</p>',
		]
	);

	// Subscript Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Subscript Tag',
			'description' => 'To display a subscript.',
			'usage'       => '<sub>2</sub>',
			'output'      => '<p>Getting our science styling on with H<sub>2</sub>O, which should push the "2" down.</p>',
		]
	);

	// Superscript Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Superscript Tag',
			'description' => 'To display a superscript.',
			'usage'       => '<sup>2</sup>',
			'output'      => '<p>Still sticking with science and Albert Einstein\'s&nbsp;E = MC<sup>2</sup>, which should lift the "2" up.</p>',
		]
	);

	// Variable Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Variable Tag',
			'description' => 'The HTML Variable element (<var>) represents the name of a variable in a mathematical expression or a programming context.',
			'usage'       => '<var>x</var>',
			'output'      => '<p>A simple equation: <var>x</var> = <var>y</var> + 2 </p>',
		]
	);

	// Address Tag.
	_s_display_scaffolding_section(
		[
			'title'       => 'Address Tag',
			'description' => 'To display an address.',
			'usage'       => '
				<address>
					1 Infinite Loop<br>
					Cupertino, CA 95014<br>
					United States
				</address>
			',
			'output'      => '
				<address>
					1 Infinite Loop<br>
					Cupertino, CA 95014<br>
					United States
				</address>
			',
		]
	);

	// Definition lists.
	_s_display_scaffolding_section(
		[
			'title'       => 'Definition Lists',
			'description' => 'To display defintion lists.',
			'usage'       => '
				<dl>
					<dt>Definition List Title</dt>
					<dd>Definition list division.</dd>
					<dt>Startup</dt>
					<dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
					<dt>#dowork</dt>
					<dd>Coined by Rob Dyrdek and his personal body guard Christopher "Big Black" Boykins, "Do Work" works as a self motivator, to motivating your friends.</dd>
				</dl>
			',
			'output'      => '
				<dl>
					<dt>Definition List Title</dt>
					<dd>Definition list division.</dd>
					<dt>Startup</dt>
					<dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
					<dt>#dowork</dt>
					<dd>Coined by Rob Dyrdek and his personal body guard Christopher "Big Black" Boykins, "Do Work" works as a self motivator, to motivating your friends.</dd>
				</dl>
			',
		]
	);
	?>
</section>
