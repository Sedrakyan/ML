<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'clients' => array(
        'label'         => __( 'Client', 'fw' ),
        'popup-title'   => __( 'Add/Edit Clients', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'type' => 'text',
                'label' => 'Client Name'
            ),
            'logo' => array(
                'type' => 'upload',
                'label' => 'Client Logo'
            ),
        )
    ),
)
?>