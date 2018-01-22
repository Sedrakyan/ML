<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$bg_image =  !empty($atts['bg_image']) ? $atts['bg_image']['url']: get_template_directory_uri().'/images/company-statistic.jpg';

?>
<section id="counter">
    <img src="<?=$bg_image?>" alt="img">
    <div class="counter-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start counter area -->
                    <div class="counter-area">
                        <?php foreach ( fw_akg( 'achievements', $atts, array() ) as $achievement ) :?>
                        <div class="col-md-3 col-sm-6 col-xs-6">

                            <div class="single-counter">
                                <span class="<?=$achievement['icon']?>"></span>
                                <div class="counter-count">
                                    <span class="counter"><?=(int)$achievement['count']?></span>
                                    <p><?=$achievement['title']?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>