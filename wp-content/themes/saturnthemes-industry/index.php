<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SaturnThemes
 */
$saturnthemes_industry_post_layout = Kirki::get_option( 'saturnthemes', 'blog_layout' );
$saturnthemes_industry_post_archives_sidebar_position = Kirki::get_option( 'saturnthemes', 'post_archives_sidebar_position' );
$saturnthemes_core = SaturnThemesC();
get_header(); ?>

<div class="container">
    <div class="row">
        <main id="main" class="site-main col-xs-12 <?php echo esc_attr( ( 'no-sidebar' != $saturnthemes_industry_post_archives_sidebar_position && is_active_sidebar( $saturnthemes_core->get( 'saturnthemes_industry_sidebar' ) ) ) ? 'col-md-9' : '' ); ?>">

            <?php if ( have_posts() ) : ?>

            <?php if ( $saturnthemes_industry_post_layout == 'grid' ) :
            if( 'no-sidebar' == $saturnthemes_industry_post_archives_sidebar_position ) : $saturnthemes_industry_columns_grid = 'col-sm-6 col-md-3'; else : $saturnthemes_industry_columns_grid = 'col-sm-6 col-md-4'; endif;
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

