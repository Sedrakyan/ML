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
        'desc'   => __( 'Enter some content for this section.', 'fw' )
    ),
    'team_members' => array(
        'label'         => __( 'Team Members', 'fw' ),
        'popup-title'   => __( 'Add/Edit Team Members', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your Team Members.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=name}}',
        'popup-options' => array(
            'image' => array(
                'label' => __( 'Team Member Image', 'fw' ),
                'desc'  => __( 'Either upload a new, or choose an existing image from your media library.', 'fw' ),
                'type'  => 'upload'
            ),
            'name'  => array(
                'label' => __( 'Team Member Name', 'fw' ),
                'desc'  => __( 'Name of the person.', 'fw' ),
                'type'  => 'text',
            ),
            'job'   => array(
                'label' => __( 'Team Member Job Title', 'fw' ),
                'desc'  => __( 'Job title of the person.', 'fw' ),
                'type'  => 'text',
            ),
            'desc'  => array(
                'label' => __( 'Team Member Description', 'fw' ),
                'desc'  => __( 'Enter a few words that describe the person.', 'fw' ),
                'type'  => 'textarea',
            ),
            'social_links' => array(
                'label' => 'Social Links',
                'desc'  => __( 'You can add social links here.', 'fw' ),
                'type'          => 'addable-popup',
                'template'      => '{{=name}}',
                'limit'         => 4,
                'popup-options' => array(
                    'name' => array(
                        'label' => 'Name',
                        'desc' => 'Enter sotial network\'s name (e.g. Facebook, Twitter)',
                        'type' => 'text'
                    ),
                    'icon' => array(
                        'label' => 'Icon',
                        'desc' => 'Choose an icon',
                        'type' => 'icon'
                    ),
                    'link' => array(
                        'label' => 'Link',
                        'desc' => 'Enter social link',
                        'type' => 'text',
                        'value' => '#'
                    )
                )
            ),
        )
    ),
)
?>