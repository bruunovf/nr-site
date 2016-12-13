<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *  @package SaturnThemes
 */
get_header();
?>
<div class="container">
    <div class="row">
        <main id="main" class="site-main col-xs-12">
            <?php
            $services = new WP_Query( array( 'post_type' => 'services' ) );
            ?>

            <?php if ( $services->have_posts() ): ?>
                <div class="row">
                    <?php while ( $services->have_posts() ): $services->the_post(); ?>
                        <?php $services_icon = get_post_meta( get_the_id(), 'saturnthemes_industry_icon', true ); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="services-content">
                                <div class="services-content-header">
                                    <?php if ( has_post_thumbnail() ): ?>
                                        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'image-370-190', array( 'class' => 'services-content-img' ) ); ?></a>
                                    <?php endif; ?>
                                    <?php if ( $services_icon ): ?>
                                        <div class="services-icon"><i class="<?php echo esc_attr( $services_icon ); ?>"></i></div>
                                    <?php endif; ?>
                                </div>
                                <h3 class="services-content-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php if ( has_excerpt() ): ?>
                                    <?php the_excerpt(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </main>
        <!-- #main -->
    </div>
</div>
<?php get_footer(); ?>

