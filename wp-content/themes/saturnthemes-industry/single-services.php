<?php
/**
 * The template for displaying all single posts.
 *
 *  @package SaturnThemes
 */
get_header();
?>

<div class="container main-content <?php echo esc_attr( saturnthemes_industry_get_content_layout() ); ?>">
	<div class="row">
		<main id="main" class="site-main col-xs-12">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
