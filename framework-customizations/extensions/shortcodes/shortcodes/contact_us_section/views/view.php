<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$section_title = !empty($atts['section_title']) ? $atts['section_title']: 'Contact us';
$form_title = !empty($atts['form_title']) ? $atts['form_title']: 'Send a message';
$name_placeholder = !empty($atts['name_placeholder']) ? $atts['name_placeholder']: 'Name';
$email_placeholder = !empty($atts['email_placeholder']) ? $atts['email_placeholder']: 'Email';
$send_to = !empty($atts['send_to']) ? $atts['send_to']: '';
$map = !empty($atts['map']) ? $atts['map']: '';
$location = '';
if($map['address']){
    $location .= $map['address'];
}
if($map['city']) {
    $location .= $location ? ', '.$map['city']: $map['city'];
}
if($map['state']) {
    $location .= $location ? ', '.$map['state']: $map['state'];
}
if($map['country']) {
    $location .= $location ? ', '.$map['country']: $map['country'];
}
if($map['zip']) {
    $location .= $location ? ', '.$map['zip']: $map['zip'];
}
?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="contact-left wow fadeInLeft">
                    <h2><?=$section_title?></h2>
                    <?php  foreach  ( fw_akg( 'contact_info', $atts, array() ) as $contact_info ):  ?>
                    <div class="single-address">
                        <h4><?=$contact_info['title']?></h4>
                        <?=$contact_info['content']?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact-right wow fadeInRight">
                    <h2><?=$form_title?></h2>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="contact-form" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="<?=$name_placeholder?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="<?=$email_placeholder?>" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="content" required></textarea>
                        </div>
                        <input type="hidden" name="action" value="contact_form">
                        <input type="hidden" name="send_to" value="<?=$send_to?>">
                        <div class="flex-between">
                        <?php
                        if (isset($_GET['success']) && $_GET['success'] == 1) :?>
                        <p class="contact-success-message">Your message delivered</p>
                        <?php elseif(isset($_GET['success']) && $_GET['success'] == 0) : ?>
                        <p class="contact-error-message">Sorry delivery has failed, please try later</p>
                        <?php else: ?>
                            <p></p>
                        <?php endif; ?>
                        <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php if($location): ?>
        <div class="map-show">
            <div>
                <p>ADDRESS ON MAP</p>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
        </div>
<?php endif; ?>
    </div>
</section>
<!-- Start Google Map -->
<?php if($location):?>
<section id="google-map">
    <iframe
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_gWzp-3aEc_D5TL_i4ttjJwQCOdLKMEA
    &q=<?=urlencode($location)?>" allowfullscreen>
    </iframe>
</section>
<!-- End Google Map -->
<?php endif;