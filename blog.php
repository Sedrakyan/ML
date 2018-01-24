<?php
ob_start();
/**
 * The template for displaying blog pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ml
 */
/*
Template Name: Blog
*/
get_header();
if ( have_posts() ) :
    ?>
    <section id="blog-banner">
        <div id="banner-img-container">
            <?= get_the_post_thumbnail($post)? get_the_post_thumbnail() : '<img src="'.get_template_directory_uri().'/images/blog_bg.jpg" alt="img">' ; ?>
        </div>
        <div class="blog-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-banner-area">
                            <h2>Blog Archive</h2>
                            <ol class="breadcrumb">
                                <li><a href="<?=home_url('/')?>">Home</a></li>
                                <li class="active">Blog Archive</li>
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
                                <div class="blog-left blog-archive">
                                    <!-- Start single blog post -->
                                    <?php  $postsPerPage = fw_get_db_settings_option('posts_per_page');

                                    $page = (get_query_var('page') && count(get_posts()) > (int) $postsPerPage) ? (int) get_query_var('page') : 1;

                                    if (get_query_var('page') && count(get_posts()) < (int) $postsPerPage) {
                                        wp_redirect(get_home_url()."/blog");
                                    }
                                    $postOffset = ( $page - 1 ) * $postsPerPage;

                                    $args = array(
                                        'posts_per_page'  => $postsPerPage,
                                        'offset'          => $postOffset,
                                        'post_type'       => 'post'
                                    );

                                    $postlist = get_posts($args);

                                    foreach ( $postlist as $post ) :?>
                                        <article class="single-from-blog<?=fw_get_db_settings_option('version') == 'dark'? ' black-222':'' ?>">
                                            <figure>
                                                <a href="<?=$post->guid ?>"><?= get_the_post_thumbnail($post->ID)?></a>
                                            </figure>
                                            <div class="blog-title">
                                                <h2><a href="<?=$post->guid ?>"><?=$post->post_title?></a></h2>
                                                <p class="blog-admin"><?=date('d M Y', strtotime($post->post_date))?>
                                                    <a href="<?=$post->guid ?>" class="com-like"><span class="fa fa-comment-o"></span><?=$post->comment_count?> Comments</a>
                                                    <span  class="com-like"><a href="#" class="<?=liked($post->ID)?'fa fa-thumbs-up':'fa fa-thumbs-o-up'?>" data-id="<?=$post->ID?>"></a><span class="like-count"> <?=get_likes_count($post->ID)?> <?=get_likes_count($post->ID)==1?'Like':'Likes'?></span></span>
                                                </p>
                                            </div>
                                            <p><?= $post->post_excerpt?$post->post_excerpt:$post->post_content ?></p>
                                        </article>

                                    <?php
                                    endforeach;
                                    if (count(get_posts()) > $postsPerPage) {
                                        $pages = (int) ceil(count(get_posts())/$postsPerPage);?>
                                        <nav>
                                        <ul class="pagination blog-pagination">
                                        <?php
                                        if ( $page > 1) {
                                            ?>
                                            <li>
                                                <a href="<?=get_home_url();?>/blog/<?=$page-1?>" aria-label="Previous">
                                                    <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                        <?php }
                                        for ($i=1; $i<=$pages; $i++) {
                                            if ( $i == 1 || $i == $pages || ($i >= $page -1 && $i <= $page + 1)) {?>
                                                <li><a href="<?=$page == $i ? '#' : get_home_url().'/blog/' . ($i)?>"><?=$i?></a></li>
                                            <?php } else {
                                                if ( $i < $page)
                                                    $i = $page -2;
                                                if ( $i > $page)
                                                    $i = $pages-1; ?>
                                                <li><a>...</a></li>
                                            <?php }
                                        }
                                        if ($page < $pages) {
                                            ?>
                                            <li>
                                                <a href="<?=get_home_url();?>/blog/<?=$page+1?>" aria-label="Next">
                                                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </li>
                                            </ul>
                                            </nav>
                                        <?php }
                                    }
                                    ?>
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
    <?php
    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;

get_footer();
ob_end_flush();