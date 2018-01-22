<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$title = !empty($atts['section_title']) ? $atts['section_title']: 'OUR AWESOME WORK';
$content = !empty($atts['content'])
    ? $atts['content']
    : '';
?>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-area">
                    <div class="title-area">
                        <h2 class="tittle"><?=$title?></h2>
                        <span class="tittle-line"></span>
                        <?=$content?>
                    </div>
                    <!-- Portfolio content -->
                    <div class="portfolio-content">
                        <!-- Portfolio container -->
                        <div class="portfolio-container">
                            <?php foreach ( fw_akg( 'portfolios', $atts, array() ) as $portfolio):?>
                            <div class="single-portfolio">
                                <div class="single-item">
                                    <img src="<?=$portfolio['image_small']['url']?>" alt="img">
                                    <div class="single-item-content">
                                        <div class="portfolio-social-icon">
                                            <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <div class="portfolio-title">
                                            <h4><?=$portfolio['title']?></h4>
                                        </div>
                                        <div class="portfolio-detail">
                                            <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
                                            <img src="<?=$portfolio['image_big']['url']?>" alt="img-1">
                                            <h2><?=$portfolio['title']?></h2>
                                            <?=$portfolio['desc']?>
                                            <a href="<?=$portfolio['button_link']?>" class="view-project-btn">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>