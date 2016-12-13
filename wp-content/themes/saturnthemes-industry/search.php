<?php
/**
 * The template for displaying search results pages.
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
        <main id="main" class="site-main col-md-12">

            <?php if ( have_posts() ) : ?>

                <div class="row">

                <?php /* Start the Loop */ ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-sm-6 col-md-3">
                        <?php get_template_part( 'template-parts/content', 'grid' ); ?>
                    </div>

                <?php endwhile; ?>

                </div>

                <?php saturnthemes_industry_paging_nav(); ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif;?>
        </main>
        <!-- #main -->
    </div>
</div>
<?php get_footer(); ?>

