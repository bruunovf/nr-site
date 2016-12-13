<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
$css_class .= ' ' . $style;
$services = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => $per_page ) );
$per_row == '3' ? $col = 'col-md-4' : $col = 'col-md-3';
?>

<?php if ( $services->have_posts() ): ?>
	<div class="row">
		<?php while ( $services->have_posts() ): $services->the_post(); ?>
			<?php $services_icon = get_post_meta( get_the_id(), 'saturnthemes_industry_icon', true ); ?>
			<div class="col-sm-6 <?php echo esc_attr( $col ); ?>">
				<div class="services-content<?php echo esc_attr( $css_class ); ?>">
					<div class="services-content-header">
						<?php if ( has_post_thumbnail() && ( $style !== 'style2' ) ): ?>
							<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'image-370-190', array( 'class' => 'services-content-img' ) ); ?></a>
						<?php endif; ?>
						<?php if ( $show_icon == 'yes' ): ?>
							<div class="services-icon"><i class="<?php echo esc_attr( $services_icon ); ?>"></i></div>
						<?php endif; ?>
					</div>
					<h3 class="services-content-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php if ( $show_excerpt == 'yes' ): ?>
						<?php the_excerpt(); ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>