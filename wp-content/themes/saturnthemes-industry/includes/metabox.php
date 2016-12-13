<?php
add_filter( 'saturnthemes_industry_page_meta_box_presets', 'saturnthemes_industry_page_meta_box_presets' );
function saturnthemes_industry_page_meta_box_presets( $presets ) {
    $presets[] = 'footer_preset';
    $presets[] = 'header_preset';

    return $presets;
}

add_action( 'cmb2_admin_init', 'saturnthemes_industry_register_page_metabox' );
function saturnthemes_industry_register_page_metabox() {
    $prefix = 'saturnthemes_industry_';

    $cmb = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => __( 'Page Settings', 'saturnthemes-industry' ),
        'object_types' => array( 'page', 'services' ),
        'context'      => 'side',
        'priority'     => 'default',
        'show_names'   => true,
    ) );

    $sidebars = get_option( 'saturnthemes_industry_custom_sidebars' );
    if ( ! is_array( $sidebars ) ) {
        $sidebars = array();
    }

    $sidebar_options = array(
        '' => esc_html__( 'Select', 'saturnthemes-industry' ),
    );
    foreach ( $sidebars as $sidebar ) {
        $sidebar_options[ $sidebar ] = $sidebar;
    }

    $fields = array(
        array(
            'name' => __( 'Page Layout', 'saturnthemes-industry' ),
            'id'   => $prefix . 'page_layout',
            'type'    => 'select',
            'options' => array(
                ''              => esc_html__( 'Select', 'saturnthemes-industry' ),
                'wide'          => esc_html__( 'Wide', 'saturnthemes-industry' ),
                'boxed'         => esc_html__( 'Boxed', 'saturnthemes-industry' ),
            ),
        ),
        array(
            'name' => __( 'Sidebar Position', 'saturnthemes-industry' ),
            'id'   => $prefix . 'sidebar_position',
            'type'    => 'select',
            'options' => array(
                ''              => esc_html__( 'Select', 'saturnthemes-industry' ),
                'no-sidebar'    => esc_html__( 'No Sidebar', 'saturnthemes-industry' ),
                'left-sidebar'  => esc_html__( 'Left Sidebar', 'saturnthemes-industry' ),
                'right-sidebar' => esc_html__( 'Right Sidebar', 'saturnthemes-industry' ),
            ),
        ),
        array(
            'name' => __( 'Sidebar', 'saturnthemes-industry' ),
            'id'   => $prefix . 'sidebar',
            'type'    => 'select',
            'options' => $sidebar_options,
        ),
    );

    // Header & Footer presets
    $presets = apply_filters( 'saturnthemes_industry_page_meta_box_presets', array() );
    $preset_meta_boxes = array();

    if ( ! empty( $presets ) ) {
        foreach ( $presets as $preset ) {
            if ( ! empty( Kirki::$fields[ $preset ] ) && ! empty( Kirki::$fields[ $preset ]['choices'] ) ) {
                $kirki_preset = Kirki::$fields[ $preset ];
                $options      = array( '' => '' );

                foreach ( $kirki_preset['choices'] as $preset_choice_value => $preset_choice ) {
                    $options[ $preset_choice_value ] = $preset_choice['label'];
                }

                $preset_meta_boxes[] = array(
                    'name'    => $kirki_preset['label'],
                    'desc'    => isset( $kirki_preset['description'] ) ? $kirki_preset['description'] : '',
                    'id'      => $prefix . $preset,
                    'type'    => 'select',
                    'options' => $options,
                );
            }
        }
    }

    $reverse_preset_meta_boxes = array_reverse( $preset_meta_boxes );

    foreach ( $reverse_preset_meta_boxes as $preset_meta_box ) {
        $fields[] = $preset_meta_box;
    }

    $fields[] = array(
        'name' => __( 'Overlay Header', 'saturnthemes-industry' ),
        'id'   => $prefix . 'overlay_header',
        'desc' => __( 'Enable overlay header.', 'saturnthemes-industry' ),
        'type' => 'checkbox',
    );

    $fields[] = array(
        'name' => __( 'Background Image', 'saturnthemes-industry' ),
        'desc' => __( 'Choose background image of page.', 'saturnthemes-industry' ),
        'id'   => $prefix . 'background_image',
        'type' => 'file',
    );

    $fields[] = array(
        'name' => __( 'Background Repeat', 'saturnthemes-industry' ),
        'id'   => $prefix . 'background_repeat',
        'type'    => 'select',
        'options' => array(
            ''          => esc_html__( 'Select', 'saturnthemes-industry' ),
            'no-repeat' => esc_html__( 'No Repeat', 'saturnthemes-industry' ),
            'repeat'    => esc_html__( 'Repeat', 'saturnthemes-industry' ),
            'repeat-x'  => esc_html__( 'Repeat Horizontally', 'saturnthemes-industry' ),
            'repeat-y'  => esc_html__( 'Repeat Vertically', 'saturnthemes-industry' ),
        ),
    );

    $fields[] = array(
        'name' => __( 'Background Position', 'saturnthemes-industry' ),
        'id'   => $prefix . 'background_position',
        'type'    => 'select',
        'options' => array(
            ''              => esc_html__( 'Select', 'saturnthemes-industry' ),
            'left top'      => esc_html__( 'Left Top', 'saturnthemes-industry' ),
            'left center'   => esc_html__( 'Left Center', 'saturnthemes-industry' ),
            'left bottom'   => esc_html__( 'Left Bottom', 'saturnthemes-industry' ),
            'center top'    => esc_html__( 'Center Top', 'saturnthemes-industry' ),
            'center center' => esc_html__( 'Center Center', 'saturnthemes-industry' ),
            'center bottom' => esc_html__( 'Center Bottom', 'saturnthemes-industry' ),
            'right top'     => esc_html__( 'Right Top', 'saturnthemes-industry' ),
            'right center'  => esc_html__( 'Right Center', 'saturnthemes-industry' ),
            'right bottom'  => esc_html__( 'Right Bottom', 'saturnthemes-industry' ),
        ),
    );

    $fields[] = array(
        'name' => __( 'Background Attachment', 'saturnthemes-industry' ),
        'id'   => $prefix . 'background_attachment',
        'type'    => 'select',
        'options' => array(
            ''       => esc_html__( 'Select', 'saturnthemes-industry' ),
            'scroll' => esc_html__( 'Scroll', 'saturnthemes-industry' ),
            'fixed'  => esc_html__( 'Fixed', 'saturnthemes-industry' ),
        ),
    );

	$fields[] = array(
		'name' => __( 'Show Page Title', 'saturnthemes-industry' ),
		'id'   => $prefix . 'page_title_show',
		'type'    => 'select',
		'options' => array(
			''       => esc_html__( 'Inherit from general setting', 'saturnthemes-industry' ),
			'yes' => esc_html__( 'Yes', 'saturnthemes-industry' ),
			'no'  => esc_html__( 'No', 'saturnthemes-industry' ),
		),
	);

	$fields[] = array(
		'name' => __( 'Page Title\'s Background Image', 'saturnthemes-industry' ),
		'id'   => $prefix . 'page_title_background',
		'type'    => 'file',
	);
    foreach ( $fields as $field ) {
        $cmb->add_field( $field );
    }
}

add_action( 'cmb2_admin_init', 'saturnthemes_industry_register_services_metabox' );
function saturnthemes_industry_register_services_metabox() {
	$prefix = 'saturnthemes_industry_';

	$cmb = new_cmb2_box( array(
		                     'id'           => $prefix . 'metabox-services',
		                     'title'        => __( 'Services Settings', 'saturnthemes-industry' ),
		                     'object_types' => array( 'services' ),
		                     'context'      => 'side',
		                     'priority'     => 'default',
		                     'show_names'   => true,
	                     ) );

	$fields[] = array(
		'name' => __( 'Icon', 'saturnthemes-industry' ),
		'id'   => $prefix . 'icon',
		'type'    => 'icon_chooser',
	);
	foreach ( $fields as $field ) {
		$cmb->add_field( $field );
	}
}
