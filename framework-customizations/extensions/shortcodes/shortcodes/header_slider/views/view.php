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
            <div class="single-home-slider">
                <img src="<?=$slider_image['content']['url']?>" alt="img">
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
	    $video_url = strtr($atts['bg_video'], $replaces)?>
    <div class="videoWrapper">
        <iframe
                src="<?= $video_url?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
    </div>
		<?php
		break;
	case ('image'):
	default :
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
	<?php
endswitch;