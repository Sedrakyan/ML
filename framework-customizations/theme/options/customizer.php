<?php
$options = array(
    'section_1' => array(
        'title' => __('Colore Scheme', 'fw'),
        'options' => array(

            'dark_light' => array(
                'type'  => 'switch',
                'value' => 'dark',
                'label' => __('Choose Color', 'fw'),
                'left-choice' => array(
                    'value' => 'dark',
                    'label' => __('Dark', 'fw'),
                ),
                'right-choice' => array(
                    'value' => 'light',
                    'label' => __('Light', 'fw'),
                ),
            ),

        ),
    ),
);