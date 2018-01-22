<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<?php
$title = !empty($atts['section_title']) ? $atts['section_title']: 'Our blog';
$content = !empty($atts['content'])
    ? $atts['content']
    : '';
if(get_posts()) :
    $empty = true ;
    foreach ( get_posts() as $post ) :
        if (fw_get_db_post_option($post->ID, 'show_in_main_page')) :
            $empty = false;
            break;
        endif;
    endforeach;
    if (!$empty) :
?>
    <section id="from-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="from-blog-area">
                    <div class="title-area">
                        <h2 class="tittle"><?=$title?></h2>
                        <span class="tittle-line"></span>
                        <?=$content?>
                    </div>
                    <!-- From Blog content -->
                    <div class="from-blog-content">
                        <div class="row">
                            <?php $i = 0;
                            foreach ( get_posts(['posts_per_page'   => -1]) as $post ) :
                                if (fw_get_db_post_option($post->ID, 'show_in_main_page')) :
                                    if($i%4 == 0 && $i) {
                                echo "</div><div class=\"row\">";
                                    }
                            ?>
                                <div class="col-md-3">
                                <article class="single-from-blog">
                                    <figure>
                                        <a href="<?= $post->guid ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
                                    </figure>
                                    <div class="blog-title">
                                        <h2><a href="<?=$post->guid?>"><?=$post->post_title?></a></h2>
                                        <p class="blog-admin"><?=date('d M Y', strtotime($post->post_date))?>
                                <a href="<?=$post->guid ?>" class="com-like"><span class="fa fa-comment-o"></span><?=$post->comment_count?>  Comments</a>
                                            <a  class="com-like"><span class="<?=liked($post->ID)?'fa fa-thumbs-up':'fa fa-thumbs-o-up'?>" data-id="<?=$post->ID?>"></span><span class="like-count"><?=get_likes_count($post->ID)?> <?=get_likes_count($post->ID)==1?'Like':'Likes'?></span></a>                                        </p>
                                    </div>
                                    <p><?=$post->post_excerpt?$post->post_excerpt:$post->post_content?></p>
                                </article>
                            </div>
                            <?php
                                $i++;
                                endif;
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
endif;
?>
