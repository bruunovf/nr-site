<?php
/**
 * Plugin Name: Facebook Widget
 */

if ( ! class_exists( 'saturnthemes_industry_Facebook_Widget' ) ) {

	add_action( 'widgets_init', 'load_saturnthemes_industry_facebook_widget' );

	function load_saturnthemes_industry_facebook_widget() {
		register_widget( 'saturnthemes_industry_Facebook_Widget' );
	}

	class saturnthemes_industry_Facebook_Widget extends WP_Widget {
		/**
		 * Register widget with WordPress.
		 */
		function __construct() {
			parent::__construct(
				'zk_facebook',
				esc_html__( 'SaturnThemes - Facebook Page Like', 'saturnthemes-industry' ),
				array( 'description' => esc_html__( 'Facebook Page "Like" button', 'saturnthemes-industry' ) )
			);
		}

		function widget( $args, $instance ) {
			extract( $args );

			$title              = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
			$url                = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';
			$width              = isset( $instance[ 'width' ] ) ? $instance[ 'width' ] : '';
			$height             = isset( $instance[ 'height' ] ) ? $instance[ 'height' ] : '';
			$use_small_header   = isset( $instance[ 'use_small_header' ] ) ? $instance[ 'use_small_header' ] : '';
			$adapt_to_container = isset( $instance[ 'adapt_to_container' ] ) ? $instance[ 'adapt_to_container' ] : '';
			$hide_cover         = isset( $instance[ 'hide_cover' ] ) ? $instance[ 'hide_cover' ] : '';
			$show_face          = isset( $instance[ 'show_face' ] ) ? $instance[ 'show_face' ] : '';
			$show_posts         = isset( $instance[ 'show_posts' ] ) ? $instance[ 'show_posts' ] : '';

			echo '' . $args[ 'before_widget' ];

			$output = '<h3 class="widget-title">' . $title . '</h3>';
			$output .= '<div class="saturnthemes-facebook-page fb-page"';
			$output .= 'data-href="' . esc_url( $url ) . '"';
			$output .= 'data-width="' . $width . '"';
			$output .= 'data-height="' . $height . '"';
			$output .= 'data-small-header="' . ( $use_small_header == 'on' ? 'true' : 'false' ) . '"';
			$output .= 'data-adapt-container-width="' . ( $adapt_to_container == 'on' ? 'true' : 'false' ) . '"';
			$output .= 'data-hide-cover="' . ( $hide_cover == 'on' ? 'true' : 'false' ) . '"';
			$output .= 'data-show-facepile="' . ( $show_face == 'on' ? 'true' : 'false' ) . '"';
			$output .= 'data-show-posts="' . ( $show_posts == 'on' ? 'true' : 'false' ) . '"';
			$output .= '>';
			$output .= '<div class="fb-xfbml-parse-ignore">';
			$output .= '<blockquote cite="' . esc_url( $url ) . '"><a href="' . esc_url( $url ) . '">' . esc_url( $url ) . '</a></blockquote>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=609411882431242";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "facebook-jssdk"));</script>';

			echo '' . $output;

			echo '' . $args[ 'after_widget' ];
		}

		function form( $instance ) {
			$title              = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
			$url                = isset( $instance[ 'url' ] ) ? $instance[ 'url' ] : '';
			$width              = isset( $instance[ 'width' ] ) ? $instance[ 'width' ] : '';
			$height             = isset( $instance[ 'height' ] ) ? $instance[ 'height' ] : '';
			$use_small_header   = isset( $instance[ 'use_small_header' ] ) ? $instance[ 'use_small_header' ] : '';
			$adapt_to_container = isset( $instance[ 'adapt_to_container' ] ) ? $instance[ 'adapt_to_container' ] : '';
			$hide_cover         = isset( $instance[ 'hide_cover' ] ) ? $instance[ 'hide_cover' ] : '';
			$show_face          = isset( $instance[ 'show_face' ] ) ? $instance[ 'show_face' ] : '';
			$show_posts         = isset( $instance[ 'show_posts' ] ) ? $instance[ 'show_posts' ] : '';

			?>

			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'saturnthemes-industry' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
				       value="<?php echo esc_attr( $title ); ?>" />
			</p>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"><?php esc_html_e( 'Facebook Page URL', 'saturnthemes-industry' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>"
				       value="<?php echo esc_attr( $url ); ?>" />
			</p>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php esc_html_e( 'Width', 'saturnthemes-industry' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>"
				       value="<?php echo esc_attr( $width ); ?>" />
			</p>
			<p class="help"><?php esc_html_e( 'The pixel width of the embed (Min. 180 to Max. 500)', 'saturnthemes-industry' ); ?></p>
			<p>
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>"><?php esc_html_e( 'Height', 'saturnthemes-industry' ) ?></label>
				<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'height' ) ); ?>"
				       value="<?php echo esc_attr( $height ); ?>" />
			</p>
			<p class="help"><?php esc_html_e( 'The pixel height of the embed (Min. 70)', 'saturnthemes-industry' ); ?></p>
			<p>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'use_small_header' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'use_small_header' ) ); ?>" <?php checked( $use_small_header, 'on' ) ?> />
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'use_small_header' ) ); ?>"><?php esc_html_e( 'Use Small Header', 'saturnthemes-industry' ) ?></label>
			</p>
			<p class="help"><?php echo esc_html_e( 'Uses a smaller version of the page header', 'saturnthemes-industry' ); ?></p>
			<p>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'adapt_to_container' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'adapt_to_container' ) ); ?>" <?php checked( $adapt_to_container, 'on' ) ?> />
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'adapt_to_container' ) ); ?>"><?php esc_html_e( 'Adapt to shortcode container width', 'saturnthemes-industry' ) ?></label>
			</p>
			<p class="help"><?php echo esc_html_e( 'Shortcode will try to fit inside the container', 'saturnthemes-industry' ); ?></p>
			<p>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'hide_cover' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'hide_cover' ) ); ?>" <?php checked( $hide_cover, 'on' ) ?> />
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'hide_cover' ) ); ?>"><?php esc_html_e( 'Hide cover photo', 'saturnthemes-industry' ); ?></label>
			</p>
			<p class="help"><?php echo esc_html_e( 'Hide the cover photo in the header', 'saturnthemes-industry' ); ?></p>
			<p>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_face' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'show_face' ) ); ?>" <?php checked( $show_face, 'on' ) ?> />
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'show_face' ) ); ?>"><?php esc_html_e( 'Show Friend\'s Faces', 'saturnthemes-industry' ); ?></label>
			</p>
			<p class="help"><?php echo esc_html_e( 'Show profile photos when friends like this', 'saturnthemes-industry' ); ?></p>
			<p>
				<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_posts' ) ); ?>"
				       name="<?php echo esc_attr( $this->get_field_name( 'show_posts' ) ); ?>" <?php checked( $show_posts, 'on' ) ?> />
				<label
					for="<?php echo esc_attr( $this->get_field_id( 'show_posts' ) ); ?>"><?php esc_html_e( 'Show Page Posts', 'saturnthemes-industry' ); ?></label>
			</p>
			<p class="help"><?php echo esc_html_e( 'Show posts from the Page\'s timeline', 'saturnthemes-industry' ); ?></p>
			<?php
		}
	} // end class
} // end if