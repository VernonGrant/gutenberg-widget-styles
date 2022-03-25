// Add CSS classes to blocks with widget style selected.
wp.domReady( () => {
	const widget_blocks = [
		'buttons',
		'code',
		'gallery',
		'heading',
		'image',
		'latest-posts',
		'list',
		'paragraph',
		'quote',
		'search',
		'table',
	];

	for (let i = 0; i < widget_blocks.length; i++) {
		wp.blocks.registerBlockStyle( 'core/' + widget_blocks[i], {
			name: 'widget-' + widget_blocks[i],
			label: 'Widget',
			isDefault: false,
		} );
	}
} );
