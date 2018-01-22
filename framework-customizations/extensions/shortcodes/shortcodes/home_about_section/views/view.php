<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$image_url = !empty($atts['image']['url'])
    ? $atts['image']['url']
    : get_template_directory_uri().'/images/ab-img.jpg';
$bg_image_url = !empty($atts['bg_image']['url'])
    ? $atts['bg_image']['url']
    : get_template_directory_uri().'/images/call-to-action-bg.png';
$link = !empty($atts['more_button_link'])
    ? $atts['more_button_link']
    : '#';
$get_now_link = !empty($atts['get_now_link'])
    ? $atts['get_now_link']
    : '#';
$content = !empty($atts['content'])
    ? $atts['content']
    : '';
$discount_text = !empty($atts['discount_text'])
    ? $atts['discount_text']
    : '';
?>
<!-- Start about section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="about-left wow fadeInLeft">
                                <img src="<?=$image_url?>" alt="img">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="about-right wow fadeInRight">
                                <div class="title-area">
                                    <h2 class="tittle text-uppercase"><?=$atts['section_title']?> <span><?=$atts['section_title_colored']?></span></h2>
                                    <span class="tittle-line"></span>
                                    <?=$content?>
                                    <div class="about-btn-area">
                                        <a href="<?=$link?>" class="button button-default" data-text="READ MORE"><span>READ MORE</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start welcome area -->
                <div class="welcome-area">
                    <div class="welcome-content">
                        <ul class="wc-table">
                            <?php foreach ( fw_akg( 'widgets', $atts, array() ) as $widget ): ?>
                                <li>
                                    <div class="single-wc-content">
                                        <span class="<?=$widget['icon']?> wc-icon"></span>
                                        <h4 class="wc-tittle"><?=$widget['title']?></h4>
                                        <?=$widget['content']?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- End welcome area -->
            </div>
        </div>
    </div>
</section>
<!-- End about section -->