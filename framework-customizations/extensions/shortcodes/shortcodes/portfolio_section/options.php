<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'section_title' => array(
        'type' => 'text',
        'desc'  => __( 'Please enter the section title.', 'fw' ),
        'label' => 'Title'
    ),
    'content' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Please enter the section content.', 'fw' )
    ),
    'portfolios' => array(
        'label'         => __( 'Services', 'fw' ),
        'popup-title'   => __( 'Add/Edit Services', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your portfolio items.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=title}}',
        'popup-options' => array(
            'image_small' => array(
                'label' => __( 'Small Image', 'fw' ),
                'desc'  => __( 'Please choose the list image.', 'fw' ),
                'type'  => 'upload'
            ),
            'image_big' => array(
                'label' => __( 'Big Image', 'fw' ),
                'desc'  => __( 'Please choose the preview image.', 'fw' ),
                'type'  => 'upload'
            ),
            'title'  => array(
                'label' => __( 'Title', 'fw' ),
                'type'  => 'text',
                'desc'  => __( 'Please choose the portfolio item title.', 'fw' ),
                'attr' => array('required' => 'required'),
            ),
            'desc'  => array(
                'label' => __( 'Service Description', 'fw' ),
                'desc'  => __( 'Enter a few words that describe the portfolio item.', 'fw' ),
                'type'  => 'wp-editor',
            ),
            'button_link' => array(
                'label' => 'Live Demo Link',
                'desc'  => __( 'Please enter the link where user can view the live demo.', 'fw' ),
                'type'  => 'text',
            ),
        )
    ),
)
?>