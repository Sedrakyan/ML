<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ml
 */
?>
<section id="blog-banner">
    <div class="banner-img-container">
        <img src="<?=fw_get_db_post_option($post->ID, 'bg_image') ? fw_get_db_post_option($post->ID, 'bg_image')['url'] : get_template_directory_uri().'/images/blog_bg.jpg'?>" alt="img">
    </div>
    <div class="blog-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-banner-area">
                        <h2>Blog Single</h2>
                        <ol class="breadcrumb">
                            <li><a href="<?=get_home_url();?>">Home</a></li>
                            <li class="active"><?php
                                the_title( '', '' );
                                ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-area">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="blog-left blog-details">
                                <!-- Start single blog post -->
                                <article class="single-from-blog black-222">
                                    <?php if( $post->post_type !== 'newsman_ap' ) { ?>
                                    <div class="blog-title">
                                        <?php
                                        the_title( '<h2><a href="'.$post->guid.'">', '</a></h2>' );
                                        ?>
                                        <p class="blog-admin"><?=date('d M Y', strtotime($post->post_date))?>
                                            <a href="<?=$post->guid?>" class="com-like"><span class="fa fa-comment-o"></span><?=$post->comment_count?> Comments</a>
                                            <span  class="com-like"><a href="#" class="<?=liked($post->ID)?'fa fa-thumbs-up':'fa fa-thumbs-o-up'?>" data-id="<?=$post->ID?>"></a><span class="like-count"> <?=get_likes_count($post->ID)?> <?=get_likes_count($post->ID)==1?'Like':'Likes'?></span></span>
                                        </p>
                                    </div> <?php } ?>
                                    <figure>
                                        <a href="<?=$post->guid?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
                                    </figure>
                                    <div class="blog-details-content">
                                        <p><?=$post->post_content?></p>
                                    </div>
                                <?php
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                ?>
                                </article>
                                <!-- End single blog post -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12">
                            <aside class="blog-right">
                                <?php get_sidebar(); ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>