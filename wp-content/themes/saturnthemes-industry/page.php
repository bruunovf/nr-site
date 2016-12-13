<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SaturnThemes
 */
get_header(); ?>
<div class="container main-content <?php echo esc_attr( saturnthemes_industry_get_content_layout() ); ?>">
    <div class="row">
        <div class="col-xs-12 <?php echo esc_attr( ( 'no-sidebar' != $saturnthemes_industry_sidebar_position && is_active_sidebar( $saturnthemes_industry_sidebar ) ) ? 'col-md-9' : '' ); ?>">
            <div class="content-wrapper">
                <main class="content site-main">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        if ( comments_open() || get_comments_number() ) : comments_template(); endif;

                    endwhile; // End of the loop.
                    ?>
                </main>
            </div><!--.content-wrapper-->
        </div>
    </div>
</div>
<?php get_footer(); ?>