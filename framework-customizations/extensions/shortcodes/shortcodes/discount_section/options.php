<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'get_now_link' => array(
        'type'  => 'text',
        'label'  => __( 'Get Now Link', 'fw' ),
        'desc'   => __( 'Enter some valid link for "GET NOW" button', 'fw' )
    ),
    'discount_text' => array(
        'type'  => 'text',
        'label'  => __( 'Discount Text', 'fw' ),
        'desc'   => __( 'Please enter a text to show on the image.', 'fw' )
    ),
    'bg_image' => array(
        'label' => __('BG Image', 'unyson'),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
        'type' => 'upload'
    )
)
?>