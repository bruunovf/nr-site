<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package SaturnThemes
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

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h3 class="widget-title">
            <?php printf(esc_html__('%1$s Comments', 'saturnthemes-industry'), get_comments_number()); ?>
        </h3>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'saturnthemes-industry' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'saturnthemes-industry' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'saturnthemes-industry' ) ); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <ul class="comment-list">
            <?php
            wp_list_comments( array(
                                  'style'      => 'ul',
                                  'short_ping' => true,
                                  'callback'    => 'saturnthemes_industry_comment',
                                  'avatar_size' => 100
                              ) );
            ?>
        </ul><!-- .comment-list -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation">

                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'saturnthemes-industry' ); ?></h2>

                <div class="nav-links">
                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'saturnthemes-industry' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'saturnthemes-industry' ) ); ?></div>
                </div><!-- .nav-links -->

            </nav><!-- #comment-nav-below -->
        <?php endif; // Check for comment navigation. ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'saturnthemes-industry' ); ?></p>
    <?php endif; ?>

    <?php
    $saturnthemes_industry_commenter     = wp_get_current_commenter();
    $saturnthemes_industry_req           = get_option('require_name_email');
    $saturnthemes_industry_aria_req      = ($saturnthemes_industry_req ? " aria-required='true'" : '');
    $saturnthemes_industry_fields        = array(
        'author' => '<p class="col-md-4 comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'saturnthemes-industry' ) . ' <span class="required">*</span></label> ' .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $saturnthemes_industry_commenter['comment_author'] ) . '" size="30" aria-required="true" /></p>',
        'email'  => '<p class="col-md-4 comment-form-email"><label for="email">' . esc_html__( 'Email', 'saturnthemes-industry' ) . ' <span class="required">*</span></label> ' .
                    '<input id="email" name="email" type="text" value="' . esc_attr(  $saturnthemes_industry_commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></p>',
        'website'  => '<p class="col-md-4 comment-form-website"><label for="website">' . esc_html__( 'Website', 'saturnthemes-industry' ) . '</label> ' .
                    '<input id="website" name="website" type="text" value="' . esc_attr(  $saturnthemes_industry_commenter['comment_author_url'] ) . '" size="30"/></p>',
    );
    $saturnthemes_industry_comments_args = array(
        // change the title of send button
        'label_submit'         => esc_html__('Post Comment', 'saturnthemes-industry'),
        // change the title of the reply section
        'title_reply'          => esc_html__( 'Write a comment', 'saturnthemes-industry' ) ,
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after'  => '',
        'comment_notes_before' => '',
        'fields'               => apply_filters('comment_form_default_fields', $saturnthemes_industry_fields),
        'comment_field' => '<div class="col-sm-12"><label for="comment">' . esc_html__( 'Comment','saturnthemes-industry' ) . '<span class="required">*</span></label><textarea id="comment" rows="5" name="comment" aria-required="true"></textarea></div>',
    );
    comment_form($saturnthemes_industry_comments_args); ?>

</div><!-- #comments -->
