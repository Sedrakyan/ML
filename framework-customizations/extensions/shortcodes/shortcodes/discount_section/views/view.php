<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$bg_image_url = !empty($atts['bg_image']['url'])
    ? $atts['bg_image']['url']
    : get_template_directory_uri().'/images/call-to-action-bg.png';
$get_now_link = !empty($atts['get_now_link'])
    ? $atts['get_now_link']
    : '#';
$discount_text = !empty($atts['discount_text'])
    ? $atts['discount_text']
    : 'Today first 10 new users will get 20% discount';
?>
<!-- Start call to action -->
<section id="call-to-action">
    <img src="<?=$bg_image_url?>" alt="img">
    <div class="call-to-overlay">
        <div class="container">
            <div class="call-to-content wow">
                <h2><?=$atts['discount_text']?></h2>
                <a href="<?=$get_now_link?>" class="button button-default" data-text="GET IT NOW"><span>GET IT NOW</span></a>
            </div>
        </div>
    </div>
</section>