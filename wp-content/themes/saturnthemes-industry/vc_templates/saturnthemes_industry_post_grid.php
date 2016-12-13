<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$query = $this->build_loop_query( $atts );
$post_grid_id = 'post-grid-' . WPBakeryShortCode_SaturnThemes_Industry_Post_Grid::getIndex();
$css_classes = array(
	$post_grid_id,
);
$css_class            = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
?>
	<div class="industry-blog-posts <?php echo esc_attr( trim( $css_class ) ); ?>" id="<?php echo esc_attr( trim( $css_class ) ); ?>">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'grid-style-1' ); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>

<?php if( !empty($title_color) || !empty($meta_color) || !empty($arrow_color) ): ?>
	<style>
		<?php if( !empty($title_color) ): ?>
			.<?php echo esc_attr($post_grid_id) ?> a {
				color: <?php echo esc_attr($title_color); ?>;
			}
		<?php endif; ?>
		<?php if( !empty($meta_color) ): ?>
			.<?php echo esc_attr($post_grid_id) ?> .posted-on {
				color: <?php echo esc_attr($meta_color); ?>;
			}
		<?php endif; ?>
		<?php if( !empty($arrow_color) ): ?>
			.<?php echo esc_attr($post_grid_id) ?> .slick-arrow {
				color: <?php echo esc_attr($arrow_color); ?>;
				border-color: <?php echo esc_attr($arrow_color); ?>;
			}
		<?php endif; ?>
	</style>
<?php endif; ?>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		var $carousel = $('#<?php echo esc_js( $post_grid_id ); ?>');
		$carousel.slick({
			<?php if ( 'yes' == $autoplay ) : ?>
			autoplay: true,
			<?php endif; ?>
			<?php if ( 'yes' !== $show_arrow ) : ?>
			arrows: false,
			<?php else : ?>
			arrows: true,
			prevArrow: '<i class="fa fa-angle-left slick-arrow-prev"></i>',
			nextArrow: '<i class="fa fa-angle-right slick-arrow-next"></i>',
			<?php endif; ?>
			<?php if ( 'yes' !== $show_dots ) : ?>
			dots: false,
			<?php else : ?>
			dots: true,
			<?php endif; ?>
			mobileFirst: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 766,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	});
</script>