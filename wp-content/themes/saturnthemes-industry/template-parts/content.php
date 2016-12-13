<?php
/**
 * The default template for displaying content
 *
 * @package SaturnThemes
 */

$saturnthemes_industry_hide_category       = Kirki::get_option( 'saturnthemes', 'post_hide_category' );
$saturnthemes_industry_hide_date           = Kirki::get_option( 'saturnthemes', 'post_hide_date' );
$saturnthemes_industry_hide_author         = Kirki::get_option( 'saturnthemes', 'post_hide_author' );
$saturnthemes_industry_hide_share_buttons  = Kirki::get_option( 'saturnthemes', 'post_hide_share_buttons' );
$saturnthemes_industry_hide_read_more      = Kirki::get_option( 'saturnthemes', 'post_hide_read_more' );
$saturnthemes_industry_hide_comment_link   = Kirki::get_option( 'saturnthemes', 'post_hide_comment_link' );
$saturnthemes_industry_hide_featured_image = Kirki::get_option( 'saturnthemes', 'post_hide_featured_image' );
$saturnthemes_industry_hide_tags           = Kirki::get_option( 'saturnthemes', 'post_hide_tags' );
$saturnthemes_industry_hide_author_area    = Kirki::get_option( 'saturnthemes', 'post_hide_author_area' );
$saturnthemes_industry_hide_related_posts  = Kirki::get_option( 'saturnthemes', 'post_hide_related_posts' );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'full-layout' ); ?>>

    <header class="entry-header">

        <?php if ( is_single() ) : ?>
            <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php else : ?>
            <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>

        <?php if ( ! $saturnthemes_industry_hide_date || ! $saturnthemes_industry_hide_author || ! $saturnthemes_industry_hide_comment_link || ! $saturnthemes_industry_hide_category || ! $saturnthemes_industry_hide_comment_link ) { ?>
            <div class="entry-meta">

                <?php if ( ! $saturnthemes_industry_hide_date ) { ?>
                    <span class="entry-meta-item">
                        <?php saturnthemes_industry_posted_on(); ?>
                    </span><!--post-date-->
                <?php } ?>

                <?php if ( ! $saturnthemes_industry_hide_author ) { ?>
                    <span class="entry-meta-item">
                        <i class="fa fa-user"></i>
                        <?php esc_html_e( 'Postado por', 'saturnthemes-industry' ) ?>
                        <?php the_author_posts_link(); ?>
                    </span>
                <?php } ?>

                <?php if ( ! $saturnthemes_industry_hide_category ) { ?>
                    <span class="entry-meta-item">
                        <i class="fa fa-folder-o"></i>
                        <?php esc_html_e( 'Categoria:', 'saturnthemes-industry' ) ?>
                        <?php saturnthemes_industry_entry_categories(); ?>
                    </span>
                <?php } ?>

                <?php if ( ! $saturnthemes_industry_hide_comment_link ) { ?>
                    <span class="entry-meta-item pull-right">
                        <i class="fa fa-comment-o"></i>
                        <?php saturnthemes_industry_entry_comments(); ?>
                    </span>
                <?php } ?>

            </div>
        <?php } ?>

    </header><!-- .entry-header -->

    <?php if ( has_post_format( 'gallery' ) ) { ?>
        <?php $gallery_images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>
        <?php if ( $gallery_images ) { ?>
            <div class="post-img post-gallery">
                <?php foreach ( $gallery_images as $image ) { ?>
                    <?php $img = wp_get_attachment_image_src( $image, 'saturnthemes-industry-full-thumb' ); ?>
                    <?php $caption = get_post_field( 'post_excerpt', $image ); ?>
                    <div><img src="<?php echo esc_url( $img[0] ); ?>" alt="<?php echo ''; ?>"></div>
                <?php } ?>
            </div>
        <?php } ?>
    <?php } elseif ( has_post_format( 'video' ) ) { ?>
            <div class="post-video">
                <?php $video = get_post_meta( get_the_ID(), '_format_video_embed', true ); ?>
                <?php if ( wp_oembed_get( $video ) ) { ?>
                    <?php echo wp_oembed_get( $video ); ?>
                <?php } else { ?>
                    <?php echo '' . $video; ?>
                <?php } ?>
            </div>
    <?php } elseif ( has_post_format( 'audio' ) ) { ?>
        <div class="post-audio">
            <?php $audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
            <?php if ( wp_oembed_get( $audio ) ) { ?>
                <?php echo wp_oembed_get( $audio ); ?>
            <?php } else { ?>
                <?php echo '' . $audio; ?>
            <?php } ?>
        </div>
    <?php } elseif ( has_post_format( 'quote' ) ) { ?>
        <?php $source_name = get_post_meta( $post->ID, '_format_quote_source_name', true ); ?>
        <?php $url = get_post_meta( $post->ID, '_format_quote_source_url', true ); ?>
        <?php $quote = get_post_meta( $post->ID, '_format_quote_text', true ); ?>
        <?php if ( $quote ) { ?>
            <div class="post-quote">
                <h2><?php echo esc_attr( $quote ); ?></h2>
                <div class="source-name">
                    <?php if ( $source_name ) { ?>
                        <?php if ( $url ) { ?>
                            <a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo esc_attr( $source_name ); ?></a>
                        <?php } else { ?>
                            <span><?php echo esc_attr( $source_name ); ?></span>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <?php if ( has_post_thumbnail() && ! $saturnthemes_industry_hide_featured_image ) { ?>
            <picture class="post-img">
                <?php if ( is_single() ) : ?>
                    <?php the_post_thumbnail( 'saturnthemes-industry-full-thumb' ); ?>
                <?php else : ?>
                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'full-thumb' ); ?></a>
                <?php endif; ?>
            </picture>
        <?php } ?>
    <?php } ?>

    <div class="entry-content">

        <?php if ( is_single() ) : ?>

            <?php the_content( esc_html__( '<span class="more-button">Continue Lendo</span>', 'saturnthemes-industry' ) ); ?>

            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Paginas:', 'saturnthemes-industry' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'saturnthemes-industry' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        <?php else : ?>

            <?php if ( Kirki::get_option( 'saturnthemes', 'post_summary' ) == 'excerpt' ) : ?>

                <p><?php echo saturnthemes_industry_string_limit_words( get_the_excerpt(), 80 ); ?>&hellip;</p>

            <?php elseif ( Kirki::get_option( 'saturnthemes', 'post_summary' ) == 'read-more' ) : ?>

                <?php the_content(''); ?>

            <?php else: ?>

                <?php the_content(); ?>

            <?php endif; ?>

        <?php endif; ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php if ( ! $saturnthemes_industry_hide_tags ) { ?>
            <div class="row row-xs-center">
                <div class="col-sm-7">
                    <?php if( is_single() ) { ?>
                        <?php if ( ! $saturnthemes_industry_hide_tags ) { ?>
                            <div class="post-tags">
                                <?php saturnthemes_industry_entry_tags(); ?>
                            </div><!--post-tags-->
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ( Kirki::get_option( 'saturnthemes', 'post_summary' ) == 'read-more' || Kirki::get_option( 'saturnthemes', 'post_summary' ) == 'excerpt' && ! is_single() ) : ?>
                            <a href="<?php echo get_permalink() ?>" class="more-link button primary-button"><i class="fa fa-share"></i><?php esc_html_e( 'Leia Mais', 'saturnthemes-industry' ); ?></a>
                        <?php endif; ?>
                    <?php } ?>
                </div>
                <div class="col-sm-5 end-sm">
                    <?php if ( ! $saturnthemes_industry_hide_share_buttons ) { ?>
                        <div class="post-share-buttons">
                            <i class="fa fa-share-alt"></i>
                            <span class="share-buttons-text text-uppercase"><?php esc_html_e( 'Compartilhe', 'saturnthemes-industry' ) ?></span>
                            <a target="_blank" href="https://facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&map;url=<?php echo get_permalink(); ?>&amp;title=<?php echo urlencode(get_the_title()); ?>"><i class="fa fa-linkedin-square"></i></a>
                            <a target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-## -->