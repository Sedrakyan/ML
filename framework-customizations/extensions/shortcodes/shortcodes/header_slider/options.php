<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'first_row' => array(
        'type' => 'text',
        'desc'  => __( 'Please fill the first row text field.', 'fw' ),
        'label' => __('First', 'unyson'),
    ),
    'slides' => array(
        'label'         => __( 'Slides', 'fw' ),
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
    ),
)
?>