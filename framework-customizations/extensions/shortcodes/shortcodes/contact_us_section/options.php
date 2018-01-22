<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'section_title' => array(
        'type' => 'text',
        'desc'  => __( 'Please write the title.', 'fw' ),
        'label' => 'Title',
        'value' => 'Contact us'
    ),
    'send_to' => array(
        'type'  => 'text',
        'desc'  => __( 'Please write the email address, you want the email to be sent to.', 'fw' ),
        'label' => 'Email Address'
    ),
    'contact_info' => array(
        'label'         => __( 'Contact Info', 'fw' ),
        'popup-title'   => __( 'Add/Edit Post', 'fw' ),
        'desc'          => __( 'Here you can add new sections to show on the left of the contact us form.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'type'  => 'text',
                'label' => 'Title',
                'desc'  => __( 'Contact info section name.', 'fw' ),
            ),
            'content' => array(
                'type' => 'wp-editor',
                'label' => 'Content',
                'desc'  => __( 'Contact info section content.', 'fw' ),
            ),
        ),
    ),
    'form_title' => array(
        'type'  => 'text',
        'desc'  => __( 'Please write the title of the form.', 'fw' ),
        'label' => __( 'Form Title', 'fw' ),
        'value' => 'Send a message'
    ),
    'name_placeholder' => array(
        'type'  => 'text',
        'desc'  => __( 'Here you can write placeholder for the name field.', 'fw' ),
        'label' => __( 'Placeholder For Name Field', 'fw' ),
        'value' => 'Name'
    ),
    'email_placeholder' => array(
        'type'  => 'text',
        'desc'  => __( 'Here you can write placeholder for the email field.', 'fw' ),
        'label' => __( 'Placeholder For Email Field', 'fw' ),
        'value' => 'Email'
    ),
    'map' => array(
        'type'  => 'map',
        'value' => array(
            'coordinates' => array(
                'lat'   => 40.723252,
                'lng'   => -73.998469,
            ),
            'venue' => 'Broadway 532 Street, New York',
            'address' => 'Broadway 532 Street',
            'city' => 'New York',
            'state' => 'New York',
            'country' => 'United States',
            'zip' => '10012',

        ),
        'label' => __('Map', 'fw'),
        'desc'  => __( 'Please write the address or choose location on map.', 'fw' ),
    )
)
?>