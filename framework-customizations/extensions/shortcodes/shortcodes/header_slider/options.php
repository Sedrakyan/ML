<?php
if( !defined('FW')) {die('Forbidden');}

switch (fw_get_db_settings_option('homepage_version')) {
	case ( 'slide' ):
		$options = array(
			'slider_images_box' => array(
				'type' => 'box',
				'options' => array(
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
                            'text_1' => array(
                                'label' => __( 'Text 1', 'fw' ),
                                'desc'  => __( 'This is the first row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            ),
                            'text_2' => array(
                                'label' => __( 'Text 2', 'fw' ),
                                'desc'  => __( 'This is the second row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            ),
                            'text_3' => array(
                                'label' => __( 'Text 3', 'fw' ),
                                'desc'  => __( 'This is the third row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            )
						)
					),
				),
			),
			'bg_video_box' => array(
				'type' => 'box',
				'options' => array(
					'bg_video' => array(
						'type' => 'text',
						'desc'  => __( 'Valid url for embed video.', 'fw' ),
						'value' => 'https://youtube.com/embed/iGpuQ0ioPrM',
						'label' => __('Background Video', 'unyson'),
					),
                    'video_first_row' => array(
                        'type' => 'text',
                        'desc'  => __( 'Please fill the first row text field.', 'fw' ),
                        'label' => __('First', 'unyson'),
                    ),
                    'video_slides' => array(
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
                    'video_last_row' => array(
                        'type' => 'text',
                        'desc'  => __( 'Please fill the last row text field.', 'fw' ),
                        'label' => __('Last', 'unyson'),
                    ),
				),
				'attr' => array('class' => 'hidden')
			),
			'image_box' => array(
				'type' => 'box',
				'options' => array(
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
						'type' => 'upload',
					)
				),
				'attr' => array('class' => 'hidden'),
			),
		);
		break;
	case ( 'video' ):
		$options = array(
			'slider_images_box' => array(
				'type' => 'box',
				'options' => array(
					'slider_images' => array(
						'label'         => __( 'Slider Images', 'fw' ),
						'popup-title'   => __( 'Add/Edit Slides', 'fw' ),
						'desc'          => __( 'Here you can add images to slider.', 'fw' ),
						'type'          => 'addable-popup',
						'template'      => '{{=content["url"]}}',
						'attr'  => array('class' => 'hidden'),
						'popup-options' => array(
							'content' => array(
								'label' => __( 'Image', 'fw' ),
								'desc'  => __( 'Choose image for slider', 'fw' ),
								'type'  => 'upload',
							),
                            'text_1' => array(
                                'label' => __( 'Text 1', 'fw' ),
                                'desc'  => __( 'This is the first row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            ),
                            'text_2' => array(
                                'label' => __( 'Text 2', 'fw' ),
                                'desc'  => __( 'This is the second row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            ),
                            'text_3' => array(
                                'label' => __( 'Text 3', 'fw' ),
                                'desc'  => __( 'This is the third row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            )
						)
					),
				),
				'attr' => array('class' => 'hidden'),
			),
			'bg_video_box' => array(
				'type' => 'box',
				'options' => array(
					'bg_video' => array(
						'type' => 'text',
						'desc'  => __( 'Valid url for embed video.', 'fw' ),
						'value' => 'https://youtube.com/embed/iGpuQ0ioPrM',
						'label' => __('Background Video', 'unyson'),
					),
                    'video_first_row' => array(
                        'type' => 'text',
                        'desc'  => __( 'Please fill the first row text field.', 'fw' ),
                        'label' => __('First', 'unyson'),
                    ),
                    'video_slides' => array(
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
                    'video_last_row' => array(
                        'type' => 'text',
                        'desc'  => __( 'Please fill the last row text field.', 'fw' ),
                        'label' => __('Last', 'unyson'),
                    ),
				),
			),
			'image_box' => array(
				'type' => 'box',
				'options' => array(
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
						'type' => 'upload',
					)
				),
				'attr' => array('class' => 'hidden'),
			),
		);
		break;
	case ( 'image' ):
	default:
	$options = array(
		'slider_images_box' => array(
			'type' => 'box',
			'options' => array(
				'slider_images' => array(
					'label'         => __( 'Slider Images', 'fw' ),
					'popup-title'   => __( 'Add/Edit Slides', 'fw' ),
					'desc'          => __( 'Here you can add images to slider.', 'fw' ),
					'type'          => 'addable-popup',
					'template'      => '{{=content["url"]}}',
					'attr'  => array('class' => 'hidden'),
					'popup-options' => array(
						'content' => array(
							'label' => __( 'Image', 'fw' ),
							'desc'  => __( 'Choose image for slider', 'fw' ),
							'type'  => 'upload',

                            'text_1' => array(
                                'label' => __( 'Text 1', 'fw' ),
                                'desc'  => __( 'This is the first row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            ),
                            'text_2' => array(
                                'label' => __( 'Text 2', 'fw' ),
                                'desc'  => __( 'This is the second row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            ),
                            'text_3' => array(
                                'label' => __( 'Text 3', 'fw' ),
                                'desc'  => __( 'This is the third row of text showing on the image', 'fw' ),
                                'type'  => 'text',
                            )
						),
					)
				),
			),
			'attr' => array('class' => 'hidden'),
		),
		'bg_video_box' => array(
			'type' => 'box',
			'options' => array(
				'bg_video' => array(
					'type' => 'text',
					'desc'  => __( 'Valid url for embed video.', 'fw' ),
					'value' => 'https://youtube.com/embed/iGpuQ0ioPrM',
					'label' => __('Background Video', 'unyson'),
				),
                'video_first_row' => array(
                    'type' => 'text',
                    'desc'  => __( 'Please fill the first row text field.', 'fw' ),
                    'label' => __('First', 'unyson'),
                ),
                'video_slides' => array(
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
                'video_last_row' => array(
                    'type' => 'text',
                    'desc'  => __( 'Please fill the last row text field.', 'fw' ),
                    'label' => __('Last', 'unyson'),
                ),
			),
			'attr' => array('class' => 'hidden')
		),
		'image_box' => array(
			'type' => 'box',
			'options' => array(
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
					'type' => 'upload',
				)
			),
		),
	);
}
?>