<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ml
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

                    <?php

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    the_posts_navigation();
                else:
                    $post = get_post( $post );
                    ?>
                    <section id="blog-banner">
                        <?= '<img src="'.get_template_directory_uri().'/images/blog_bg.jpg" alt="img">' ; ?>
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
                                                        wp_redirect("/blog");
                                                    }
                                                    //var_dump($page);die;
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
                                                                    <a  class="com-like">
                                                                        <span class="<?=liked($post->ID)?'fa fa-thumbs-up':'fa fa-thumbs-o-up'?>" data-id="<?=$post->ID?>"></span>
                                                                        <span class="like-count"><?=get_likes_count($post->ID)?> <?=get_likes_count($post->ID)==1?'Like':'Likes'?></span>
                                                                    </a>
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
                                                                <a href="/blog/<?=$page-1?>" aria-label="Previous">
                                                                    <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                                </a>
                                                            </li>
                                                        <?php }
                                                        for ($i=1; $i<=$pages; $i++) {
                                                            if ( $i == 1 || $i == $pages || ($i >= $page -1 && $i <= $page + 1)) {?>
                                                                <li><a href="<?=$page == $i ? '#' : '/blog/' . ($i)?>"><?=$i?></a></li>
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
                                                                <a href="/blog/<?=$page+1?>" aria-label="Next">
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

                endif;

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
