<?php
$section  = 'header_primary_menu';
$priority = 1;

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'setting'  => 'header_primary_menu_legend_general',
	'label'    => esc_html__( 'General', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'select',
	'settings' => 'header_primary_menu_align',
	'label'    => __( 'Align', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => 'center',
	'priority' => $priority ++,
	'choices'  => array(
		'left'   => esc_html__( 'Left', 'saturnthemes-industry' ),
		'center' => esc_html__( 'Center', 'saturnthemes-industry' ),
		'right'  => esc_html__( 'Right', 'saturnthemes-industry' ),
	),
	'output'   => array(
		array(
			'element'  => '#primary-menu',
			'property' => 'text-align',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'legend',
	'setting'  => 'header_primary_menu_legend_menu_item',
	'label'    => esc_html__( 'Menu Item', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'typography',
	'setting'  => 'header_primary_menu_item_font',
	'label'    => esc_html__( 'Font', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => array(
		'font-family'    => HEADING_FONT_FAMILY,
		'font-size'      => '14px',
		'font-weight'    => '700',
	),
	'choices'  => array(
		'font-style'     => false,
		'font-family'    => true,
		'font-size'      => true,
		'font-weight'    => true,
		'line-height'    => false,
		'letter-spacing' => false,
	),
	'output'   => array(
		array(
			'element' => '#primary-menu > .menu-item > a, #primary-menu > ul > li > a',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'select',
	'settings' => 'header_primary_menu_text_transform',
	'label'    => __( 'Text Transform', 'saturnthemes-industry' ),
	'section'  => $section,
	'default'  => 'uppercase',
	'priority' => $priority ++,
	'choices'  => array(
		'none'      => esc_html__( 'None', 'saturnthemes-industry' ),
		'uppercase' => esc_html__( 'Uppercase', 'saturnthemes-industry' ),
		'lowercase' => esc_html__( 'Lowercase', 'saturnthemes-industry' ),
	),
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item > a, #primary-menu > ul > li > a',
			'property' => 'text-transform',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_primary_menu_item_link_color',
	'label'    => esc_html__( 'Link Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => SECONDARY_COLOR,
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item > a, #primary-menu > ul > li > acenter, .header-layout-2 .mini-cart .cart-contents, .header-layout-2 #header-search',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_primary_menu_item_icon_color',
	'label'    => esc_html__( 'Icon Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => SECONDARY_COLOR,
	'output'   => array(
		array(
			'element'  => '#primary-menu > .menu-item > a > .menu-item-icon',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color',
	'setting'  => 'header_primary_menu_item_border_bottom_color_hover',
	'label'    => esc_html__( 'Border Bottom on Hover or Active', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PRIMARY_COLOR,
	'output'   => array(
		array(
			'element'  => '#primary-menu.menu > .menu-item:hover, #primary-menu.menu > .menu-item.current-menu-item, .header-layout-2 #primary-menu.menu > .menu-item:hover > a, .header-layout-2 #primary-menu.menu > .menu-item.current-menu-item > a',
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => ' .header-layout-2 .mini-cart .cart-contents .count, .header-contact-details-list .header-contact-detail-icon i',
			'property' => 'background-color'
		),
		array(
			'element'  => '.header-contact-details-list .header-contact-detail-icon i:after',
			'property' => 'border-right-color'
		),
	),
) );

Kirki::add_field( 'saturnthemes', array(
	'type'     => 'color-alpha',
	'setting'  => 'header_layout_2_primary_menu_item_border_color',
	'label'    => esc_html__( 'Border Color', 'saturnthemes-industry' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'rgba( 255, 255, 255, .15 )',
	'output'   => array(
		array(
			'element'  => '.header-layout-2 #primary-menu.menu > .menu-item, .header-04 .header-nav, .header-04',
			'property' => 'border-color',
		),
	),
) );