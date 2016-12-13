<?php
$section  = 'header_preset';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'preset',
	'settings'    => 'header_preset',
	'label'       => __( 'Preset', 'saturnthemes-industry' ),
	'section'   => $section,
	'priority'    => $priority ++,
	'description' => esc_html__( 'Choose header style from our predefined presets', 'saturnthemes-industry' ),
	'default'     => '1',
	'choices'     => array(
		'1' => array(
			'label'    => __( 'Preset 1', 'saturnthemes-industry' ),
			'settings' => array(
				'header_type' => 'header-01',
			),
		),
		'2' => array(
			'label'    => __( 'Preset 2', 'saturnthemes-industry' ),
			'settings' => array(
				'header_type' => 'header-02',
				'header_primary_menu_align' => 'left',
				'header_primary_menu_item_link_color' => '#FFF',
				'header_top_bar_bg' => '#EEEEEE',
				'header_top_bar_color' => '#868686',
				'header_top_bar_button_bg' => PRIMARY_COLOR,
				'header_top_bar_button_color' => '#FFF',
				'header_top_bar_button_icon' => '#454545',
				'header_top_bar_border_bottom_button' => '#454545'
			),
		),
		'3' => array(
			'label'    => __( 'Preset 3', 'saturnthemes-industry' ),
			'settings' => array(
				'header_type' => 'header-03',
				'header_nav_bg' => PRIMARY_COLOR,
				'header_primary_menu_align' => 'left',
				'header_primary_menu_item_link_color' => '#FFF',
				'header_primary_menu_item_border_bottom_color_hover' => '#454545',
				'header_top_bar_bg' => '#EEEEEE',
				'header_top_bar_color' => '#868686',
				'header_top_bar_button_bg' => PRIMARY_COLOR,
				'header_top_bar_button_color' => '#FFF',
				'header_top_bar_button_icon' => '#454545',
				'header_top_bar_border_bottom_button' => '#454545'
			),
		),
		'4' => array(
			'label'    => __( 'Preset 4', 'saturnthemes-industry' ),
			'settings' => array(
                'header_type' => 'header-04',
				'header_nav_bg' => '#FFF',
				'header_primary_menu_align' => 'left',
				'header_layout_2_primary_menu_item_border_color' => '#EEE',
				'header_top_bar_bg' => '#FFF',
				'header_top_bar_color' => '#868686',
				'header_top_bar_button_bg' => '#EEE',
				'header_top_bar_button_color' => '#454545',
				'header_top_bar_button_icon' => PRIMARY_COLOR,
			),
		),
		'5' => array(
			'label'    => __( 'Preset 5', 'saturnthemes-industry' ),
			'settings' => array(
				'header_type' => 'header-05',
				'site_logo'   => 'http://industry.saturnthemes.com/images/logo-footer.png',
				'header_top_bar_button_bg' => '#01B9E6',
			    'header_top_bar_button_icon' => '#454545',
				'header_top_bar_border_bottom_button' => '#FFF',
				'header_bg' => '#333333',
				'header_color_main' => '#FFF',
				'header_primary_menu_item_link_color' => '#FFF',
			),
		),
	),
) );