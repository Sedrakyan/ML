<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$bg_image = !empty($atts['bg_image']) ? $atts['bg_image']['url']: get_template_directory_uri().'/images/testimonial-bg.jpg';
?>
<section id="testimonial">
    <img src="<?=$bg_image?>" alt="img">
    <div class="counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Testimonial area -->
                    <div class="testimonial-area">
                        <div class="testimonial-conten">
                            <!-- Start testimonial slider -->
                            <div class="testimonial-slider">
                                <?php foreach  ( fw_akg( 'testimonials', $atts, array() ) as $testimonial ):  ?>
                                <div class="single-slide">
                                    <?php if($testimonial['image']) :?>
                                    <img class="testimonial-thumb" src="<?=$testimonial['image']['url']?>" alt="img">
                                    <?php  else :?>
                                    <span class="testimonial-thumb" style="opacity: 0;display: block"></span>
                                    <?php endif; ?>
                                    <p><?=$testimonial['text']?></p>
                                    <div class="single-testimonial">
                                        <p><?=$testimonial['name']?></p>
                                        <span><?=$testimonial['position']?></span>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>