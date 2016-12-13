<?php
extract( shortcode_atts( array(
	                         'per_page'         => '4',
	                         'title_color'      => '',
	                         'department_color' => '',
	                         'icon_color'       => '',
	                         'show_icons'       => 'yes',
	                         'show_content'     => '',
	                         'image_size'       => 'image-270-190',
                         ), $atts ) );

$staff = new WP_Query( array( 'post_type' => 'staff', 'posts_per_page' => $per_page ) );

?>

<?php if ( $staff->have_posts() ): ?>
	<div class="row">
		<?php while ( $staff->have_posts() ): $staff->the_post(); ?>
			<?php
			$origin_socials = array(
				'facebook',
				'linkedin',
				'twitter',
				'google-plus',
				'youtube-play',
			);
			?>
			<?php $job = get_post_meta( get_the_id(), 'expert_sphere', true ); ?>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="staff-content">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail( $image_size, array( 'class' => 'staff-content-img' ) ); ?>
					<?php endif; ?>
					<h4 class="staff-content-title" style="color:<?php echo esc_attr($title_color); ?>"><?php the_title(); ?></h4>
					<?php if ( ! empty( $job ) ): ?>
						<p class="staff-content-department" style="color:<?php echo esc_attr($department_color); ?>;"><?php echo esc_attr( $job ); ?></p>
					<?php endif; ?>
					<?php if ( $show_content == 'yes' ): ?>
						<?php the_content(); ?>
					<?php endif; ?>
					<div class="expert-socials <?php if ( $show_icons == 'yes' ) { echo 'show'; }  ?>">
						<?php foreach ( $origin_socials as $social ): ?>
							<?php $current_social = get_post_custom_values( $social, get_the_id() ); ?>
							<?php if ( ! empty( $current_social[0] ) ): ?>
								<a class="expert-social" href="<?php echo( $current_social[0] ); ?>" style="color:<?php echo esc_attr($icon_color); ?>" title="<?php echo esc_html__( 'View expert on', 'saturnthemes-industry' ) . ' ' . $social ?>">
									<i class="fa fa-<?php echo( $social ); ?>"></i>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>