<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'section_title' => array(
        'type' => 'text',
        'desc'   => __( 'Please enter the section title.', 'fw' ),
        'label' => 'Title'
    ),
    'content' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Enter some content for this section', 'fw' )
    )
)
?>