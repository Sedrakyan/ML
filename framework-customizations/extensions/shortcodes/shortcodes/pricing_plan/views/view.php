<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$title = !empty($atts['section_title']) ? $atts['section_title']: 'PRICING PLAN';
$content = !empty($atts['content'])
    ? $atts['content']
    : '';
?>
<section id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pricing-table-area">
                    <div class="title-area">
                        <h2 class="tittle"><?=$title?></h2>
                        <span class="tittle-line"></span>
                        <?=$content?>
                    </div>
                    <!-- service content -->
                    <div class="pricing-table-content">
                        <ul class="price-table">
                            <?php foreach  ( fw_akg( 'plans', $atts, array() ) as $plan ):  ?>
                            <li class="wow slideInUp">
                                <div class="single-price <?=$plan['wanted'] ? 'standard-price' : ''?>">
                                    <h4 class="price-header"><?=$plan['name']?></h4>
                                    <span class="price-amount"><?=$plan['price']?><span> <?=$plan['currency']?></span><br/><span class="price-month"><?=$plan['price_desc']?></span></span>
                                    <?php foreach  ( $plan['rows'] as $row ):  ?>
                                        <p><?=$row['text']?></p>
                                    <?php endforeach; ?>
                                    <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>