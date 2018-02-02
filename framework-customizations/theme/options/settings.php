<?php
if( !defined('FW')) {die('Forbidden');}
$options = array(
    'general' => array(
        'title' => __('General', 'fw'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __('General Settings', 'fw'),
                'type'  => 'box',
                'options' => array(
                    'logo' => array(
                        'label' => 'Logo',
                        'type' => 'upload',
                        'value' => array(
                        	'url' => get_template_directory_uri().'/images/logo.png',
                        	'image_url' => get_template_directory_uri().'/images/logo.png',
                        ),
                        'desc' => __( 'This is your site logo, showing on the menu area. It will replace default logo. (Recommended size 100x85)', 'fw'),
                    ),
                    'transparant_logo_bg' => array(
                        'label' => 'Transparant Logo Background',
                        'type' => 'checkbox',
                        'desc' => __( "This option allows you to use transparent background for site logo." , 'fw'),
                        'text'  => __('Yes', 'fw'),
                    ),
                    'version' => array(
                        'label' => 'Version',
                        'type' => 'select',
                        'desc' => __( 'Theme has 2 versions, dark and light, you can choose between theme here.', 'fw'),
                        'value' => 'dark',
                        'choices' => array(
                            'dark' => 'Dark',
                            'light' => 'Light'
                        )
                    ),
                    'color-scheme' => array(
                        'label' => 'Color Schem',
                        'type' => 'select',
                        'desc' => __( 'Theme has several color versions, that you can change. Just one choice and it will do the magic.', 'fw'),
                        'value' => 'lite-blue',
                        'choices' => array(
                            'lite-blue' => 'Lite Blue',
                            'red' => 'Red',
                            'dark-red' => 'Dark Red',
                            'bridge' => 'Bridge',
                            'default' => 'Lite Green',
                            'green' => 'Green',
                            'orange' => 'Orange',
                            'pink' => 'Pink',
                            'purple' => 'Purple',
                            'yellow' => 'Yellow',
                        )
                    ),

                    'homepage_version' => array(
	                    'label' => 'Homepage Version',
	                    'type' => 'select',
	                    'desc' => __( 'Change the version of homepage main section.', 'fw'),
	                    'value' => 'image',
	                    'choices' => array(
		                    'image' => 'Image',
		                    'slide' => 'Slide',
		                    'video' => 'Video'
	                    )
                    ),
                    'posts_per_page' => array(
                        'label' => 'Posts Per Page',
                        'type' => 'number',
                        'desc' => __( 'This is for blog pagination (for example on search, blog list page). Default is 5 posts per page.', 'fw'),
                        'value' => 5,
                    ),
                    'scroll_to_top' => array(
                        'Enable Scroll To Top Button',
                        'type' => 'switch',
                        'desc' => __( 'Show or hide "Scroll To Top" button', 'fw'),
                        'value' => 'on',
                        'right-choice' => array(
                            'value' => 'on',
                            'label' => __('Yes', 'fw'),
                        ),
                        'left-choice' => array(
                            'value' => 'off',
                            'label' => __('No', 'fw'),
                        ),
                    ),
                    'instagram_feed' => array(
                        'type'          => 'addable-popup',
                        'template'      => '{{=name}}',
                        'limit' => 9,
                        'desc' => __( 'Add images to show on instagram feed section on sidebar', 'fw'),
                        'popup-options' => array(
                            'name'       => array(
                                'label' => __( 'Name', 'fw' ),
                                'desc' => __( 'Image name.', 'fw'),
                                'type'  => __( 'text', 'fw'),
                            ),
                            'image' => array(
                                'label' => 'Image',
                                'desc' => __( 'Please choose an image.', 'fw'),
                                'type' => 'upload',
                            )
                        )
                    ),
                ),
            ),
        ),
    ),
    'footer' => array(
        'title' => __('Footer', 'fw'),
        'type' => 'tab',
        'options' => array(
            'footer-box' => array(
                'title' => __('Footer Settings', 'fw'),
                'type'  => 'box',
                'options' => array(
                    'social_links' => array(
                        'label'         => __( 'Social Links', 'fw' ),
                        'popup-title'   => __( 'Add/Edit Social Links', 'fw' ),
                        'type'          => 'addable-popup',
                        'desc' => __( 'This part is responsible for footer social links. You can add one above, choose icon for it and set link.', 'fw'),
                        'template'      => '{{=name}}',
                        'value' => array(
                        	array(
                        		'name' => 'Google+',
		                        'icon' => 'fa fa-google-plus',
		                        'link' => '#',
		                        'color' => '#dd4b39'
	                        ),
                        	array(
                        		'name' => 'Youtube',
		                        'icon' => 'fa fa-youtube',
		                        'link' => '#',
		                        'color' => '#bb0000'
	                        ),
                        	array(
                        		'name' => 'Facebook',
		                        'icon' => 'fa fa-facebook',
		                        'link' => '#',
		                        'color' => '#3b5998'
	                        ),
                        	array(
                        		'name' => 'Twitter',
		                        'icon' => 'fa fa-twitter',
		                        'link' => '#',
		                        'color' => '#00aced'
	                        ),
                        	array(
                        		'name' => 'LinkedIn',
		                        'icon' => 'fa fa-linkedin',
		                        'link' => '#',
		                        'color' => '#007bb5'
	                        ),
                        ),
                        'popup-options' => array(
                            'name' => array(
                                'type' => 'text',
                                'desc' => __( 'Please write the name of the social button.', 'fw'),
                                'label' => 'Social Button Name'
                            ),
                            'icon' => array(
                                'type' => 'icon',
                                'desc' => __( 'You can choose an icon here.', 'fw'),
                                'label' => 'Social Icon'
                            ),
                            'link' => array(
                                'type' => 'text',
                                'desc' => __( 'Please write the link.', 'fw'),
                                'label' => 'Link',
                                'value' => '#',
                            ),
                            'color' => array(
                                'type' => 'color-picker',
                                'desc' => __( 'This color will appear on hover.', 'fw'),
                                'label' => 'Color on Hover',
                            )
                        )
                    ),
                    'copyright' => array(
                        'type' => 'text',
                        'desc' => __( 'This part is for footer copyright text.', 'fw'),
                        'label' => 'Copyright Text',
	                    'value' => 'All Right Reserved.'
                    ),
                    'link' => array(
                        'type' => 'text',
                        'desc' => __( 'This part is for footer link showing next to social links.', 'fw'),
                        'label' => 'Footer Link',
	                    'value' => '#'
                    ),
                    'link_text' => array(
                        'type' => 'text',
                        'desc' => __( 'You can write footer link text showing next to social links.', 'fw'),
                        'label' => 'Footer Link Text',
	                    'value' => 'LifeInSYS'
                    )
                ),
            ),
        ),
    ),
);