<?php

add_ux_builder_shortcode( 'ux_my_html', array(
	'type'      => 'container',
	'name'      => __( 'TNV HTML', 'flatsome' ),
	'category'  => __( 'Content', 'flatsome' ),
	'compile'   => false,
	'overlay'   => true,
	'thumbnail' => flatsome_ux_builder_thumbnail( 'tnv' ),
	'info'      => '{{ label }}',
	'template'  => flatsome_ux_builder_template( 'ux_my_html.html' ),
	'priority'  => 3,

	'options'   => array(
		'label'            => array(
			'full_width'  => true,
			'type'        => 'textfield',
			'heading'     => 'Label',
			'placeholder' => 'Enter admin label here...',
		),
		'$content'         => array(
			'type'       => 'text-editor',
			'full_width' => true,
			'height'     => 'calc(100vh - 470px)',
			'tinymce'    => false,
		),
		'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
	),
) );
