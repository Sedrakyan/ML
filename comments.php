<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ml
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area<?=defined('FW') && fw_get_db_settings_option('version') == 'light'? '':' black-222' ?>">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( 1 === $comment_count ) {
                printf(
                    esc_html_e( 'One Comment', 'ml' ),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf( // WPCS: XSS OK.
                /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s Comment', '%1$s Comments', $comment_count, 'comments title', 'ml' ) ),
                    number_format_i18n( $comment_count ),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <ul class="comment-list">
            <?php
            wp_list_comments(array( 'style' => 'ul' ,'callback' =>'ml_comment'));
            ?>
        </ul><!-- .comment-list -->

        <?php the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ml' ); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().

    $args = array(
        'class_form' => 'comment-form',
        'fields' => apply_filters( 'comment_form_default_fields', array(

                'author' =>
                    '<div class="form-group">' .
                    '<input id="author" placeholder="Name" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' /></div>',

                'email' =>
                    '<div class="form-group">' .
                    '<input id="email" name="email" type="email" placeholder="Email" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' /></div>',
            )

        ),
        'comment_notes_before' => '',
        'title_reply'          => '',
        'comment_field' => '<div class="form-group"><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
        'submit_button'        => ' <button class="button button-default" data-text="Comment" type="submit"><span>Comment</span></button>',

    );
    ?>
    <div class="blog-comment black-222"><h2>Comment</h2>
        <?php
        comment_form( $args );
        ?>

    </div><!-- #comments -->
</div><!-- #comments -->
