<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *  @package SaturnThemes
 */
get_header();
$saturnthemes_industry_post_layout = Kirki::get_option( 'saturnthemes', 'blog_archive_layout' );
$saturnthemes_industry_post_archives_sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
$saturnthemes_core = SaturnThemesC();
?>
<div class="container">
    <div class="row">
        <main id="main" class="site-main <?php echo esc_attr( ( 'no-sidebar' != $saturnthemes_industry_sidebar_position && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ) ) ? 'col-md-9' : '' ); ?>">

            <?php if ( have_posts() ) : ?>

                <?php if ( $saturnthemes_industry_post_layout == 'grid' ) :
                    if( 'no-sidebar' == $saturnthemes_industry_sidebar_position ) : $saturnthemes_industry_columns_grid = 'col-sm-6 col-md-3'; else : $saturnthemes_industry_columns_grid = 'col-sm-6 col-md-4'; endif;
                    ?>
                    <div class="row">
                <?php endif; ?>

                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ( $saturnthemes_industry_post_layout == 'full' ) : ?>

                        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                    <?php elseif ( $saturnthemes_industry_post_layout == 'grid' ) : ?>
                        <div class="<?php echo $saturnthemes_industry_columns_grid; ?>">
                            <?php get_template_part( 'template-parts/content', 'grid' ); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php if ( $saturnthemes_industry_post_layout == 'grid' ) : ?>
                    </div>
                <?php endif; ?>

                <?php saturnthemes_industry_paging_nav(); ?>

            <?php endif; ?>
        </main>
        <!-- #main -->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>

