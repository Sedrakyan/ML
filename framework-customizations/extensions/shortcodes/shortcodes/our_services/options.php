<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'section_title' => array(
        'type' => 'text',
        'desc'   => __( 'Enter the title.', 'fw' ),
        'label' => 'Title'
    ),
    'content' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Enter some content for this section.', 'fw' )
    ),
    'services' => array(
        'label'         => __( 'Services', 'fw' ),
        'popup-title'   => __( 'Add/Edit Services', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your services.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=title}}',
        'popup-options' => array(
            'icon' => array(
                'label' => __( 'Service Icon', 'fw' ),
                'desc'  => __( 'Choose Icon', 'fw' ),
                'type'  => 'icon'
            ),
            'title'  => array(
                'label' => __( 'Title', 'fw' ),
                'type'  => 'text',
                'desc'  => __( 'Please write the title.', 'fw' ),
                'attr' => array('required' => 'required'),
            ),
            'desc'  => array(
                'label' => __( 'Service Description', 'fw' ),
                'desc'  => __( 'Enter a few words that describe the service', 'fw' ),
                'type'  => 'textarea',
            ),
            'link'  => array(
                'label' => __( 'Service Link', 'fw' ),
                'desc'  => __( 'Enter link to service page', 'fw' ),
                'type'  => 'text',
                'value' => '#'
            ),
        )
    ),
)
?>