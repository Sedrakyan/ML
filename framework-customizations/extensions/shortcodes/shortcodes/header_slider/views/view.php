<?php
if( !defined('FW')) {die('Forbidden');}
/**
 * @var $atts The shotrcode attributes
 */
switch (fw_get_db_settings_option('homepage_version')):
	case ('slide'):
		?>
        <div class="home-slider">
            <?php
            if (!empty($atts['slider_images'])):
                foreach($atts['slider_images'] as $slider_image):
            ?>
            <div class="single-home-slider <?=!checkMultidimentionalArrayKey($atts['slider_images'], 'content') ? 'no-content-header' : ''?>">
                <?php if(!empty($slider_image['content'])):?>
                    <img src="<?=$slider_image['content']['url']?>" alt="img">
                <?php endif; ?>
                <div class="header-overlay">
                    <div class="header-content">
                        <!-- Start header content slider -->
                        <h2 class="header-slide"><?= $slider_image['text_1'] ?>
                                <span><?php echo $slider_image['text_2']; ?></span>
                            <?= $slider_image['text_3'] ?></h2>
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
            <?php
                endforeach;
            endif;
            ?>
        </div>
		<?php
		break;
	case ('video'):
	    $replaces = array(
	            'watch?v=' => 'embed/',
	            'youtu.be' => 'youtube.com/embed',
        );
	    $video_url = strtr($atts['bg_video'], $replaces);
        $loop='';
	    if(fw_get_db_settings_option('video_loop')){
	        $loop = (int)fw_get_db_settings_option('video_loop');
            $id = substr($video_url, strrpos($video_url, '/') + 1);
            $loop = "loop=$loop&amp;playlist=$id&amp;";
        }
        ?>
        <?php if($video_url || $atts['video_first_row'] || $atts['video_slides'] || $atts['video_last_row']): ?>
    <div class="videoWrapper">
        <?php if($video_url):?>
        <iframe
                src="<?= $video_url?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;<?=$loop?>mute=<?=(int)fw_get_db_settings_option('video_mute')?>" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
        <?php endif;?>
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide"><?= $atts['video_first_row'] ?>
                    <?php foreach (fw_akg('video_slides', $atts, array()) as $slide): ?>
                        <span><?php echo $slide['content']; ?></span>
                    <?php endforeach; ?>
                    <?= $atts['video_last_row'] ?></h2>
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
        <?php endif; ?>
		<?php
		break;
	case ('image'):
	default :
	    if($image_url || $atts['first_row'] || $atts['slides'] || $atts['last_row']):
    $image_url = !empty($atts['image']['url'])
        ? $atts['image']['url']
        : '';
		?>
        <header id="header" <?=empty($image_url) ? 'class="no-content-header"' : ''?>>
            <div class="header-inner">
				<?php
				if($image_url):
				?>
                <img src="<?php echo esc_attr($image_url); ?>" alt="bg_image" style="width: 100%"/>
                    <?php endif; php?>
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
	<?php
        endif;
        endswitch;