<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'section_title' => array(
        'type' => 'text',
        'desc'  => __( 'Please write the section title here.', 'fw' ),
        'label' => 'Title'
    ),
    'section_title_colored' => array(
        'type' => 'text',
        'desc'  => __( 'Please write the colored title here.', 'fw' ),
        'label' => 'Colored Title'
    ),
    'content' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Enter some content for about section.', 'fw' )
    ),
    'more_button_link' => array(
        'type'  => 'text',
        'label'  => __( 'More Button Link', 'fw' ),
        'desc'   => __( 'Enter link for "READ MORE" buuton.', 'fw' )
    ),
    'widgets' => array(
        'label'         => __( 'Widgets', 'fw' ),
        'popup-title'   => __( 'Add/Edit Widgets', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your Widgets.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=content}}',
        'popup-options' => array(
            'content'       => array(
                'label' => __( 'Text', 'fw' ),
                'desc'  => __( 'Enter the content.', 'fw' ),
                'type'  => 'wp-editor',
            ),
            'icon'       => array(
                'type'  => 'icon',
                'desc'  => __( 'Please choose an icon.', 'fw' ),
                'label' => __( 'Icon', 'fw' ),
            ),
            'title'       => array(
                'label' => __( 'Title', 'fw' ),
                'desc'  => __( 'Enter the Title', 'fw' ),
                'type'  => 'text',
            ),
        )
    ),
    'image' => array(
        'label' => __('Image', 'unyson'),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
        'type' => 'upload'
    )
)
?>