<?php
if( !defined('FW')) {die('Forbidden');}

$options=array(
    'section_title' => array(
        'type' => 'text',
        'desc'  => __( 'Please enter the title for this section.', 'fw' ),
        'label' => 'Title'
    ),
    'content' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Please enter a few words to describe this section.', 'fw' )
    ),
    'plans' => array(
        'label'         => __( 'Plans', 'fw' ),
        'popup-title'   => __( 'Add/Edit Price Plans', 'fw' ),
        'desc'          => __( 'Here you can add, remove and edit your plans.', 'fw' ),
        'type'          => 'addable-popup',
        'template'      => '{{=name}}',
        'popup-options' => array(
            'name'  => array(
                'label' => __( 'Plan Name', 'fw' ),
                'desc'  => __( 'Please enter the name of your plan.', 'fw' ),
                'type'  => 'text',
            ),
            'price'   => array(
                'label' => __( 'Plan Price', 'fw' ),
                'desc'  => __( 'Please enter the price for this plan.', 'fw' ),
                'type'  => 'number',
                'attr' => array('min' => 0, 'step' => 0.01)
            ),
            'currency'   => array(
                'label' => __( 'Currency', 'fw' ),
                'desc'  => __( 'You can add currency symbol here.', 'fw' ),
                'type'  => 'text',
            ),
            'price_desc'  => array(
                'label' => __( 'Plan Period', 'fw' ),
                'desc'  => __( 'Please enter the pricing period for this plan (e.g. per month)', 'fw' ),
                'type'  => 'text',
            ),
            'wanted' => array(
                'label' => 'Most Wanted',
                'desc'  => __( 'You can check this, if you want this column appear according to your color scheme. ', 'fw' ),
                'type'  => 'checkbox'
            ),
            'rows' => array(
                'label'         => __( 'Rows', 'fw' ),
                'popup-title'   => __( 'Add/Edit Rows', 'fw' ),
                'desc'          => __( 'Here you can add, remove and edit your rows.', 'fw' ),
                'type'          => 'addable-popup',
                'template'      => '{{=text}}',
                'popup-options' => array(
                    'text'  => array(
                        'label' => __( 'Text', 'fw' ),
                        'desc'  => __( 'Please write a value for this row.', 'fw' ),
                        'type'  => 'text',
                    )
                )
            ),
        )
    ),
)
?>