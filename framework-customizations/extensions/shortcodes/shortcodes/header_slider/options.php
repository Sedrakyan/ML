<?php
if( !defined('FW')) {die('Forbidden');}

switch (fw_get_db_settings_option('homepage_version')) {
	case ( 'slide' ):
		$options = array(
			'slider_images' => array(
				'label'         => __( 'Slider Images', 'fw' ),
				'popup-title'   => __( 'Add/Edit Slides', 'fw' ),
				'desc'          => __( 'Here you can add images to slider.', 'fw' ),
				'type'          => 'addable-popup',
				'template'      => '{{=content["url"]}}',
				'popup-options' => array(
					'content' => array(
						'label' => __( 'Image', 'fw' ),
						'desc'  => __( 'Choose image for slider', 'fw' ),
						'type'  => 'upload',
					),
				)
			)
		);
		break;
	case ( 'video' ):
		$options = array(

			'bg_video' => array(
				'type' => 'text',
				'desc'  => __( 'Valid url for embed video.', 'fw' ),
				'value' => 'https://youtube.com/embed/iGpuQ0ioPrM',
				'label' => __('Background Video', 'unyson'),
			)
		);
		break;
	case ( 'image' ):
	default:
	$options = array(
		'first_row' => array(
			'type' => 'text',
			'desc'  => __( 'Please fill the first row text field.', 'fw' ),
			'label' => __('First', 'unyson'),
		),
		'slides' => array(
			'label'         => __( 'Text Slides', 'fw' ),
			'popup-title'   => __( 'Add/Edit Slides', 'fw' ),
			'desc'          => __( 'Here you can add texts to slide.', 'fw' ),
			'type'          => 'addable-popup',
			'template'      => '{{=content}}',
			'popup-options' => array(
				'content'       => array(
					'label' => __( 'Text', 'fw' ),
					'desc'  => __( 'Enter the text', 'fw' ),
					'type'  => 'text',
				),
			)
		),
		'last_row' => array(
			'type' => 'text',
			'desc'  => __( 'Please fill the last row text field.', 'fw' ),
			'label' => __('Last', 'unyson'),
		),
		'image' => array(
			'label' => __('Image', 'unyson'),
			'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
			'type' => 'upload'
		)
	);
}
?>