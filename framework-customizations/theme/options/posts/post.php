<?php
if( !defined('FW')) {die('Forbidden');}


$options = array(
    'show_in_main_page' => array(
        'label' => 'Show In Main Page',
        'type'  => 'checkbox',
        'desc' => __( 'If this option is checked, it will be shown in homepage\'s "Our Blog" section.', 'fw'),
        'value' => false,
    ),
    'popular' => array(
        'label' => 'Popular',
        'type'  => 'checkbox',
        'desc' => __( 'If this option is checked, it will be shown in sidebar\'s "Popular" section.', 'fw'),
        'value' => false,
    ),
    'bg_image' => array(
        'label' => 'Background Image',
        'type'  => 'upload',
        'desc' => __( 'This image will be shown in "Single Blog" page, banner section as background image.', 'fw'),
    ),
);