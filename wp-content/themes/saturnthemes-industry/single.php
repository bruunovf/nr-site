<?php
/**
 * The template for displaying all single posts.
 *
 *  @package SaturnThemes
 */
get_header();
$saturnthemes_core = SaturnThemesC();
?>

<div class="container main-content <?php echo esc_attr( saturnthemes_industry_get_content_layout() ); ?>">
    <div class="row">
        <main id="main" class="site-main col-xs-12 <?php echo esc_attr( ( 'no-sidebar' != $saturnthemes_core->get( 'saturnthemes_industry_sidebar_position' ) && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ) ) ? 'col-md-9' : '' ); ?>">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>

            <?php if ( '' !== get_the_author_meta( 'description' ) ) : ?>

                <?php saturnthemes_industry_entry_author(); ?>

            <?php endif; ?>

                <?php saturnthemes_industry_related_posts(); ?>

                <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
