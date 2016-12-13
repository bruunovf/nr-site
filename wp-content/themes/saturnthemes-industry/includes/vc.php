<?php
add_action( 'vc_before_init', 'saturnthemes_industry_remove_updater_notice' );
function saturnthemes_industry_remove_updater_notice() {
	vc_manager()->disableUpdater();
}

add_action( 'vc_after_init', 'saturnthemes_industry_load_shortcodes' );
function saturnthemes_industry_load_shortcodes() {
	$section_group = __( 'Industry Options', 'saturnthemes-industry' );

	$animation_group    = __( 'Animation', 'saturnthemes-industry' );
	$animation_type     = array(
		"type"        => "saturnthemes_industry_animation_type",
		"heading"     => __( "Animation Type", 'saturnthemes-industry' ),
		"param_name"  => "animation_type",
		"admin_label" => true,
		'group'       => $animation_group,
	);
	$animation_duration = array(
		"type"        => "textfield",
		"heading"     => __( "Animation Duration", 'saturnthemes-industry' ),
		"param_name"  => "animation_duration",
		"description" => __( "numerical value (unit: seconds)", 'saturnthemes-industry' ),
		"value"       => '1s',
		'group'       => $animation_group,
	);
	$animation_delay    = array(
		"type"        => "textfield",
		"heading"     => __( "Animation Delay", 'saturnthemes-industry' ),
		"param_name"  => "animation_delay",
		"description" => __( "numerical value (unit: seconds)", 'saturnthemes-industry' ),
		"value"       => '0s',
		'group'       => $animation_group,
	);

	vc_add_param( 'vc_row', array(
		'type'        => 'checkbox',
		'heading'     => __( 'Wrap as Container', 'saturnthemes-industry' ),
		'param_name'  => 'wrap_container',
		'value'       => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
		'group'       => $section_group,
		'admin_label' => true,
	) );

	vc_add_param( 'vc_row', array(
		'type'        => 'colorpicker',
		'heading'     => __( 'Background Overlay', 'saturnthemes-industry' ),
		'group'       => $section_group,
		'param_name'  => 'row_bg_overlay',
		'description' => __( 'Choose an overlay color for background of row. Leave blank for none.', 'saturnthemes-industry' ),
	) );

	vc_add_param( 'vc_row', $animation_type );
	vc_add_param( 'vc_row', $animation_duration );
	vc_add_param( 'vc_row', $animation_delay );

	vc_add_param( 'vc_row_inner', $animation_type );
	vc_add_param( 'vc_row_inner', $animation_duration );
	vc_add_param( 'vc_row_inner', $animation_delay );

	vc_add_param( 'vc_column', $animation_type );
	vc_add_param( 'vc_column', $animation_duration );
	vc_add_param( 'vc_column', $animation_delay );

	vc_add_param( 'vc_column_inner', $animation_type );
	vc_add_param( 'vc_column_inner', $animation_duration );
	vc_add_param( 'vc_column_inner', $animation_delay );

	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Font Weight', 'saturnthemes-industry' ),
		'param_name'  => 'font_weight',
		'value'       => array(
			__( 'Extra-Light', 'saturnthemes-industry' ) => 200,
			__( 'Light', 'saturnthemes-industry' )       => 300,
			__( 'Normal', 'saturnthemes-industry' )      => 400,
			__( 'Semi-Bold', 'saturnthemes-industry' )   => 600,
			__( 'Bold', 'saturnthemes-industry' )        => 700,
			__( 'Extra-Bold', 'saturnthemes-industry' )  => 800,
		),
		'std'         => 400,
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Font Style', 'saturnthemes-industry' ),
		'param_name'  => 'font_style',
		'value'       => array(
			__( 'Normal', 'saturnthemes-industry' ) => 'normal',
			__( 'Italic', 'saturnthemes-industry' ) => 'italic',
		),
		'std'         => 'normal',
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Text Transform', 'saturnthemes-industry' ),
		'param_name'  => 'text_transform',
		'value'       => array(
			__( 'None', 'saturnthemes-industry' )       => 'none',
			__( 'Capitalize', 'saturnthemes-industry' ) => 'capitalize',
			__( 'Uppercase', 'saturnthemes-industry' )  => 'uppercase',
			__( 'Lowercase', 'saturnthemes-industry' )  => 'lowercase',
		),
		'std'         => 'normal',
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'textfield',
		'heading'     => __( 'Letter Spacing', 'saturnthemes-industry' ),
		'param_name'  => 'letter_spacing',
		'value'       => '',
		'group'       => $section_group,
		'admin_label' => false,
		"description" => __( "For example: 0.5px", 'saturnthemes-industry' ),
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'dropdown',
		'heading'     => __( 'Heading Style', 'saturnthemes-industry' ),
		'param_name'  => 'heading_style',
		'value'       => array(
			__( 'Default', 'saturnthemes-industry' )     => 'default',
			__( 'Have Border', 'saturnthemes-industry' ) => 'have-border',
		),
		'std'         => 'default',
		'group'       => $section_group,
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'textfield',
		'heading'     => __( 'Sub Heading', 'saturnthemes-industry' ),
		'param_name'  => 'sub_heading_character',
		'value'       => '',
		'admin_label' => false,
	) );
	vc_add_param( 'vc_custom_heading', array(
		'type'        => 'colorpicker',
		'heading'     => __( 'Sub Heading Color', 'saturnthemes-industry' ),
		'param_name'  => 'sub_heading_character_color',
		'value'       => 'rgba(0, 0, 0, .4)',
		'admin_label' => false,
	) );

	// Icon
	class WPBakeryShortCode_SaturnThemes_Industry_Icon extends WPBakeryShortCode {

	}

	vc_map( array(
		        'name'        => esc_html__( 'Industry Icon', 'saturnthemes-industry' ),
		        'base'        => 'saturnthemes_industry_icon',
		        'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'icon'        => 'icon-wpb-vc_icon',
		        'description' => esc_html__( 'Eye catching icons from libraries', 'saturnthemes-industry' ),
		        'params'      => array(
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-industry' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-industry' ) => 'fontawesome',
					        esc_html__( 'Open Iconic', 'saturnthemes-industry' )  => 'openiconic',
					        esc_html__( 'Typicons', 'saturnthemes-industry' )     => 'typicons',
					        esc_html__( 'Entypo', 'saturnthemes-industry' )       => 'entypo',
					        esc_html__( 'Linecons', 'saturnthemes-industry' )     => 'linecons',
					        esc_html__( 'P7 Stroke', 'saturnthemes-industry' )    => 'pe7stroke',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_openiconic',
				        'value'       => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'openiconic',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'openiconic',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_typicons',
				        'value'       => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'typicons',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'typicons',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'iconpicker',
				        'heading'    => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name' => 'icon_entypo',
				        'value'      => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
				        'settings'   => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'entypo',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency' => array(
					        'element' => 'type',
					        'value'   => 'entypo',
				        ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_linecons',
				        'value'       => 'vc_li vc_li-heart', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false, // default true, display an "EMPTY" icon?
					        'type'         => 'linecons',
					        'iconsPerPage' => 4000, // default 100, how many icons per/page to display
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'linecons',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_pe7stroke',
				        'value'       => 'pe-7s-album',
				        'settings'    => array(
					        'emptyIcon'    => false,
					        'type'         => 'pe7stroke',
					        'iconsPerPage' => 400,
				        ),
				        'dependency'  => array(
					        'element' => 'type',
					        'value'   => 'pe7stroke',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => "Size",
				        'admin_label' => true,
				        'param_name'  => 'size',
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Custom color', 'saturnthemes-industry' ),
				        'param_name'  => 'custom_color',
				        'description' => esc_html__( 'Select custom icon color.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Background shape', 'saturnthemes-industry' ),
				        'param_name'  => 'background_style',
				        'value'       => array(
					        esc_html__( 'None', 'saturnthemes-industry' )            => '',
					        esc_html__( 'Circle', 'saturnthemes-industry' )          => 'rounded',
					        esc_html__( 'Square', 'saturnthemes-industry' )          => 'boxed',
					        esc_html__( 'Rounded', 'saturnthemes-industry' )         => 'rounded-less',
					        esc_html__( 'Outline Circle', 'saturnthemes-industry' )  => 'rounded-outline',
					        esc_html__( 'Outline Square', 'saturnthemes-industry' )  => 'boxed-outline',
					        esc_html__( 'Outline Rounded', 'saturnthemes-industry' ) => 'rounded-less-outline',
				        ),
				        'description' => esc_html__( 'Select background shape and style for icon.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Custom background color', 'saturnthemes-industry' ),
				        'param_name'  => 'custom_background_color',
				        'description' => esc_html__( 'Select custom icon background color.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon alignment', 'saturnthemes-industry' ),
				        'param_name'  => 'align',
				        'value'       => array(
					        esc_html__( 'Left', 'saturnthemes-industry' )   => 'left',
					        esc_html__( 'Right', 'saturnthemes-industry' )  => 'right',
					        esc_html__( 'Center', 'saturnthemes-industry' ) => 'center',
				        ),
				        'description' => esc_html__( 'Select icon alignment.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'vc_link',
				        'heading'     => esc_html__( 'URL (Link)', 'saturnthemes-industry' ),
				        'param_name'  => 'link',
				        'description' => esc_html__( 'Add link to icon.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Extra class name', 'saturnthemes-industry' ),
				        'param_name'  => 'el_class',
				        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );

	// Shortcode Brand Carousel
	class WPBakeryShortCode_SaturnThemes_Industry_Image_Carousel extends WPBakeryShortCode {

		protected static $carousel_index = 1;

		public static function getCarouselIndex() {
			return self::$carousel_index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'     => __( 'Industry Image Carousel', 'saturnthemes-industry' ),
		        'base'     => 'saturnthemes_industry_image_carousel',
		        'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'params'   => array(
			        array(
				        'type'        => 'attach_images',
				        'heading'     => __( 'Images', 'saturnthemes-industry' ),
				        'param_name'  => 'images',
				        'value'       => '',
				        'description' => __( 'Select images from media library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Image size', 'saturnthemes-industry' ),
				        'param_name'  => 'image_size',
				        'value'       => 'full',
				        'description' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size. If used slides per view, this will be used to define carousel wrapper size.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'On click action', 'saturnthemes-industry' ),
				        'param_name'  => 'onclick',
				        'value'       => array(
					        __( 'Open prettyPhoto', 'saturnthemes-industry' )  => 'link_image',
					        __( 'None', 'saturnthemes-industry' )              => 'link_no',
					        __( 'Open custom links', 'saturnthemes-industry' ) => 'custom_link',
				        ),
				        'std'         => 'link_no',
				        'description' => __( 'Select action for click event.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'exploded_textarea',
				        'heading'     => __( 'Custom links', 'saturnthemes-industry' ),
				        'param_name'  => 'custom_links',
				        'description' => __( 'Enter links for each slide (Note: divide links with linebreaks (Enter)).', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'onclick',
					        'value'   => array( 'custom_link' ),
				        ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'Custom link target', 'saturnthemes-industry' ),
				        'param_name'  => 'custom_links_target',
				        'description' => __( 'Select how to open custom links.', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'onclick',
					        'value'   => array( 'custom_link' ),
				        ),
				        'value'       => array(
					        __( 'Same window', 'saturnthemes-industry' ) => '_self',
					        __( 'New window', 'saturnthemes-industry' )  => '_blank',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Items to show on desktop', 'saturnthemes-industry' ),
				        'param_name' => 'items_on_desktop',
				        'value'      => '5',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Items to show on tabs', 'saturnthemes-industry' ),
				        'param_name' => 'items_on_tabs',
				        'value'      => '3',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Items to show on mobile', 'saturnthemes-industry' ),
				        'param_name' => 'items_on_mobile',
				        'value'      => '2',
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Slider autoplay', 'saturnthemes-industry' ),
				        'param_name'  => 'autoplay',
				        'description' => __( 'Enable autoplay mode.', 'saturnthemes-industry' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'         => 'no',
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Slider speed', 'saturnthemes-industry' ),
				        'param_name'  => 'speed',
				        'value'       => '5000',
				        'description' => __( 'Duration of animation between slides (in ms).', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'autoplay',
					        'value'   => array( 'yes' ),
				        ),
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Hide prev/next buttons', 'saturnthemes-industry' ),
				        'param_name'  => 'hide_prev_next_buttons',
				        'description' => __( 'If checked, prev/next buttons will be hidden.', 'saturnthemes-industry' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'         => 'no',
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Hide dots navigation', 'saturnthemes-industry' ),
				        'param_name'  => 'hide_dots_navigation',
				        'description' => __( 'If checked, dots navigation will be hidden.', 'saturnthemes-industry' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'         => 'yes',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Space between two items in px', 'saturnthemes-industry' ),
				        'param_name' => 'item_space',
				        'value'      => '50',
				        'suffix'     => 'px',
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Extra class name', 'saturnthemes-industry' ),
				        'param_name'  => 'el_class',
				        'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS box', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );

	// Shortcode Counter
	class WPBakeryShortCode_SaturnThemes_Industry_Counter extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        "name"        => __( "Industry Counter", 'saturnthemes-industry' ),
		        "base"        => "saturnthemes_industry_counter",
		        'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        "description" => __( "Your milestones, achievements, etc.", 'saturnthemes-industry' ),
		        "params"      => array(
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter Title ", 'saturnthemes-industry' ),
				        "param_name"  => "counter_title",
				        "admin_label" => true,
				        "value"       => "",
				        "description" => __( "Enter title for counter block", 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-industry' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-industry' )      => 'fontawesome',
					        esc_html__( 'Custom Image Icon', 'saturnthemes-industry' ) => 'custom',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'icon_type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'attach_image',
				        'heading'     => __( 'Image Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_image',
				        'value'       => '',
				        'description' => __( 'Select image from media library.', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => 'Size of Icon',
				        'param_name' => 'icon_size',
				        'value'      => '80px',
				        'dependency' => array(
					        'element' => 'icon_type',
					        'value'   => array( 'fontawesome' ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Color', 'saturnthemes-industry' ),
				        'param_name'  => 'custom_color',
				        'description' => esc_html__( 'Select icon color.', 'saturnthemes-industry' ),
				        'value'       => '#DDD',
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => array( 'fontawesome' ),
				        ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter Value", 'saturnthemes-industry' ),
				        "param_name"  => "counter_value",
				        "value"       => "142",
				        "description" => __( "Enter number for counter without any special character. You may enter a decimal number. Eg 23.8", 'saturnthemes-industry' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Thousands Separator", 'saturnthemes-industry' ),
				        "param_name"  => "counter_sep",
				        "value"       => ",",
				        "description" => __( "Enter character for thousanda separator. e.g. ',' will separate 142000 into 142,000", 'saturnthemes-industry' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Replace Decimal Point With", 'saturnthemes-industry' ),
				        "param_name"  => "counter_decimal",
				        "value"       => ".",
				        "description" => __( "Did you enter a decimal number (Eg - 14.2) The decimal point '.' will be replaced with value that you will enter above.", 'saturnthemes-industry' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Counter rolling time", 'saturnthemes-industry' ),
				        "param_name"  => "speed",
				        "value"       => 2,
				        "min"         => 1,
				        "max"         => 10,
				        "suffix"      => "seconds",
				        "description" => __( "How many seconds the counter should roll?", 'saturnthemes-industry' ),
			        ),
			        array(
				        "type"        => "textfield",
				        "class"       => "",
				        "heading"     => __( "Extra Class", 'saturnthemes-industry' ),
				        "param_name"  => "el_class",
				        "value"       => "",
				        "description" => __( "Add extra class name that will be applied to the icon process, and you can use this class for your customizations.", 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS box', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );

	// Shortcode Icon Button
	class WPBakeryShortCode_SaturnThemes_Industry_Icon_Button extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'     => __( 'Industry Icon Button', 'saturnthemes-industry' ),
		        'base'     => 'saturnthemes_industry_icon_button',
		        'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'params'   => array(
			        array(
				        'type'       => 'vc_link',
				        'heading'    => esc_html__( 'Link', 'saturnthemes-industry' ),
				        'param_name' => 'link',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => esc_html__( 'Link tooltip (title)', 'saturnthemes-industry' ),
				        'param_name' => 'link_tooltip',
				        'value'      => '',
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Button alignment', 'saturnthemes-industry' ),
				        'param_name' => 'btn_align',
				        'value'      => array(
					        'Left'   => 'left',
					        'Center' => 'center',
					        'Right'  => 'right',
				        ),
				        'std'        => 'left',
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Style', 'saturnthemes-industry' ),
				        'param_name' => 'btn_style',
				        'value'      => array(
					        'Primary'   => 'primary-button',
					        'Secondary' => 'secondary-button',
					        'Custom'    => 'custom',
				        ),
				        'std'        => 'primary-button',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Text Color', 'saturnthemes-industry' ),
				        'param_name' => 'button_color',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Text Color Hover', 'saturnthemes-industry' ),
				        'param_name' => 'button_text_color_hover',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Background Color', 'saturnthemes-industry' ),
				        'param_name' => 'button_bg_color',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Background Color Hover', 'saturnthemes-industry' ),
				        'param_name' => 'button_bg_color_hover',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Border Color', 'saturnthemes-industry' ),
				        'param_name' => 'button_border_color',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Border Color Hover', 'saturnthemes-industry' ),
				        'param_name' => 'button_border_color_hover',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Icon Color', 'saturnthemes-industry' ),
				        'param_name' => 'button_icon_color',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Icon Color Hover', 'saturnthemes-industry' ),
				        'param_name' => 'button_icon_color_hover',
				        'value'      => '',
				        'dependency' => array(
					        'element' => 'btn_style',
					        'value'   => array( 'custom' )
				        ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-industry' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-industry' )      => 'fontawesome',
					        esc_html__( 'Custom Image Icon', 'saturnthemes-industry' ) => 'custom',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'icon_type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Icon Size', 'saturnthemes-industry' ),
				        'param_name' => 'icon_size',
				        'value'      => array(
					        __( '10px', 'saturnthemes-industry' ) => '10',
					        __( '11px', 'saturnthemes-industry' ) => '11',
					        __( '12px', 'saturnthemes-industry' ) => '12',
					        __( '13px', 'saturnthemes-industry' ) => '13',
					        __( '14px', 'saturnthemes-industry' ) => '14',
					        __( '15px', 'saturnthemes-industry' ) => '15',
					        __( '16px', 'saturnthemes-industry' ) => '16',
					        __( '17px', 'saturnthemes-industry' ) => '17',
					        __( '18px', 'saturnthemes-industry' ) => '18',
					        __( '19px', 'saturnthemes-industry' ) => '19',
					        __( '20px', 'saturnthemes-industry' ) => '20',
				        ),
				        'std'        => '16',
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'Css', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );

	// Shortcode Contact
	class WPBakeryShortCode_SaturnThemes_Industry_Contact extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}
	vc_map( array(
		'name'     => esc_html__( 'Industry Contacts', 'saturnthemes-industry' ),
		'base'     => 'saturnthemes_industry_contact',
		'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		'params'   => array(
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'heading'    => esc_html__( 'Title', 'saturnthemes-industry' ),
				'param_name' => 'title',
			),
			array(
				'type'       => 'textarea',
				'heading'    => esc_html__( 'Address', 'saturnthemes-industry' ),
				'param_name' => 'address',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Phone', 'saturnthemes-industry' ),
				'param_name' => 'phone'
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Email', 'saturnthemes-industry' ),
				'param_name' => 'email'
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Facebook', 'saturnthemes-industry' ),
				'param_name' => 'facebook',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Twitter', 'saturnthemes-industry' ),
				'param_name' => 'twitter',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Linkedin', 'saturnthemes-industry' ),
				'param_name' => 'linkedin',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Google+', 'saturnthemes-industry' ),
				'param_name' => 'google_plus',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Skype', 'saturnthemes-industry' ),
				'param_name' => 'skype',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Extra class name', 'saturnthemes-industry' ),
				'param_name' => 'el_class',
			),
			array(
				'type'       => 'css_editor',
				'heading'    => __( 'CSS', 'saturnthemes-industry' ),
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			),
		)
	) );

	// Shortcode Staff Grid
	class WPBakeryShortCode_SaturnThemes_Industry_Staff_Grid extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'     => __( 'Industry Staff Grid', 'saturnthemes-industry' ),
		        'base'     => 'saturnthemes_industry_staff_grid',
		        'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'params'   => array(
			        array(
				        'type'       => 'textfield',
				        'heading'    => esc_html__( 'Staff per page', 'saturnthemes-industry' ),
				        'param_name' => 'per_page',
				        'default'    => '4',
			        ),
					array(
						'type'        => 'textfield',
						'heading'     => __( 'Image size', 'saturnthemes-industry' ),
						'param_name'  => 'image_size',
						'value'       => 'image-270-190',
						'description' => __( 'Enter image size. Example: image-270-190, image-170-170. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size. If used slides per view, this will be used to define carousel wrapper size.', 'saturnthemes-industry' ),
					),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Title Color', 'saturnthemes-industry' ),
				        'param_name' => 'title_color',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Department Color', 'saturnthemes-industry' ),
				        'param_name' => 'department_color',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => esc_html__( 'Show Content', 'saturnthemes-industry' ),
				        'param_name' => 'show_content',
				        'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'        => '',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => esc_html__( 'Show Social Icons', 'saturnthemes-industry' ),
				        'param_name' => 'show_icons',
				        'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'        => 'yes',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Icon Color', 'saturnthemes-industry' ),
				        'param_name' => 'icon_color',
			        ),
		        ),
	        ) );

	// Shortcode Services Grid
	class WPBakeryShortCode_SaturnThemes_Industry_Services_Grid extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		'name'     => __( 'Industry Services Grid', 'saturnthemes-industry' ),
		'base'     => 'saturnthemes_industry_services_grid',
		'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		'params'   => array(
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Staff per page', 'saturnthemes-industry' ),
				'param_name' => 'per_page',
				'default'    => '3',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Staff per row', 'saturnthemes-industry' ),
				'param_name' => 'per_row',
				'value'       => array(
					__( '3', 'saturnthemes-industry' ) => '3',
					__( '4', 'saturnthemes-industry' ) => '4',
				),
				'std'        => '3',
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'saturnthemes-industry' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1', 'saturnthemes-industry' ) => 'style1',
					__( 'Style 2', 'saturnthemes-industry' ) => 'style2',
				),
				'std'        => 'style1',
				'description' => esc_html__( 'Style of services', 'saturnthemes-industry' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show Excerpt', 'saturnthemes-industry' ),
				'param_name' => 'show_excerpt',
				'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				'std'        => '',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show Icon', 'saturnthemes-industry' ),
				'param_name' => 'show_icon',
				'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				'std'        => '',
			),
			array(
				'type'       => 'css_editor',
				'heading'    => __( 'CSS', 'saturnthemes-industry' ),
				'param_name' => 'css',
				'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			),
		),
	) );

	// Shortcode Testimonial
	class WPBakeryShortCode_SaturnThemes_Industry_Testimonial extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'        => __( 'Industry Testimonial', 'saturnthemes-industry' ),
		        'base'        => 'saturnthemes_industry_testimonial',
		        'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'description' => __( 'Customer\'s Testimonial', 'saturnthemes-industry' ),
		        'params'      => array(
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Style', 'saturnthemes-industry' ),
				        'param_name'  => 'style',
				        'value'       => array(
					        __( 'Style 1', 'saturnthemes-industry' ) => 'style1',
					        __( 'Style 2', 'saturnthemes-industry' ) => 'style2',
					        __( 'Style 3', 'saturnthemes-industry' ) => 'style3',
				        ),
				        'description' => esc_html__( 'Style of testimonial', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Order by', 'saturnthemes-industry' ),
				        'param_name'  => 'orderby',
				        'value'       => array(
					        __( 'Title', 'saturnthemes-industry' )      => 'title',
					        __( 'Date', 'saturnthemes-industry' )       => 'date',
					        __( 'Menu Order', 'saturnthemes-industry' ) => 'menu_order',
				        ),
				        'description' => esc_html__( 'How to order the items - accepts all default WordPress ordering options', 'saturnthemes-industry' ),
				        'std'         => 'date',
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Order', 'saturnthemes-industry' ),
				        'param_name'  => 'order',
				        'value'       => array(
					        __( 'DESC', 'saturnthemes-industry' ) => 'DESC',
					        __( 'ASC', 'saturnthemes-industry' )  => 'ASC',
				        ),
				        'description' => esc_html__( 'the order direction', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Content Color', 'saturnthemes-industry' ),
				        'param_name' => 'text_color',
				        'value'      => '#FFF',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Title Color', 'saturnthemes-industry' ),
				        'param_name' => 'title_color',
				        'value'      => '#868686',
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Carousel autoplay', 'saturnthemes-industry' ),
				        'param_name'  => 'autoplay',
				        'description' => __( 'Enable carousel autoplay.', 'saturnthemes-industry' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'         => 'no',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Display arrow navigation', 'saturnthemes-industry' ),
				        'param_name' => 'display_nav',
				        'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'        => 'yes',
			        ),
					array(
						'type'       => 'checkbox',
						'heading'    => __( 'Arrow Top', 'saturnthemes-industry' ),
						'param_name' => 'arrow_top',
						'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'on-top' ),
						'std'        => '',
						'dependency' => array(
							'element' => 'display_nav',
							'value'   => array( 'yes' )
						),
					),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Arrow Color', 'saturnthemes-industry' ),
				        'param_name' => 'arrow_color',
				        'value'      => '',
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Display dots navigation', 'saturnthemes-industry' ),
				        'param_name' => 'display_dots',
				        'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'        => 'no',
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Items to show', 'saturnthemes-industry' ),
				        'param_name'  => 'items_per_slide',
				        'value'       => '4',
				        'description' => esc_html__( 'Number of shown items on each slide', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => esc_html__( 'Extra class name', 'saturnthemes-industry' ),
				        'param_name' => 'el_class',
			        ),
		        ),
	        ) );

	class WPBakeryShortCode_SaturnThemes_Industry_Google_Map extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}
	}

	vc_map( array(
		        'name'        => esc_html__( 'Industry Google Map', 'saturnthemes-industry' ),
		        'base'        => 'saturnthemes_industry_google_map',
				'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'description' => esc_html__( 'Display Google Maps to indicate your location.', 'saturnthemes-industry' ),
		        'params'      => array(
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Latitude', 'saturnthemes-industry' ),
				        'param_name'  => 'latitude',
				        'value'       => '',
				        'description' => '<a href="http://mondeca.com/index.php/en/?option=com_content&view=article&id=206&Itemid=752" target="_blank">' . __( 'Here is a tool', 'saturnthemes-industry' ) . '</a> ' . __( 'where you can find Latitude & Longitude of your location', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Longitude', 'saturnthemes-industry' ),
				        'param_name'  => 'longitude',
				        'value'       => '',
				        'description' => '<a href="http://mondeca.com/index.php/en/?option=com_content&view=article&id=206&Itemid=752" target=\"_blank\">' . __( 'Here is a tool', 'saturnthemes-industry' ) . '</a> ' . __( 'where you can find Latitude & Longitude of your location', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Width (in %)', 'saturnthemes-industry' ),
				        'param_name' => 'width',
				        'value'      => '100%',
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => __( 'Height (in px)', 'saturnthemes-industry' ),
				        'param_name' => 'height',
				        'value'      => '400px',
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Map type', 'saturnthemes-industry' ),
				        'admin_label' => true,
				        'param_name'  => 'map_type',
				        'value'       => array(
					        __( 'Roadmap', 'saturnthemes-industry' )   => 'roadmap',
					        __( 'Satellite', 'saturnthemes-industry' ) => 'satellite',
					        __( 'Hybrid', 'saturnthemes-industry' )    => 'hybrid',
					        __( 'Terrain', 'saturnthemes-industry' )   => 'terrain',
				        ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Map style', 'saturnthemes-industry' ),
				        'admin_label' => true,
				        'param_name'  => 'map_style',
				        'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'saturnthemes-industry' ),
				        'value'       => array(
					        __( 'Default', 'saturnthemes-industry' )                 => 'default',
					        __( 'Shades of Grey', 'saturnthemes-industry' )          => 'shades_of_grey',
					        __( 'Ultra Light with Labels', 'saturnthemes-industry' ) => 'ultra_light',
					        __( 'Apple Maps-esque', 'saturnthemes-industry' )        => 'apple_map',
					        __( 'Subtle Grayscale', 'saturnthemes-industry' )        => 'subtle_grayscale',
					        __( 'Custom', 'saturnthemes-industry' )                  => 'custom',
				        ),
			        ),
			        array(
				        'type'        => 'textarea_raw_html',
				        'heading'     => esc_html__( 'Map style custom', 'saturnthemes-industry' ),
				        'param_name'  => 'map_style_custom',
				        'description' => '<a href="http://www.mapstylr.com/map-style-editor/" target="_blank">' . __( 'Here is a tool', 'saturnthemes-industry' ) . '</a> ' . __( 'where you can customize style of Google Map.', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'map_style',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => __( 'Map Zoom', 'saturnthemes-industry' ),
				        'param_name' => 'zoom',
				        'value'      => array(
					        1,
					        2,
					        3,
					        4,
					        5,
					        6,
					        7,
					        8,
					        9,
					        10,
					        11,
					        12,
					        13,
					        14,
					        15,
					        16,
					        17,
					        18,
					        19,
					        20,
				        ),
				        'std'        => 16,
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => '',
				        'param_name' => 'scrollwheel',
				        'value'      => array(
					        __( 'Disable map zoom on mouse wheel scroll', 'saturnthemes-industry' ) => 'disable',
				        ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Extra class name', 'saturnthemes-industry' ),
				        'param_name'  => 'el_class',
				        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Marker Icon', 'saturnthemes-industry' ),
				        'param_name' => 'marker_icon',
				        'value'      => array(
					        __( 'Default', 'saturnthemes-industry' ) => 'default',
					        __( 'Custom', 'saturnthemes-industry' )  => 'custom',
				        ),
				        'std'        => 'default',
				        'group'      => __( 'Marker', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'attach_image',
				        'heading'    => esc_html__( 'Custom marker icon', 'saturnthemes-industry' ),
				        'param_name' => 'custom_marker_icon',
				        'group'      => __( 'Marker', 'saturnthemes-industry' ),
				        'dependency' => array(
					        'element' => 'maker_icon',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'        => 'textarea_html',
				        'heading'     => esc_html__( 'Info Window', 'saturnthemes-industry' ),
				        'param_name'  => 'info',
				        'value'       => '',
				        'description' => esc_html__( 'Content for info window', 'saturnthemes-industry' ),
				        'group'       => __( 'Marker', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Street view control', 'saturnthemes-industry' ),
				        'param_name' => 'street_view_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-industry' )  => 'enable',
					        __( 'Disable', 'saturnthemes-industry' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Map type control', 'saturnthemes-industry' ),
				        'param_name' => 'map_type_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-industry' )  => 'enable',
					        __( 'Disable', 'saturnthemes-industry' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Map pan control', 'saturnthemes-industry' ),
				        'param_name' => 'map_pan_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-industry' )  => 'enable',
					        __( 'Disable', 'saturnthemes-industry' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => esc_html__( 'Zoom control', 'saturnthemes-industry' ),
				        'param_name' => 'zoom_control',
				        'value'      => array(
					        __( 'Enable', 'saturnthemes-industry' )  => 'enable',
					        __( 'Disable', 'saturnthemes-industry' ) => 'disable',
				        ),
				        'std'        => 'disable',
				        'group'      => __( 'Advanced', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );

	class WPBakeryShortCode_SaturnThemes_Industry_Icon_Box extends WPBakeryShortCode {

	}

	vc_map( array(
		        'name'     => esc_html__( 'Industry Icon Box', 'saturnthemes-industry' ),
		        'base'     => 'saturnthemes_industry_icon_box',
				'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'params'   => array(
			        array(
				        'type'        => 'dropdown',
				        'heading'     => esc_html__( 'Icon library', 'saturnthemes-industry' ),
				        'value'       => array(
					        esc_html__( 'Font Awesome', 'saturnthemes-industry' )      => 'fontawesome',
					        esc_html__( 'Custom Image Icon', 'saturnthemes-industry' ) => 'custom',
				        ),
				        'admin_label' => true,
				        'param_name'  => 'icon_type',
				        'description' => esc_html__( 'Select icon library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'iconpicker',
				        'heading'     => esc_html__( 'Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_fontawesome',
				        'value'       => 'fa fa-adjust', // default value to backend editor admin_label
				        'settings'    => array(
					        'emptyIcon'    => false,
					        // default true, display an "EMPTY" icon?
					        'iconsPerPage' => 4000,
					        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				        ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'fontawesome',
				        ),
				        'description' => esc_html__( 'Select icon from library.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'attach_image',
				        'heading'     => __( 'Image Icon', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_image',
				        'value'       => '',
				        'description' => __( 'Select image from media library.', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => __( 'Position of Icon', 'saturnthemes-industry' ),
				        'param_name' => 'pst_icon',
				        'value'      => array(
					        __( 'Left', 'saturnthemes-industry' )  => 'left',
					        __( 'Right', 'saturnthemes-industry' ) => 'right',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => 'Image Width',
				        'param_name' => 'icon_image_width',
				        'value'      => '48px',
				        'dependency' => array(
					        'element' => 'icon_type',
					        'value'   => 'custom',
				        ),
			        ),
			        array(
				        'type'       => 'textfield',
				        'heading'    => 'Size of Icon',
				        'param_name' => 'icon_size',
				        'value'      => '32px',
				        'dependency' => array(
					        'element' => 'icon_type',
					        'value'   => array(
						        'fontawesome',
					        ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Color', 'saturnthemes-industry' ),
				        'param_name'  => 'custom_color',
				        'description' => esc_html__( 'Select icon color.', 'saturnthemes-industry' ),
				        'dependency'  => array(
					        'element' => 'icon_type',
					        'value'   => array(
						        'fontawesome',
						        'pe7stroke',
					        ),
				        ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Background color', 'saturnthemes-industry' ),
				        'param_name'  => 'icon_background_color',
				        'description' => esc_html__( 'Select custom icon background color.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Title', 'saturnthemes-industry' ),
				        'param_name'  => 'title',
				        'description' => esc_html__( 'Enter the title of this icon box.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Title Color', 'saturnthemes-industry' ),
				        'param_name'  => 'title_color',
				        'description' => esc_html__( 'Select title color.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textarea_html',
				        'heading'     => __( 'Description', 'saturnthemes-industry' ),
				        'param_name'  => 'content',
				        'value'       => '',
				        'description' => __( 'Enter the description for this icon box.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => esc_html__( 'Content Color', 'saturnthemes-industry' ),
				        'param_name'  => 'content_color',
				        'description' => esc_html__( 'Select content color.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'Apply link to:', 'saturnthemes-industry' ),
				        'param_name'  => 'read_more',
				        'value'       => array(
					        __( 'No Link', 'saturnthemes-industry' )           => 'none',
					        __( 'Complete Box', 'saturnthemes-industry' )      => 'box',
					        __( 'Box Title', 'saturnthemes-industry' )         => 'title',
					        __( 'Display Read More', 'saturnthemes-industry' ) => 'more',
				        ),
				        'description' => __( 'Select whether to use color for icon or not.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'vc_link',
				        'heading'     => __( 'Add Link', 'saturnthemes-industry' ),
				        'param_name'  => 'link',
				        'value'       => '',
				        'description' => __( 'Add a custom link or select existing page. You can remove existing link as well.', 'saturnthemes-industry' ),
				        'dependency'  => array( 'element' => 'read_more', 'value' => array( 'box', 'title', 'more' ) ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Read More Text', 'saturnthemes-industry' ),
				        'param_name'  => 'read_text',
				        'value'       => 'Read More',
				        'description' => __( 'Customize the read more text.', 'saturnthemes-industry' ),
				        'dependency'  => Array( 'element' => 'read_more', 'value' => array( 'more' ) ),
			        ),
			        array(
				        'type'        => 'colorpicker',
				        'heading'     => __( 'Box Background Color', 'saturnthemes-industry' ),
				        'param_name'  => 'box_bg_color',
				        'value'       => '',
				        'description' => __( 'Select Box background color.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => esc_html__( 'Extra class name', 'saturnthemes-industry' ),
				        'param_name'  => 'el_class',
				        'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );


	class WPBakeryShortCode_SaturnThemes_Industry_Post_Grid extends WPBakeryShortCode {

		protected static $index = 1;

		public static function getIndex() {
			return self::$index ++ . '-' . time();
		}

		protected function build_loop_query( array $atts ) {
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => $atts['max_items'],
				'orderby'        => $atts['orderby'],
				'order'          => $atts['order'],
			);

			if ( ! empty( $atts['taxonomies'] ) ) {
				$terms = get_terms( array(
					                    'post_tag',
					                    'category',
				                    ), array( 'slug' => explode( ',', $atts['taxonomies'] ) ) );

				foreach ( $terms as $t ) {

					$args['tax_query'][] = array(
						'field'    => 'slug',
						'taxonomy' => $t->taxonomy,
						'terms'    => $t->slug,
					);

				}

			}

			return new WP_Query( $args );
		}
	}

	add_filter( 'vc_autocomplete_saturnthemes_industry_post_grid_taxonomies_callback', 'saturnthemes_industry_vc_autocomplete_taxonomies_field_search', 10, 1 );
	add_filter( 'vc_autocomplete_saturnthemes_industry_post_grid_taxonomies_render', 'saturnthemes_industry_vc_autocomplete_taxonomies_field_render', 10, 1 );

	vc_map( array(
		        'name'     => esc_html__( 'Industry Post Grid', 'saturnthemes-industry' ),
		        'base'     => 'saturnthemes_industry_post_grid',
				'category' => __( 'Saturn Themes Industry', 'saturnthemes-industry' ),
		        'params'   => array(
			        array(
				        'type'        => 'autocomplete',
				        'heading'     => __( 'Narrow data source', 'saturnthemes-industry' ),
				        'param_name'  => 'taxonomies',
				        'settings'    => array(
					        'multiple'       => true,
					        'min_length'     => 1,
					        'groups'         => true,
					        // In UI show results grouped by groups, default false
					        'unique_values'  => true,
					        // In UI show results except selected. NB! You should manually check values in backend, default false
					        'display_inline' => true,
					        // In UI show results inline view, default false (each value in own line)
					        'delay'          => 500,
					        // delay for search. default 500
					        'auto_focus'     => true,
					        // auto focus input, default true
				        ),
				        'description' => __( 'Enter categories, tags or custom taxonomies.', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'textfield',
				        'heading'     => __( 'Total items', 'saturnthemes-industry' ),
				        'param_name'  => 'max_items',
				        'value'       => 10,
				        'description' => __( 'Set max limit for items in grid or enter -1 to display all (limited to 1000).', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'dropdown',
				        'heading'     => __( 'Order by', 'saturnthemes-industry' ),
				        'param_name'  => 'orderby',
				        'value'       => array(
					        __( 'Date', 'saturnthemes-industry' )                  => 'date',
					        __( 'Order by post ID', 'saturnthemes-industry' )      => 'ID',
					        __( 'Author', 'saturnthemes-industry' )                => 'author',
					        __( 'Title', 'saturnthemes-industry' )                 => 'title',
					        __( 'Last modified date', 'saturnthemes-industry' )    => 'modified',
					        __( 'Post/page parent ID', 'saturnthemes-industry' )   => 'parent',
					        __( 'Number of comments', 'saturnthemes-industry' )    => 'comment_count',
					        __( 'Menu order/Page Order', 'saturnthemes-industry' ) => 'menu_order',
					        __( 'Meta value', 'saturnthemes-industry' )            => 'meta_value',
					        __( 'Meta value number', 'saturnthemes-industry' )     => 'meta_value_num',
					        __( 'Random order', 'saturnthemes-industry' )          => 'rand',
				        ),
				        'description' => __( 'Select order type. If "Meta value" or "Meta value Number" is chosen then meta key is required.', 'saturnthemes-industry' ),
				        'group'       => __( 'Data Settings', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'               => 'dropdown',
				        'heading'            => __( 'Sort order', 'saturnthemes-industry' ),
				        'param_name'         => 'order',
				        'group'              => __( 'Data Settings', 'saturnthemes-industry' ),
				        'value'              => array(
					        __( 'Descending', 'saturnthemes-industry' ) => 'DESC',
					        __( 'Ascending', 'saturnthemes-industry' )  => 'ASC',
				        ),
				        'param_holder_class' => 'vc_grid-data-type-not-ids',
				        'description'        => __( 'Select sorting order.', 'saturnthemes-industry' ),
				        'dependency'         => array(
					        'element'            => 'post_type',
					        'value_not_equal_to' => array(
						        'ids',
						        'custom',
					        ),
				        ),
			        ),
			        array(
				        'type'       => 'dropdown',
				        'heading'    => __( 'Items per row', 'saturnthemes-industry' ),
				        'param_name' => 'items_per_row',
				        'value'      => array(
					        3,
					        4,
				        ),
				        'std'        => 3,
				        'group'      => __( 'Display', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'        => 'checkbox',
				        'heading'     => __( 'Slider autoplay', 'saturnthemes-industry' ),
				        'param_name'  => 'autoplay',
				        'description' => __( 'Enable autoplay mode.', 'saturnthemes-industry' ),
				        'value'       => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'         => 'no',
				        'group'       => __( 'Display', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Display arrow navigation', 'saturnthemes-industry' ),
				        'param_name' => 'show_arrow',
				        'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'        => 'yes',
				        'group'      => __( 'Display', 'saturnthemes-industry' ),
			        ),
			        array(
				        'type'       => 'checkbox',
				        'heading'    => __( 'Show dots pagination', 'saturnthemes-industry' ),
				        'group'      => __( 'Display', 'saturnthemes-industry' ),
				        'param_name' => 'show_dots',
				        'value'      => array( __( 'Yes', 'saturnthemes-industry' ) => 'yes' ),
				        'std'        => 'no',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Title Color', 'saturnthemes-industry' ),
				        'param_name' => 'title_color',
				        'value'      => '',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Meta Color', 'saturnthemes-industry' ),
				        'param_name' => 'meta_color',
				        'value'      => '',
			        ),
			        array(
				        'type'       => 'colorpicker',
				        'heading'    => esc_html__( 'Arrow Color', 'saturnthemes-industry' ),
				        'param_name' => 'arrow_color',
				        'value'      => '',
			        ),
			        array(
				        'type'       => 'css_editor',
				        'heading'    => __( 'CSS', 'saturnthemes-industry' ),
				        'param_name' => 'css',
				        'group'      => __( 'Design Options', 'saturnthemes-industry' ),
			        ),
		        ),
	        ) );
}

// Autocomplete
function saturnthemes_industry_vc_autocomplete_taxonomies_field_search( $search_string ) {
	$data                = array();
	$vc_filter_by        = vc_post_param( 'vc_filter_by', '' );
	$vc_taxonomies_types = strlen( $vc_filter_by ) > 0 ? array( $vc_filter_by ) : array_keys( vc_taxonomies_types() );
	$vc_taxonomies       = get_terms( $vc_taxonomies_types, array(
		'hide_empty' => false,
		'search'     => $search_string,
	) );
	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data_item          = vc_get_term_object( $t );
				$data_item['value'] = $t->slug;
				$data[]             = $data_item;
			}
		}
	}

	return $data;
}

function saturnthemes_industry_vc_autocomplete_taxonomies_field_render( $term ) {
	$vc_taxonomies_types = vc_taxonomies_types();
	$terms               = get_terms( array_keys( $vc_taxonomies_types ), array(
		'include'    => array( $term['value'] ),
		'hide_empty' => false,
	) );
	$data                = false;
	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term          = $terms[0];
		$data          = vc_get_term_object( $term );
		$data['value'] = $term->slug;
	}

	return $data;
}

if ( function_exists( 'vc_add_' . 'shortcode_param' ) ) {
	call_user_func_array( 'vc_add_' . 'shortcode_param', array(
		'saturnthemes_industry_animation_type',
		'saturnthemes_industry_vc_animation_type_field',
	) );
}

function saturnthemes_industry_vc_animation_type_field( $settings, $value ) {
	$animation_groups = array(
		__( 'Attention Seekers', 'saturnthemes-industry' )  => array(
			'bounce',
			'flash',
			'pulse',
			'rubberBand',
			'shake',
			'swing',
			'tada',
			'wobble',
		),
		__( 'Bouncing Entrances', 'saturnthemes-industry' ) => array(
			'bounceIn',
			'bounceInDown',
			'bounceInLeft',
			'bounceInRight',
			'bounceInUp',
		),
		__( 'Fading Entrances', 'saturnthemes-industry' )   => array(
			'fadeIn',
			'fadeInDown',
			'fadeInDownBig',
			'fadeInLeft',
			'fadeInLeftBig',
			'fadeInRight',
			'fadeInRightBig',
			'fadeInUp',
			'fadeInUpBig',
		),
		__( 'Flippers', 'saturnthemes-industry' )           => array( 'flip', 'flipInX', 'flipInY' ),
		__( 'Lightspeed', 'saturnthemes-industry' )         => array( 'lightSpeedIn' ),
		__( 'Rotating Entrances', 'saturnthemes-industry' ) => array(
			'rotateIn',
			'rotateInDownLeft',
			'rotateInDownRight',
			'rotateInUpLeft',
			'rotateInUpRight',
		),
		__( 'Sliders', 'saturnthemes-industry' )            => array( 'slideInDown', 'slideInLeft', 'slideInRight' ),
		__( 'Specials', 'saturnthemes-industry' )           => array( 'hinge', 'rollIn' ),
	);

	$html = '<select name="' . $settings['param_name'] . '" class="wpb_vc_param_value dropdown wpb-input wpb-select ' . $settings['param_name'] . ' ' . $settings['type'] . '">';

	$html .= '<option value="">' . esc_html( 'none', 'saturnthemes-industry' ) . '</option>';

	foreach ( $animation_groups as $animation_group => $animations ) {
		$html .= '<optgroup label="' . esc_attr( $animation_group ) . '">';
		foreach ( $animations as $animation ) {
			$selected = '';
			if ( $animation == $value ) {
				$selected = ' selected="selected"';
			}
			$html .= '<option value="' . esc_attr( $animation ) . '"' . esc_attr( $selected ) . '>' . $animation . '</option>';
		}
		$html .= '</optgroup>';
	}

	$html .= '</select>';

	return $html;
}