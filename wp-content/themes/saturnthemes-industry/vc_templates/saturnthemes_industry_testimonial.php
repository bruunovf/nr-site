<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$testimonials_id = 'testimonials-' . WPBakeryShortCode_SaturnThemes_Industry_Testimonial::getIndex();
$css_classes = array(
	'testimonial-container',
	$style,
	$testimonials_id,
	$el_class,
	$arrow_top,
);

$wrapper_attributes = array();

$css_class            = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

if ( 'yes' == $autoplay ) {
	$wrapper_attributes[] = 'data-autoplay="true"';
}

if ( 'yes' == $display_nav ) {
	$wrapper_attributes[] = 'data-nav="true"';
}

if ( 'yes' == $display_dots ) {
	$wrapper_attributes[] = 'data-dots="true"';
}

$wrapper_attributes[] = 'data-items="' . esc_attr( $items_per_slide ) . '"';

$output = '';
$testimonials = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => - 1 ) )
?>
<div <?php echo implode( ' ', $wrapper_attributes ); ?>>
	<?php if ( $testimonials->have_posts() ): ?>
		<div class="testimonial-list">
			<?php while ( $testimonials->have_posts() ): $testimonials->the_post(); ?>
				<div class="testimonial-inner">
					<?php if ( has_post_thumbnail() ): ?>
						<div class="testimonial-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<div class="testimonial-inner-content" style="color:<?php echo esc_attr( $text_color ); ?>">
						<?php the_excerpt(); ?>
						<p class="testimonial-inner-title" style="color:<?php echo esc_attr( $title_color ); ?>"><?php the_title(); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>
<?php if( !empty($arrow_color) ): ?>
	<style>
		.<?php echo esc_attr($testimonials_id) ?> .slick-arrow {
			color: <?php echo esc_attr($arrow_color); ?>;
			border-color: <?php echo esc_attr($arrow_color); ?>;
		}
	</style>
<?php endif; ?>