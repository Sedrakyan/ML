<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ml
 */

?>

<section class="no-results not-found">
    <section id="error-page" class="window-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-message">
                        <p><span class="opps_homepage">OOPS</span>, <?=esc_html_e( ' nothing matched your search terms. Please try again with some different keywords.', 'ml' );?> <a href="/">homepage</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section><!-- .no-results -->
