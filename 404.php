<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ml
 */

get_header(); ?>
    <section id="error-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-page-area">
                        <div class="error-no-area">
                            <div class="error-no">
                                <h2>404 Error</h2>
                                <p>Sorry</p>
                            </div>
                        </div>
                    </div>
                    <div class="error-message">
                        <p><span class="opps_homepage">OOPS</span>, page not found,please try again or return to our <a href="/">homepage</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
