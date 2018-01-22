<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ml
 */

get_header();
global $wp_query;?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            if ( have_posts() ) : ?>
                <section id="blog-banner">
                    <img src="<?=get_template_directory_uri().'/images/blog_bg.jpg'?>" alt="img">
                    <div class="blog-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-banner-area">
                                        <h2><?php
                                            /* translators: %s: search query. */
                                            printf( esc_html__( 'Search for: %s, Results %d', 'ml' ), '<span>' . get_search_query() . '</span>', $wp_query->found_posts );
                                            ?></h2></br>
                                        <
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
                                        <?php
                                        /* Start the Loop */
                                        while ( have_posts() ) : the_post();

                                            /**
                                             * Run the loop for the search to output the results.
                                             * If you want to overload this in a child theme then include a file
                                             * called content-search.php and that will be used instead.
                                             */
                                            get_template_part( 'template-parts/content', 'search' );
                                            echo '<hr>';
                                        endwhile;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
