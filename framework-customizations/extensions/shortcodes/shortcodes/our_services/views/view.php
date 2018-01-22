<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$title = !empty($atts['section_title']) ? $atts['section_title']: 'OUR SERVICES';
$content = !empty($atts['content'])
    ? $atts['content']
    : '';
?>
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-area">
                    <div class="title-area">
                        <h2 class="tittle"><?=$title?></h2>
                        <span class="tittle-line"></span>
                        <?=$content?>
                    </div>
                    <!-- service content -->
                    <div class="service-content">
                        <ul class="service-table">
                            <?php  foreach  ( fw_akg( 'services', $atts, array() ) as $service ):  ?>
                            <li class="col-md-3 col-sm-6 mb-50">
                                <a href="<?=$service['link'] ? $service['link'] : '#'?>" class="single-service">
                                    <span class="<?=$service['icon']?> service-icon"></span>
                                    <h4 class="service-title"><?=$service['title'] ? $service['title'] : '-'?></h4>
                                    <p><?=$service['desc']?></p>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>