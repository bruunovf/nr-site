<?php
$section  = 'header_menu_dropdown';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'setting'  => 'header_menu_dropdown_legend_general',
	'label'    => esc_html__( 'General', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_background_color',
	'label'    => __( 'Background Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#EEE',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > .menu-item .sub-menu, .menu > ul > li .children',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_item_bg_hover',
	'label'    => __( 'Sub-menu Item BG Hover', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => SECONDARY_COLOR,
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > .menu-item.narrow .sub-menu > li:hover, .menu > .menu-item.narrow .children > li:hover, .menu > ul > li .sub-menu > li:hover, .menu > ul > li .children > li:hover,.menu > .menu-item.narrow .sub-menu .sub-menu, .menu > .menu-item.narrow .sub-menu .children, .menu > .menu-item.narrow .children .sub-menu, .menu > .menu-item.narrow .children .children, .menu > ul > li .sub-menu .sub-menu, .menu > ul > li .sub-menu .children, .menu > ul > li .children .sub-menu, .menu > ul > li .children .children',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_link_level3_bg_color',
	'label'    => __( 'Sub-menu Level 3 BG Hover', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#555555',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '#header .menu > .menu-item .sub-menu .sub-menu >li > a:hover',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_border_color',
	'label'    => __( 'Border Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#DDDDDD',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > .menu-item.narrow .sub-menu > li, .menu > .menu-item.narrow .children > li, .menu > ul > li .sub-menu > li, .menu > ul > li .children > li, .menu > .menu-item.menu-item-mega-menu > .sub-menu > .menu-item > .sub-menu .sub-menu > li, #menu-side > .menu-item.narrow > .sub-menu > li, #menu-side > .menu-item .menu-item.narrow > .sub-menu > li',
			'property' => 'border-color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_link_color',
	'label'    => __( 'Link Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#333333',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '#header .menu > .menu-item >.sub-menu > .menu-item > a,.menu .sub-menu .menu-item-has-children:after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_link_color_hover',
	'label'    => __( 'Link Color Hover', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#FFFFFF',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '#header .menu > .menu-item.narrow .sub-menu > li:hover >a, #header .menu > .menu-item.narrow .children > li:hover >a, #header .menu > ul > li .sub-menu > li:hover >a, #header .menu > ul > li .children > li:hover >a,.menu .sub-menu .menu-item-has-children:hover:after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_link_level3_color',
	'label'    => __( 'Link Item Level 3 Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#CCCCCC',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '#header .menu > .menu-item .sub-menu .sub-menu >li > a',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'settings' => 'header_menu_dropdown_icon_color',
	'label'    => __( 'Icon Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => '#000000',
	'priority' => $priority ++,
	'output' => array(
		array(
			'element'  => '.menu > .menu-item li > a .menu-item-icon, .menu > .menu-item .sub-menu > li > a:not(.has-icon):after',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'setting'  => 'header_menu_dropdown_legend_mega_menu',
	'label'    => esc_html__( 'Mega Menu', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority++,
) );
