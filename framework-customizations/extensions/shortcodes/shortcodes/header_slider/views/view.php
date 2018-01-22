<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<header id="header">
    <div class="header-inner">
<?php
$image_url = !empty($atts['image']['url'])
    ? $atts['image']['url']
    : get_template_directory_uri().'/images/bg_800.jpg';
        ?>
        <img src="<?php echo esc_attr($image_url); ?>" alt="bg_image" style="width: 100%"/>
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide"><?= $atts['first_row'] ?>
                    <?php foreach (fw_akg('slides', $atts, array()) as $slide): ?>
                        <span><?php echo $slide['content']; ?></span>
                    <?php endforeach; ?>
                    <?= $atts['last_row'] ?></h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a href="#about" class="scroll-about">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>