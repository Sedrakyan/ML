<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$title = !empty($atts['section_title']) ? $atts['section_title']: 'OUR TEAM';
$content = !empty($atts['content'])
    ? $atts['content']
    : '';
?>
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-area">
                    <div class="title-area">
                        <h2 class="tittle"><?=$title?></h2>
                        <span class="tittle-line"></span>
                        <?=$content?>
                    </div>
                    <!-- Start team content -->
                    <div class="team-content">
                        <ul class="team-grid">
                            <?php foreach  ( fw_akg( 'team_members', $atts, array() ) as $member ):  ?>
                            <li>
                                <div class="team-item wow fadeInUp" style="background-image: url(<?=$member['image']['url'] ? $member['image']['url'] : get_template_directory_uri().'/images/team-member1.png'?>)">
                                    <div class="team-info">
                                        <p> <?=$member['desc']?></p>
                                        <?php if (!empty($member['social_links'])) :
                                            foreach ($member['social_links'] as $social_link):?>
                                            <a href="<?=$social_link['link']?>"><span class="<?=esc_attr($social_link['icon'])?>"></span></a>
                                        <?php endforeach;
                                         endif;?>
                                    </div>
                                </div>
                                <div class="team-address">
                                    <p><?=$member['name']?></p>
                                    <span><?=$member['job']?></span>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <!-- End team content -->
                </div>
            </div>
        </div>
    </div>
</section>