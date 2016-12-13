<?php
extract( shortcode_atts( array(
	                         'link'         => '',
	                         'link_tooltip' => '',
	                         'btn_align'    => 'left',
	                         'btn_style'    => 'primary-button',

	                         'button_color'            => '',
	                         'button_text_color_hover' => '',

	                         'button_bg_color'       => '',
	                         'button_bg_color_hover' => '',

	                         'button_border_color'       => '',
	                         'button_border_color_hover' => '',

	                         'button_icon_color'       => '',
	                         'button_icon_color_hover' => '',

	                         'icon_fontawesome' => '',
	                         'icon_size'        => '16px',
	                         'css'              => '',
                         ), $atts ) );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
$link      = vc_build_link( $link );


$btn_rand_style = 'btn_number_' . rand( 0, 99999 );

$btn_styles  = "color:" . $button_color . "; background-color:" . $button_bg_color . "; border-color:" . $button_border_color . ";";
$icon_styles = "color:" . $button_icon_color . "; font-size:" . $icon_size;

if ( empty( $icon ) ) {
	$btn_classes = 'button ' . $btn_style;
} else {
	$btn_classes = 'icon-btn';
	$btn_styles  = "color:" . $button_color . "; border-color:" . $button_border_color . ";";
}

?>


<?php if ( ! empty( $link['url'] ) and ! empty( $link['title'] ) ): ?>
	<div class="icon-btn text-<?php echo esc_attr( $btn_align . ' ' . $css_class . ' ' . $btn_rand_style ); ?>">
		<a href="<?php echo esc_attr( $link['url'] ) ?>" class="<?php echo esc_attr( $btn_classes ); ?>" title="<?php echo esc_attr( $link_tooltip ); ?>">
			<?php if ( ! empty( $icon_fontawesome ) ): ?>
				<i class="fa <?php echo esc_attr( $icon_fontawesome ); ?> icon-in-btn"></i>
			<?php endif; ?>
			<span class="link-title"><?php echo esc_attr( $link['title'] ); ?></span>
		</a>
	</div>
<?php endif; ?>

<?php if( $btn_style == 'custom' ): ?>
<style>
	.<?php echo esc_attr($btn_rand_style) ?> .button.custom {
		<?php echo esc_attr( $btn_styles ); ?>
	}
	.<?php echo esc_attr($btn_rand_style) ?> .button.custom:hover {
		background-color: <?php echo esc_attr($button_bg_color_hover); ?>;
	}

	.<?php echo esc_attr($btn_rand_style) ?> .button.custom:hover {
		color: <?php echo esc_attr($button_text_color_hover); ?> !important;
	}

	.<?php echo esc_attr($btn_rand_style) ?> .link-title:hover {
		color: <?php echo esc_attr($button_text_color_hover) ?> !important;
	}

	.<?php echo esc_attr($btn_rand_style) ?> .button.custom:hover {
		border-color: <?php echo esc_attr($button_border_color_hover) ?> !important;
	}

	.<?php echo esc_attr($btn_rand_style) ?> .icon-in-btn {
		<?php echo esc_attr( $icon_styles ); ?> !important;
	}

	.<?php echo esc_attr($btn_rand_style) ?> .icon-in-btn:hover {
		color: <?php echo esc_attr($button_icon_color_hover) ?> !important;
	}
</style>
<?php endif; ?>