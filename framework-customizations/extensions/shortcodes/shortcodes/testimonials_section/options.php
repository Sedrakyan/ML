<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'bg_image' => array(
        'type' => 'upload',
        'label' => 'Background Image of this section. Either upload a new, or choose an existing image from your media library'
    ),
    'testimonials' => array(
        'label'         => __( 'Testimonials', 'fw' ),
        'popup-title'   => __( 'Add/Edit Testimonials', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your testimonials.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=name}}',
        'popup-options' => array(
            'image'   => array(
                'label' => __( 'Image', 'fw' ),
                'desc'  => __( 'Please choose the image for this testemonial.', 'fw' ),
                'type'  => 'upload',
            ),
            'text'   => array(
                'label' => __( 'Text', 'fw' ),
                'desc'  => __( 'Please enter the content for this testemonial.', 'fw' ),
                'type'  => 'text',
            ),
            'name'  => array(
                'label' => __( 'Name', 'fw' ),
                'desc'  => __( 'Please enter the name.', 'fw' ),
                'type'  => 'text',
            ),
            'position'  => array(
                'label' => __( 'Position', 'fw' ),
                'desc'  => __( 'Please enter the position.', 'fw' ),
                'type'  => 'text',
            ),
        )
    ),
)
?>