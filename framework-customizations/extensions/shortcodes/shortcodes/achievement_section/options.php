<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'bg_image' => array(
        'type' => 'upload',
        'label' => 'Title',
        'desc' => 'Please choose a background image.'
    ),
    'achievements' => array(
        'label'         => __( 'Achievements', 'fw' ),
        'popup-title'   => __( 'Add/Edit Achievements', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your Achievements.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=title}}',
        'popup-options' => array(
            'icon' => array(
                'label' => __( 'Achievement Icon', 'fw' ),
                'desc'  => __( 'Please choose an icon.', 'fw' ),
                'type'  => 'icon'
            ),
            'title'  => array(
                'label' => __( 'Title', 'fw' ),
                'type'  => 'text',
                'desc'  => __( 'Please write the title.', 'fw' ),
                'attr' => array('required' => 'required'),
            ),
            'count'  => array(
                'label' => __( 'Count', 'fw' ),
                'type'  => 'number',
                'desc'  => __( 'Please write the count number.', 'fw' ),
            ),
        )
    ),
)
?>