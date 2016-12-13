<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

$css_class .= ' ' . $el_class;
?>


<div class="industry-contact-detail<?php echo esc_attr( $css_class ); ?>">

	<?php if( $title ): ?>
		<h4 class="heading"><?php echo esc_attr( $title ); ?></h4>
	<?php endif; ?>
	<ul>
		<?php if( $address ): ?>
			<li>
				<div class="icon"><i class="fa fa-map-marker"></i></div>
				<div class="text"><?php echo wp_kses( $address, array( 'br' => array() ) ); ?></div>
			</li>
		<?php endif; ?>
		<?php if( $phone ): ?>
			<li>
				<div class="icon"><i class="fa fa-phone"></i></div>
				<div class="text"><?php echo esc_attr( $phone ); ?></div>
			</li>
		<?php endif; ?>
		<?php if( $email ): ?>
			<li>
				<div class="icon"><i class="fa fa-envelope-o"></i></div>
				<div class="text"><a href="mailto:<?php echo antispambot( $email ); ?>"><?php echo antispambot( $email ); ?></a></div>
			</li>
		<?php endif; ?>
	</ul>
	<?php if( $facebook || $twitter || $linkedin || $google_plus || $skype ): ?>
		<ul class="contact-social-links">
			<?php if( $facebook ): ?>
				<li><a href="<?php echo esc_url( $facebook ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php endif; ?>
			<?php if( $twitter ): ?>
				<li><a href="<?php echo esc_url( $twitter ); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php endif; ?>
			<?php if( $linkedin ): ?>
				<li><a href="<?php echo esc_url( $linkedin ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php endif; ?>
			<?php if( $google_plus ): ?>
				<li><a href="<?php echo esc_url( $google_plus ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php endif; ?>
			<?php if( $skype ): ?>
				<li><a href="skype:<?php echo esc_attr( $skype ); ?>"><i class="fa fa-skype"></i></a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>

</div>